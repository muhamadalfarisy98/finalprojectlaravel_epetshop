<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 
use DB;
use PDF;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    public function index_shop()
    {
        //
        $product = Product::all();
        return view('pages.shop', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $uom = DB::table('uom')->get();
        return view('product.view', compact('uom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
    		'nama_barang' => 'required',
    		'harga' => 'required',
            'stock_quantity' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:2200',
            'uom_id' => 'required',
            'keterangan' => 'required',
    	]);

        $image = $request->image;
        // agar namanya uniq, ngambil nama asli dari filenya
        $new_image = time() .  ' - ' . $image->getClientOriginalName();

        product::create([
    		'nama_barang' => $request->nama_barang,
    		'harga' => $request->harga,
            'image' => $new_image,
            'uom_id' => $request->uom_id,
            'keterangan' => $request->keterangan,
            'stock_quantity' => $request->stock_quantity,
    	]);

        //simpan gambar di public/poster
        $image->move('product_asset/', $new_image);

    	return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // first ambil satu data 
        $product = DB::table('product')->where('id', $id)->first();
        $uom = DB::table('uom')
            ->join('product', 'product.uom_id', '=', 'uom.id')
            ->where('product.id', $id)
            ->select('uom.nama_unit')
            ->get();
        return view('product.show', compact('product'), compact('uom'));
    }

    public function showdetails($id)
    {
        //
        // first ambil satu data 
        $product = DB::table('product')->where('id', $id)->first();
        $uom = DB::table('uom')
            ->join('product', 'product.uom_id', '=', 'uom.id')
            ->where('product.id', $id)
            ->select('uom.nama_unit')
            ->get();
        return view('pages.product', compact('product'), compact('uom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        $uom = DB ::table('uom')->get();
        return view('product.edit', compact('product'),compact('uom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
    		'nama_barang' => 'required',
    		'harga' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:2200',
            'uom_id' => 'required',
            'stock_quantity' => 'required',
            'keterangan' => 'required',
    	]);

        $product = Product::findorfail($id);

        if ($request->has('image')){
            $path = "product_asset/";
            File::delete($path . $product->image);
            $image = $request->image;
            $new_image = time() . ' - ' . $image->getClientOriginalName();
            $image->move('product_asset/', $new_image);
            $product_data = [
                'nama_barang' => $request->nama_barang,
                'keterangan' => $request->keterangan,
                'image' => $new_image,
                'uom_id' => $request->uom_id,
                'stock_quantity' => $request->stock_quantity,
                'harga' => $request->harga,
            ];
        } else{
            $product_data = [
                'nama_barang' => $request->nama_barang,
                'keterangan' => $request->keterangan,
                'uom_id' => $request->uom_id,
                'stock_quantity' => $request->stock_quantity,
                'harga' => $request->harga,
            ];
        }

        $product->update($product_data);
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findorfail($id);
        $product->delete();
        $path = 'product_asset/';
        if ($product->image) {
            File::delete($path . $product->image);
        } else {
            // 
        }
        
        

        return redirect('/product');
    }
    public function cetak_pdf()
    {
        $product = Product::all();

        $pdf = PDF::loadview('product.product_pdf', ['product' => $product]);
        return $pdf->stream();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment; 
use DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment = Payment::all();
        return view('payment.index', compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $payment = DB::table('payment')->get();
        return view('payment.view', compact('payment'));
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
    		'provider' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:2200',
    	]);

        $image = $request->image;
        // agar namanya uniq, ngambil nama asli dari filenya
        $new_image = time() .  ' - ' . $image->getClientOriginalName();

        payment::create([
    		'provider' => $request->provider,
            'image' => $new_image,
    	]);

        //simpan gambar di public/poster
        $image->move('product_asset/', $new_image);

    	return redirect('/payment');
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
        $payment = DB::table('payment')->where('id', $id)->first();
        return view('payment.show', compact('payment'));
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
        $payment = Payment::find($id);
        return view('payment.edit', compact('payment'));
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
    		'provider' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:2200',
    	]);

        $payment = Payment::findorfail($id);

        if ($request->has('image')){
            $path = "product_asset/";
            File::delete($path . $payment->image);
            $image = $request->image;
            $new_image = time() . ' - ' . $image->getClientOriginalName();
            $image->move('product_asset/', $new_image);
            $payment_data = [
                'nama_barang' => $request->nama_barang,
                'image' => $new_image,  
            ];
        } else{
            $payment_data = [
                'nama_barang' => $request->nama_barang,
            ];
        }

        $payment->update($payment_data);
        return redirect('/payment');
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
        $payment = Payment::findorfail($id);
        $payment->delete();
        $path = 'product_asset/';
        if ($payment->image) {
            File::delete($path . $payment->image);
        } else {
            // 
        }
        return redirect('/payment');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Uom; // panggil model

class UomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $uom = Uom::all();
        return view('uom.index', compact('uom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $genre = DB::table('genre')->get();
        return view('uom.view',);
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
    		'nama_unit' => 'required',
    	]);

        Uom::create([
    		'nama_unit' => $request->nama_unit,
    	]);
        //simpan gambar di public/poster
    	return redirect('/uom');
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
        $uom = Uom::find($id);
        return view('uom.edit', compact('uom'));
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
    		'nama_unit' => 'required',
    	]);

        $uom = Uom::findorfail($id);

        
        $uom_data = [
            'nama_unit' => $request->nama_unit,
        ];
        

        $uom->update($uom_data);
        return redirect('/uom');
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
        $uom = Uom::findorfail($id);
        $uom->delete();

        return redirect('/uom');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\jenis;
use Illuminate\Http\Request;

class barangcontroller extends Controller
{
    /**
     * index
     * 
     *  @return view
     */
    public function index()
    {

        //render view with posts
        return view('barang.index')->with([
            'barang'=> barang::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('barang.create')->with([
            'jenis'=> jenis::all(),
        ]);
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namabarang' => 'required',
            'jenis' => 'required',
            'tgldikirim' => 'required',
            'tglditerima' => 'required',
        ]);

        $barang = new barang;
        $barang->namabarang = $request->namabarang;
        $barang->jenis = $request->jenis;
        $barang->tgldikirim = $request->tgldikirim;
        $barang->tglditerima = $request->tglditerima;
        $barang->save();

        return to_route('barang.index')->with('success', 'data ditambah'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = barang::find($id);
        if (!$barang) return redirect()->route('barang.index')
            ->with('error_message', 'barang dengan id = ' . $id . ' tidak ditemukan');
        return view('barang.edit', [
            'barang' => $barang,
            'jenis' => jenis::all()
        ]);
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
        $request->validate([
            'namabarang' => 'required',
            'jenis' => 'required',
            'tgldikirim' => 'required',
            'tglditerima' => 'required',
        ]);

        $barang = barang::find($id);
        $barang->namabarang = $request->namabarang;
        
        $barang->jenis = $request->jenis;
        
        $barang->tgldikirim = $request->tgldikirim;
        
        $barang->tglditerima = $request->tglditerima;
        $barang->save();

        return to_route('barang.index')->with('success', 'data ditambah'); 
    
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::find($id);
        $barang->delete();

        return back()->with('success', 'data dihapus');
    }
}


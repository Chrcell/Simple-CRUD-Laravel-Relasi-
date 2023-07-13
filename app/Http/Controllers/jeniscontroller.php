<?php

namespace App\Http\Controllers;

use App\Models\jenis;

use Illuminate\Http\Request;

class jeniscontroller extends Controller
{
    /**
     * index
     * 
     *  @return view
     */
    public function index()
    {

        //render view with posts
        return view('jenis.index')->with([
            'jenis'=> jenis::all(),
        ]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis.create');
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
            'jenisbarang' => 'required',
        ]);

        $jenis = new jenis;
        $jenis->jenisbarang = $request->jenisbarang;
        $jenis->save();

        return to_route('jenis.index')->with('success', 'data ditambah'); 
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
       
        return view('jenis.edit')->with([
            'jenis'=>jenis::find($id),
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
            'jenisbarang' => 'required|min:1',
        ]);

        $jenis = jenis::find($id);
        $jenis->jenisbarang = $request->jenisbarang;
        $jenis->save();

        return to_route('jenis.index')->with('success', 'data ditambah'); 
    
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = jenis::find($id);
        $jenis->delete();

        return back()->with('success', 'data dihapus');
    }
}


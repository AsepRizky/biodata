<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guruM;

class guruR extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guruM = guruM::all();
        return view('guru', compact('guruM'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru_create');
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
            'nip'=>'required',
            'nama_guru'=>'required',
            'mapel'=>'required',
        ]);
    

    guruM::create($request->post());
    return redirect()->route('guru.index')->
    with('succes','Guru Berahasil Ditambahkan');
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
            'nip'=>'required',
            'nama_guru'=>'required',
            'mapel'=>'required',
        ]);
      

        guruM::where('id',$id)->update($data);
        return redirect()->route('guru.index')->
        with('success','Guru Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        guruM::where('id',$id)->delete();
        return redirect()->route('guru.index')->
        with('success','Guru Berahasil Dihapus');
    }
}

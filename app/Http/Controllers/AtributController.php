<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atribut;

class AtributController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function atribut()
    {
        $data=Atribut::all();
        return view ('atribut' ,['atribut'=>$data]);
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahrules()
    {
        return view ('tambahrules');
    }
    public function rules()
    {
        $data=Atribut::all();
        return view ('rules' ,['atribut'=>$data]);
        // dd($data);
    }

    public function result()
    {
        $data=Atribut::all();
        return view ('result' ,['atribut'=>$data]);
        // dd($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $atribut=new atribut;
        $atribut->id = $request->id;
        $atribut->nama_atribut = $request->nama_atribut;
        $atribut->tipe = $request->tipe;
        $atribut->kepentingan=$request->kepentingan;
        $atribut->bobot = $request->bobot;  
        $atribut->atribut_pembanding= $request->atribut_pembanding;
        $atribut->save();
        return redirect('/rules');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atributs = Atribut::find($id);

        $atributs->delete();
        return redirect('/atribut')->with('success', 'Data Mahasiswa Berhasil Dihapus!');
    }
}

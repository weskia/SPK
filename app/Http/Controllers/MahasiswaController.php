<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mahasiswa()
    {
        $data=Mahasiswa::all();
        return view ('mahasiswa' ,['mahasiswa'=>$data]);
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view ('tambah');
    }

    public function nilai()
    {
        $data=Mahasiswa::all();
        return view ('nilai' ,['mahasiswa'=>$data]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        //dump($request);
        $mahasiswa=new mahasiswa;
        $mahasiswa->id = $request->id;
        $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswa->tahun = $request->tahun;
        $mahasiswa->semester = $request->semester;
        $mahasiswa->ipk = $request->ipk;
        $mahasiswa->tanggungan = $request->tanggungan;
        $mahasiswa->pendapatan = $request->pendapatan;
        $mahasiswa->prestasi = $request->prestasi;
        $mahasiswa->save();
        return redirect('/mahasiswa');
        
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
        $mahasiswas = Mahasiswa::find($id);

        $mahasiswas->delete();
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Dihapus!');
    }
}

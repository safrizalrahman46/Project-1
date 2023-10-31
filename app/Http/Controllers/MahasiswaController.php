<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\Dosen;
use Dompdf\Dompdf;
use PDF;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('Admin.mahasiswa.index', ['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Admin.mahasiswa.create');
    }

    public function downloadpdf()
    {
        $mahasiswa = Mahasiswa::all();
        $pdf = PDF::loadview('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_mhs.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'  => 'required',
            'jenkel'  => 'required',
            'alamat'  => 'required',
            'hp'  => 'required',
            'jurusan'  => 'required',
            'email'  => 'required',
        ]);

        Mahasiswa::create([
            'nama' =>$request->nama,
            'jenkel' =>$request->jenkel,
            'alamat' =>$request->alamat,
            'hp' =>$request->hp,
            'jurusan' =>$request->jurusan,
            'email' =>$request->email,
        ]);

        $mahasiswa = Mahasiswa::create($request->all());
        if($request->hasFile('foto')){
                $request->file('foto')->move('images/' ,$request->file('foto')->getClientOriginalName());
                $mahasiswa->foto =$request->file('foto')->getClientOriginalName();
                $mahasiswa->save();
        }

        if($request->hasFile('no_ktp')){
            $request->file('no_ktp')->move('images/' ,$request->file('no_ktp')->getClientOriginalName());
            $mahasiswa->no_ktp =$request->file('no_ktp')->getClientOriginalName();
            $mahasiswa->save();
    }


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
        $mahasiswa = mahasiswa::find($id);
        return view('admin.mahasiswa.edit', ['mahasiswa'=>$mahasiswa]);
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
        $this->validate($request, [
            'nama'  => 'required',
            'jenkel'  => 'required',
            'alamat'  => 'required',
            'hp'  => 'required',
            'jurusan'  => 'required',
            'email'  => 'required'
        ]);

        // $mahasiswa = Mahasiswa::find($id);
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->jenkel = $request->jenkel;
        // $mahasiswa->alamat = $request->alamat;
        // $mahasiswa->hp = $request->hp;
        // $mahasiswa->jurusan = $request->jurusan;
        // $mahasiswa->email = $request->email;

        // $mahasiswa->save();

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->back();
    }

    public function search(Request $request ){
        if($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama','LIKE','%' .$request->search. '%')->get();
        }
        else{
            $mahasiswa = Mahasiswa::all();
        }
        return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);

    }

    public function dosen() {
        $dosen = Dosen::all();
        return view('admin.mahasiswa.dosen', ['dosen' => $dosen]);
    }

    public function matkul() {
        $mahasiswa = Mahasiswa::get();
        return view('admin.mahasiswa.matkul',['mahasiswa' => $mahasiswa]);
    }
}

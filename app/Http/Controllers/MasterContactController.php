<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Jenis_kontak;
use App\Models\Kontak;

class MasterContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('mastercontact',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master_contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute ini harus diisi'
        ];

        $this->validate($request,[
            'deskripsi' => 'required'
        ],$messages);
  
        Kontak::create([
            'id_siswa' => $request->id_siswa,
            'jenis_id' => $request->jenis_kontak,
            'deskripsi' => $request->deskripsi,  
        ]);

        return redirect('/admin/mastercontact')->with('pesan', 'Kontak baru berhasil ditambahkan ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = siswa::find($id);
        $kontak = $siswa->kontak;
        return view('master_contact.show',compact('kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kontak = Kontak::find($id);
        $jenis_kontak = Jenis_kontak::all();
        return view('master_contact.edit',compact('kontak','jenis_kontak'));
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
        $kontak = Kontak::find($id);
        $kontak->id = $request->id;
        $kontak->id_siswa = $request->id_siswa;
        $kontak->jenis_id = $request->jenis_id;
        $kontak->deskripsi = $request->deskripsi;
        $kontak->save();
        
        return redirect('/admin/masterproject')->with('pesan', 'Data Berhasil Diubah ! ');
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
    }

    public function newcontact($id){
        $siswa = Siswa::find($id);
        $jenis_kontak = Jenis_kontak::all();
        return view('master_contact.create',compact('siswa','jenis_kontak'));
    }

    public function ubah(Request $request, $id){
        $messages = [
            'required' => ':attribute ini harus diisi'
        ];

        $this->validate($request,[
            'deskripsi' => 'required'
        ],$messages);
        
        $kontak = Kontak::find($id);
        $kontak->id = $id;
        $kontak->id_siswa = $request->id_siswa;
        $kontak->jenis_id = $request->jenis_kontak;
        $kontak->deskripsi = $request->deskripsi;
        $kontak->save();
        
        return redirect('/admin/mastercontact')->with('pesan', 'Data Berhasil Diubah ! ');
    }
    public function hapus($id){
        Kontak::find($id)->delete();
        return redirect('/admin/mastercontact')->with('pesan', 'Data Berhasil Dihapus ! ');
    }
}

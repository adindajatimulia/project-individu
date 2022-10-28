<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\Siswa;
use Illuminate\Http\Request;

class MasterProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except("index","show");   
    }

    public function index()
    {
        $data = Siswa::all('id','nama');
        return view('masterproject',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('master_project.create');
    }

    public function newproject($id)
    {
        $siswa = Siswa::find($id);
        return view('master_project.create',compact('siswa'));
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
            'nama_project' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required'
        ],$messages);

        Projek::create([
            'id_siswa' => $request->id_siswa,
            'nama_projek' => $request->nama_project,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,     
        ]);

        return redirect('/admin/masterproject')->with('pesan', 'Project baru berhasil ditambahkan ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::find($id);
        $projek = $data->projek;
        return view('master_project.show',compact('projek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projek = Projek::find($id);
        return view('master_project.edit',compact('projek'));
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
    
    public function ubah(Request $request, $id)
    {
        $project = Projek::find($id);
        $project->id_siswa = $request->id_siswa;
        $project->nama_projek = $request->nama_project;
        $project->deskripsi = $request->deskripsi;
        $project->tanggal = $request->tanggal;
        $project->save();
        
        return redirect('/admin/masterproject')->with('pesan', 'Data Berhasil Diubah ! ');
    }

    public function hapus($id)
    {
        $data = Projek::find($id)->delete();
        return redirect('/admin/masterproject')->with('pesan', 'Data Berhasil Dihapus ! ');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Models\Siswa;
use File;
use Illuminate\Http\Request;

class MasterSiswaController extends Controller
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
        // $this->middleware('walikelas', ["only" => ["index","show"] ] );
   
     
    }
   
    public function index()
    {
        $data = Siswa::all();

        return view('mastersiswa' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master_siswa.create');
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
            'required' => ':attribute ini harus diisi',
            'mimes' => ':attribute harus bertipe jpg /png/jpeg',
            'max' => ':attribute melebihi maksimum karakter'
        ];
        
        // $request->validate([
            //     'nama' => 'required',
        //     'email' => 'required',
        //     'alamat' => 'required',
        //     'about' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'foto' => 'required'
        // ],$messages);
        $this->validate($request,[
            'nama' => 'required|max:15',
            'email' => 'required',
            'alamat' => 'required',
            'about' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg'
        ],$messages);

        // ambil file
        $file = $request->file('foto');
        // edit nama file
        $nama_file = time()."_".$file->getClientOriginalName();
        // proses upload
        $tujuan_upload = './image/';
        $file->move($tujuan_upload,$nama_file);
        
        Siswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'foto' => $nama_file,
            'about' => $request->about
        ]);

        return redirect('/admin/mastersiswa')->with('pesan', 'Data Berhasil Ditambahkan ! ');
        
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
        $kontak = $data->kontak;
        // dd($kontak);
        // return $kontak;
        return view('master_siswa.show', compact('data','kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::find($id);
        return view('master_siswa.edit',compact('data'));
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

        $siswa = Siswa::find('id');
        
        $messages = [
            'required' => ':attribute ini harus diisi',
            'mimes' => ':attribute harus bertipe jpg /png/jpeg'
        ];

        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'about' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'mimes:jpg,png,jpeg'
        ],$messages);

        if($request->foto != ''){

        $siswa = Siswa::find($id);
        

        // ambil file
        $file = $request->file('foto');
        // edit nama file
        $nama_file = time()."_".$file->getClientOriginalName();
        // proses upload
        $tujuan_upload = './image/';
        $file->move($tujuan_upload,$nama_file);

        // ganti foto
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->email = $request->email;
        $siswa->alamat = $request->alamat;
        $siswa->about = $request->about;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->foto = $nama_file;
        $siswa->save();
        return redirect('/admin/mastersiswa')->with('pesan', 'Data Berhasil Diubah ! ');

        }else{
            // tanpa ganti foto
            $siswa = Siswa::find($id);
            $siswa->nama = $request->nama;
            $siswa->email = $request->email;
            $siswa->alamat = $request->alamat;
            $siswa->about = $request->about;
            $siswa->jenis_kelamin = $request->jenis_kelamin;
            $siswa->save();
            return redirect('/admin/mastersiswa')->with('pesan', 'Data Berhasil Diubah ! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    
    }
    public function hapus($id)
    {
        $data=Siswa::find($id)->delete();
        return redirect('/admin/mastersiswa')->with('pesan', 'Data Berhasil Dihapus ! ');
    }
}

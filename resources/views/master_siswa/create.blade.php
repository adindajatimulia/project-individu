@extends('admin.admin')
@section('title', 'Create Master Siswa')
@section('content-title', 'TAMBAH DATA')
@section('content')

<a class="btn btn-success" href="{{ route('mastersiswa.index') }}"> Kembali </a>
<div class="row">
<div class="col-lg-12">
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah data</h6>
        </div> {{-- card header --}}
        <div class="card-body">
          {{-- ALERT ERROR --}}
          @if(count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          {{-- AKHIR ALERT ERROR --}}
            <form class="row g-3" method="POST" action="{{ route('mastersiswa.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-2">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="col-md-6 ">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-12 mb-2">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="col-12 mb-3">
                  <label for="about" class="form-label">About</label>
                  <input type="text" class="form-control" id="about" name="about">
                </div>
                <div class="col-12 mb-3">
                  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                  <select class="form-select form-select-lg mb-3 form-control" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="laki-laki" >Laki-Laki</option>
                    <option value="perempuan" >Perempuan</option>
                  </select>
                </div>
                <div class="col-12 mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="file" id="foto" name="foto" >
                </div>
                <div class="col-12">
                <button class="btn btn-primary" type="submit" >Submit</button>
                </div>
              </form>


        </div> {{-- card body --}}
    </div> {{-- card --}}
</div> {{--div.col-lg-12 --}}
</div> {{--div.row --}}

@endsection
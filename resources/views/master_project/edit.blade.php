@extends('admin.admin')
@section('title', 'Edit Master Project')
@section('content-title', '')
@section('content')


<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">edit your new project</h6>
    </div>
    <div class="card-body">
    <form class="row g-3" method="POST" action="{{  route('masterproject.ubah', $projek->id ) }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_siswa" value="{{ $projek->id_siswa }}">
        <div class="col-12 mb-2">
          <label for="nama_project" class="form-label">Nama Project</label>
          <input type="text" class="form-control" id="nama_project" name="nama_project" value="{{ $projek->nama_projek }}">
        </div>
        <div class="col-12 ">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $projek->deskripsi }}">
        </div>
        <div class="col-12">
            <label for="tanggal">Tanggal project</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $projek->tanggal }}">
        </div>
        <div class="col-12 mt-4">
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
    </form>
    </div>
</div>
  


@endsection
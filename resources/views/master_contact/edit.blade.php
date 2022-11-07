@extends('admin.admin')
@section('title', 'Edit Master Contact')
@section('content-title', 'EDIT DATA')
@section('content')

<div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">create your new contact</h6>
    </div>
    <div class="card-body">
    <form class="row g-3" method="POST" action="{{  route('mastercontact.ubah', $kontak->id ) }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_siswa" value="{{ $kontak->id_siswa }}" >
        <div class="col-12 mb-1">
          <label for="jenis_kontak" class="form-label">Jenis Kontak</label>
          <select class="form-select form-select-lg mb-3 form-control" aria-label="Default select example" id="jenis_kontak" name="jenis_kontak">
            @foreach ($jenis_kontak as $jenis)
            <option value="{{ $jenis->id }}" @if($jenis->id == $kontak->jenis_id) selected @endif >{{ $jenis->jenis_kontak }}</option>             
            @endforeach
          </select>
        </div>
        <div class="col-12 ">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $kontak->deskripsi }}">
        </div>

        <div class="col-12 mt-4">
        <button class="btn btn-primary " type="submit" >Submit</button>
        </div>
    </form>
    </div>
</div>


@endsection
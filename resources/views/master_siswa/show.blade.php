@extends('admin.admin')
@section('title', 'Detail Master Siswa')
@section('content-title', 'DETAIL DATA')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4 shadow">
                <div class="card-body" style="text-align: center">
                    <img src="/image/{{ $data->foto }}" width="200px" class="rounded-circle mb-3">
                    <h5> {{ $data->nama }} </h5>
                    <br>
                    <p class="mb-1">{{ $data->email }}</p>
                    <p>{{ $data->alamat }}</p>
                </div> {{-- card body  --}}
            </div> {{-- card --}}

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-user-plus" style="margin-right:10px;"></i> Kontak Siswa</h6>
                </div> {{-- card header --}}
                <div class="card-body">
                @foreach ($kontak as $item)
                    {{ $item->jenis->jenis_kontak }} :  {{ $item->deskripsi }}
                @endforeach
                </div> {{-- card body --}}
            </div> {{-- card --}}
        </div> {{-- col-4 --}}
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-tie" style="margin-right:10px;"></i>About Siswa</h6>
                </div> {{-- card header --}}
                <div class="card-body">
                    {{ $data->about }}
                </div> {{-- card body --}}
            </div> {{-- card --}}

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder-open" style="margin-right:10px;"></i>Project Siswa</h6>
                </div> {{-- card header --}}
                <div class="card-body">
                    
                </div> {{-- card body --}}
            </div> {{-- card  --}}
        </div> {{-- col-8 --}}
    </div> {{-- row --}}
</div> {{-- container --}}
{{--  --}}
@endsection
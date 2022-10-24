@extends('admin.admin')

@section('title', 'Master Siswa')
@section('content-title', 'Master Siswa')

@section('content')
@admin
<a class="btn btn-success" href="{{ route('mastersiswa.create') }}"> Tambah Data</a>
@endadmin
<div class="row">
<div class="col-lg-12"> 
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Master Siswa</h6>
        </div> {{-- card header --}}
        <div class="card-body">
        {{-- alert --}}
        @if (session('pesan'))
        <div class="alert alert-primary">
            {{ session('pesan') }}
        </div>
        @endif
        {{-- akhir alert --}}
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  style="text-align: center;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($data as $item)                   
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a class="btn btn-info btn-circle btn-sm" href="{{ route('mastersiswa.show', $item->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @admin
                                <a class="btn btn-warning btn-circle btn-sm"  href="{{ route('mastersiswa.edit', $item->id) }}">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="btn btn-danger btn-circle btn-sm"  href="{{ route('mastersiswa.hapus', $item->id) }}">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                @endadmin
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> {{-- card body --}}
    </div> {{-- card --}}
</div> {{--div.col-lg-12 --}}
</div> {{--div.row --}}

@endsection
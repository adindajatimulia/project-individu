<ul class="list-group">
    <li class="list-group-item active" aria-current="true">kontak anda</li>
    @foreach ($kontak as $item)       
    <li class="list-group-item" style="text-align: left">{{ $item->jenis->jenis_kontak }} : {{ $item->deskripsi }} 
        <span style="float: right;"> 
            <a class="btn btn-warning mt-2" type="button" href="{{ route('masterproject.edit',$item->id )}} "><i class="fas fa-pencil-alt"></i></a>
            <a class="btn btn-danger mt-2" type="button" href="{{ route('masterproject.hapus', $item->id) }}"><i class="fas fa-trash-alt"></i></a>
        </span>
    </li>   
    @endforeach
</ul>
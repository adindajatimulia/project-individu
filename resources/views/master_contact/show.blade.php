<ul class="list-group">
    <li class="list-group-item active" aria-current="true">kontak anda</li>
    @foreach ($kontak as $item)       
    <li class="list-group-item">{{ $item->jenis->jenis_kontak }} : {{ $item->deskripsi }}</li>   
    @endforeach
</ul>
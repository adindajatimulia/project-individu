<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;
class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'email',
        'foto',
        'about'
    ];
    // public function kontak(){
    //     return $this->belongsToMany( 'App\Models\Jenis_kontak','id_siswa', 'id')->withPivot('deskripsi');
    // }
    public function kontak(){
        return $this->hasMany(Kontak::class,'id_siswa', 'id'); 
    }
    public function projek(){
        return $this->hasMany(Projek::class, 'id_siswa', 'id' );
    }
    protected $table = 'siswa';
}

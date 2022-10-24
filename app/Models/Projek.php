<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_siswa',
        'nama_projek',
        'deskripsi',
        'tanggal',   
    ];
    public function siswa(){
        return $this->belongsTo( Projek::class, 'id_siswa', 'id' );
    }
    protected $table = 'projek';
}

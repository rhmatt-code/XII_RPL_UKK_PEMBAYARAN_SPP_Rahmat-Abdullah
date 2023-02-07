<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Siswa extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nis',
        'id_kelas',
        'id_kelas',
        'alamat',
        'no_telp',
        'id_spp',
    ];
    protected $table = "siswa";
    
    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
}

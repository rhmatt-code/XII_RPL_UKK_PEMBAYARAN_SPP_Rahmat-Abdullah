<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Siswa extends Model
{
    public $timestamps = false;
    public $primaryKey = 'nisn';
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'id_kelas',
        'alamat',
        'no_telp',
        'id_spp',
    ];
    protected $table = "siswa";

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, "id_kelas");
    }
    public function spp()
    {
        return $this->belongsTo(Spp::class, "id_spp", 'id_spp');
    }
}

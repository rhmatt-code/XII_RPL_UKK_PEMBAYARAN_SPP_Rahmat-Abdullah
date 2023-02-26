<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Petugas;

class Pembayaran extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id_pembayaran',
        'id_petugas',
        'nisn',
        'tgl_bayar',
        'bulan_dibayar',
        'tahun_dibayar',
        'id_spp',
        'jumlah_bayar',
    ];
    protected $table = "pembayaran";
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, "nisn", 'nisn');
    }
    public function Petugas()
    {
        return $this->belongsTo(Petugas::class, "id_petugas", 'id_petugas');
    }
}

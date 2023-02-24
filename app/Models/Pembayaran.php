<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    public $timestamps = false;
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
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Kelas extends Model
{
    public $timestamps = false;
    public $primaryKey = 'id_kelas';

    use HasFactory;
    protected $fillable = [
        'id_kelas',
        'nama_kelas',
        'kompetensi_keahlian',
    ];
    protected $table = "kelas";
    
     public function siswa(){
        return $this->belongsTo(Siswa::class);
     }
}

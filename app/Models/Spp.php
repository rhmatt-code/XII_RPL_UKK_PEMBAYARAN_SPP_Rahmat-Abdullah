<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    public $timestamps = false;
    public $primaryKey = 'id_spp';
    use HasFactory;
    protected $fillable = [
        'id_spp',
        'tahun',
        'nominal',
    ];
    protected $table = "spp";
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}

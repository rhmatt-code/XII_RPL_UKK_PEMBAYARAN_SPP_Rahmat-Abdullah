<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    public $timestamps = false;
    public $primaryKey = 'id_petugas';
    use HasFactory;
    protected $fillable = [
        'id_petugas',
        'username',
        'password',
        'nama_petugas',
        'level',
    ];
    protected $table = "petugas";
}

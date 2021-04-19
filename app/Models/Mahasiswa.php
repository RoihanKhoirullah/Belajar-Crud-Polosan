<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswas";
    protected $primarykey = "id";
    protected $fillable = [
        'id' , 'nim' , 'nama' , 'fakultas' , 'jurusan' , 'ipk' ];
        
}

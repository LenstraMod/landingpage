<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paketModel extends Model
{
    protected $table = 'paketsoal';

    protected $fillable = [
        'mapel',
        'kelas',
        'jurusan',
        'waktu',
        'bobotNilai',
    ];

    public function getAllPaket(){
        return $this->all();
    }
}

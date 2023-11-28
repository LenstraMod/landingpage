<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataSoal extends Model
{
    protected $table = 'soal';

    protected $fillable = [
        'mapel',
        'soal',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'option_e',
        'jawaban_benar'
    ];

    public function getAllSoal(){
        return $this->all();
    }
}

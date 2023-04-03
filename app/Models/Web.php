<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    protected $table = '_materi_web';
    public static function tampil(){
        return Web::all();
}
}
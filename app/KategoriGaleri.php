<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriGaleri; 
class KategoriGaleri extends Model
{
    protected $fillable = [
        'nama','users_id',
    ];
}

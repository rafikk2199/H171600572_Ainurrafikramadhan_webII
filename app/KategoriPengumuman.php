<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriPengumuman; 
class KategoriPengumuman extends Model
{
    protected $fillable = [
        'nama','users_id',
    ];
}

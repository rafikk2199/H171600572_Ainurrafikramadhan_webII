<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    function index(){
    	$KategoriArtikel=KategoriArtikel::all();

    return view('kategori_artikel.index',compact ('KategoriArtikel'));
    }
}

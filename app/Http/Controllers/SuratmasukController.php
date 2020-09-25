<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratmasuk;
class SuratmasukController extends Controller
{
    public function index(){
    $hasil = suratmasuk::all();
    return view('dashboard/suratmasuk',['liat'=>$hasil]);
}
}

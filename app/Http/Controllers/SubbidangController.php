<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subbidang;
class SubbidangController extends Controller
{
     public function index(){
     $hasil = subbidang::all();
     return view('dashboard/subbidang',['liat'=>$hasil]);
}
}

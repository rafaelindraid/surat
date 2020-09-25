<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class PenggunaController extends Controller
{
        public function index(){
     $hasil = user::all();
     return view('dashboard/pengguna',['liat'=>$hasil]);
}
}

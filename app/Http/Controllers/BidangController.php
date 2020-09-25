<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bidang;

class BidangController extends Controller
{
    public function index(){
     $hasil = Bidang::all();
     return view('dashboard/bidang',['liat'=>$hasil]);
}

}

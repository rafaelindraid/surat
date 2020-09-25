<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subbidang extends Model
{
    public function index()
		{
	     $hasil = subbidang::all();
		}
}



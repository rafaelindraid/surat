<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
	public function index()
		{
	     $hasil = bidang::all();
		}
}

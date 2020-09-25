<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    public function index()
		{
	     $hasil = suratmasuk::all();
		}
}
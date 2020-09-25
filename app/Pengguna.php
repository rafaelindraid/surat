<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Pengguna extends Model
{
         public function index()
		{
	     $hasil = user::all();
		}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
		return view('/home');
	}

	public function getNombre() {
		return view('/nombre');
	}

	public function getSearch() {
		return view('/buscador');
	}

}

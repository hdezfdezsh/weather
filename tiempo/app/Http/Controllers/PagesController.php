<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
		$tokio=shell_exec("python /home/usuario/tiempo/public/py/tokio.py ");
		//$array=explode(",", utf8_encode($output));

		$ny=shell_exec("python /home/usuario/tiempo/public/py/newYork.py ");
		//$array=explode(",", utf8_encode($output));

		$dubai=shell_exec("python /home/usuario/tiempo/public/py/dubai.py ");
		//$array=explode(",", utf8_encode($output));

		$berlin=shell_exec("python /home/usuario/tiempo/public/py/berlin.py ");
		//$array=explode(",", utf8_encode($output));

		return view('/home')
		->with('berlin',$berlin)
		->with('tokio',$tokio)
		->with('ny',$ny)
		->with('dubai',$dubai);
	}

	public function getNombre($data) {
		$output=shell_exec("python /home/usuario/tiempo/public/py/tiempo.py "  .$data);
		//$array=explode(",", utf8_encode($output));
		return view('/nombre')->with('output',$output);
	}
}

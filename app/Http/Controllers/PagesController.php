<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

		$links =['https://prueba.com' => 'Pagina prueba 1','http://laravel.com'=>'Laravel'
		];
	    return view('welcome',[
	    //'teacher' => 'Guido Contreras Woda',
	    'links' => $links]);
	}
	public function aboutUs()
	{
		return view('about'); 
	}
    
}

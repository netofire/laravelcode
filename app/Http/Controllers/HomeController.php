<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index() 
    {
    	$posts = [
    			[
    				'titulo' => 'Man must explore, and this is exploration at its greatest',
    				'resumo' => 'Problems look mighty small from 150 miles up',
    				'autor' => 'Start Bootstrap',
    				'data' => 'September 24, 2014'
    				],
    			[
	    			'titulo' => 'I believe every human has a finite number of heartbeats. I dont intend to waste any of mine.',
	    			'resumo' => '',
    				'autor' => 'Start Bootstrap',
    				'data' => 'August 12, 2014'
    				],
    			[
	    			'titulo' => 'Science has not yet mastered prophecy',
	    			'resumo' => 'We predict too much for the next year and yet far too little for the next ten.',
    				'autor' => 'Start Bootstrap',
    				'data' => 'July 24, 2014'
    				],
    			[
	    			'titulo' => 'Failure is not an option',
	    			'resumo' => 'Many say exploration is part of our destiny, but it’s actually our duty to future generations.',
    				'autor' => 'Start Bootstrap',
    				'data' => 'February 2, 2014'
    				]
    	];
    	return view('index', ['posts' => $posts]);
    }
}

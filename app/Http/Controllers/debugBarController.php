<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Barryvdh\Debugbar\Facade as Debugbar;

class debugBarController extends Controller
{
    public function index(){
        Debugbar::startMeasure('render','Time for getting books');

        $books = Book::all();
        Debugbar::stopMeasure('render');
        return view('welcome');
    }
}

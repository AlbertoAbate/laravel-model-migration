<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;  //app= namespace  car=classe

class HomeController extends Controller
{
    public function index(){

        //get data from db
        $cars= Car::all();
        //dump($cars);

        return view('home', compact('cars'));  //compact passa i dati alla view
    }
}

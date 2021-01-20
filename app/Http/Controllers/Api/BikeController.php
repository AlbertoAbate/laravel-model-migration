<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    public function index() {
        //return 'bikes api result json';

        // get bikes from db
        $bikes = Bike::all();
        //dd($bikes);

        //PER TRASFORMARE I DATI IN JSON!!
        return response()->json($bikes);
    }
}

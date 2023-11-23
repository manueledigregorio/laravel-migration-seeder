<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Composer;

class TrainController extends Controller
{
    public function index(){

        $trains = Train::all();

        return view('home', compact('trains'));

    }
}

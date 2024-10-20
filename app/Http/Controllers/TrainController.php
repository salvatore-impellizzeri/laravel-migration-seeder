<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index(){
        $oggi = Carbon::today();
        $treni_in_partenza = Train::whereDate("orario_di_partenza", ">=", $oggi)->get();

        return view('home', compact("treni_in_partenza"));
    }
}

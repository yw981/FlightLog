<?php

namespace App\Http\Controllers;

use App\FlightLog;
use Illuminate\Http\Request;

use App\Http\Requests;

class FlightLogController extends Controller
{
    public function index(){
        $flight_logs = FlightLog::all();
        //dd($flight_logs);
        return view('flightlog.index',compact('flight_logs',$flight_logs));
    }

    public function create(){
        return view('flightlog.create');
    }


}

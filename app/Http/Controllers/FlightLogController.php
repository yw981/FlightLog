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

    public function store(Requests\FlightLogCreateRequest $request)
    {
        //dd($request->all());
        $data = [
            //'user_id'=>\Auth::user()->id,
            'user_id'=>11,
        ];
        $fl = FlightLog::create(array_merge($request->all(),$data));
        return redirect('flightlog/'.$fl->id);
    }

    public function show($id){
        //dd($id);
        $fl = FlightLog::findOrFail($id);
        return view('flightlog.show',compact('fl'));
    }

    public function edit($id){
        //dd($id);
        $fl = FlightLog::findOrFail($id);
        if(\Auth::user()->id !== $fl->user_id){
            return redirect('');
        }
        return view('flightlog.edit',compact('fl'));
    }

    public function update(Requests\FlightLogCreateRequest $request,$id)
    {
        $fl = FlightLog::findOrFail($id);
        if(\Auth::user()->id !== $fl->user_id){
            return redirect('');
        }
        $fl->update($request->all());
        // redirect('')函数的参数中如果使用/无法跳转
        return redirect()->action('PostController@show',['id'=>$fl->id]);
    }


}

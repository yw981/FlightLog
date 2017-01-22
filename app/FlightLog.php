<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightLog extends Model
{
    //默认表名 flight_logs
    protected $fillable = ['user_id','flight_no','date','std','sta','from','to','via','seat','class','bn','atd','ata','reg','departure_runway','arrival_runway','boarding_pass'];

    public function user(){
        // 注意一定要写return !!!!
        return $this->belongsTo(User::class,'user_id'); // $discussion->user
    }
}

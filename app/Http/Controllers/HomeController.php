<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage($id){

        $time = Carbon::now('UTC'); // Current time
        $noon = Carbon::create($time->year, $time->month, $time->day, 0, 0, 0); //set time to 0:00
        $morning = Carbon::create($time->year, $time->month, $time->day, 5, 0, 0); //set time to 10:00
        $afternoon = Carbon::create($time->year, $time->month, $time->day, 11, 0, 0); //set time to 10:00
        $night = Carbon::create($time->year, $time->month, $time->day, 18, 0, 0); //set time to 18:00
        $morning_after = Carbon::create($time->year, $time->month, $time->day+1, 5, 0, 0); //set time to 18:00

        $greet = [];
        if($time->between($morning, $afternoon, true) || $time->between($noon, $morning, true)) {
         $greet = "Good Morning";
        }elseif($time->between($afternoon, $night, true)){
         $greet = "Good Afternoon";
        }elseif($time->between($night, $morning_after, true)){
         $greet = "Good Evening";
        }


        if($id == 1){
            $user = User::find($id);
            $level_name = $user->level->name;
        }else{
            $user = User::find($id);
            $level_name = $user->level->name;
        }

        return view('homepage', [
            'greet' => $greet,
            'nama' => $user->name,
            'level' => $level_name
        ]);
    }
}

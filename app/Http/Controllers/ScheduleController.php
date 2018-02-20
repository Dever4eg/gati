<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\ScheduleType;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() {
        $dates = Schedule::GetLastFiveArray();
        $default = $dates['default'];
        unset($dates['default']);

        return view('schedule', [
            'dates' => $dates,
            'default_date' => $default,
        ]);
    }

}

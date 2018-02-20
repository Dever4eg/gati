<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\ScheduleType;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() {
        return view('schedule', [
            'dates' => Schedule::getLastFiveDates(),
        ]);
    }

}
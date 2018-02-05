<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\ScheduleType;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() {
        $schedules = Schedule::orderBy('date', 'desc')->paginate(5);
        $types = ScheduleType::all();

        return view('schedule',compact('schedules', 'types'));
    }
}
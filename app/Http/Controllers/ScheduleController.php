<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() {
        $schedules = Schedule::orderBy('date', 'desc')->paginate(5);
        return view('schedule',['schedules' => $schedules]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\ScheduleType;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() {
        $schedules = Schedule::where('date', '>=', date("Y-m-d", strtotime('-1 days')))
            ->orderBy('date', 'asc')
            ->limit(5)
            ->get();

        $schedules = $schedules->count()<5 ? $schedules = Schedule::orderBy('date', 'asc')->limit(5)->get() : $schedules;

        $types = ScheduleType::all();

        return view('schedule',compact('schedules', 'types'));
    }
}
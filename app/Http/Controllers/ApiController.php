<?php

namespace App\Http\Controllers;

use App\ScheduleType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;
use App\Schedule;

class ApiController extends Controller
{
    public function posts() {
        return Post::orderBy('created_at', 'desc')->paginate(10);
    }

    public function post($slug) {
        $post = Post::where("slug", $slug)->first();
        $post = $post ? $post : Post::find($slug);
        return response()->json($post );
    }

    public function schedules() {
        return Schedule::orderBy('created_at', 'desc')->paginate(10);
    }

    public function schedule($slug) {
        $schedule = Schedule::where('date', $slug)->first();
        $schedule = $schedule ? $schedule : Schedule::find($slug);
        return response()->json($schedule);
    }

    public function scheduleTypes() {
        return ScheduleType::orderBy('created_at', 'desc')->paginate(10);
    }

    public function scheduleType($id) {
        return ScheduleType::find($id);
    }


}
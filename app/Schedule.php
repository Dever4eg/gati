<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function Type(){
        return $this->belongsTo('App\ScheduleType', 'schedule_types_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function Type(){
        return $this->belongsTo('App\ScheduleType', 'schedule_types_id')
            ->withTrashed();
    }


    //Тут дикий говнокод
    public static function getLastFiveSchedules() {
        $schedules = self::where('date', '>=', date("Y-m-d", strtotime('-2 days')))
            ->orderBy('date', 'asc')
            //->limit(5)
            ->get();

        $dates = self::SchedulesToDates($schedules);

        if(count($dates) <5) {
            $schedules = self::orderBy('date', 'asc')->limit(5*ScheduleType::all()->count())->get();
            $dates = self::SchedulesToDates($schedules);
        }

        return $dates;
    }

    // тут не сильно лучше
    protected static function SchedulesToDates($schedules) {
        $dates = [];

        foreach($schedules as $item) {
            $dates[$item->date][] = [
                'type' => $item->type->type_name,
                'image' => $item->path_img,
            ];

            $dates[$item->date]['active'] = false;
        }

        return $dates;
    }
}

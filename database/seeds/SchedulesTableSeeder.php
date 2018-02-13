<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    public function run()
    {
        $schedule = $this->findSchedule('2018-02-13');
        if (!$schedule->exists) {
            $schedule->fill([
                'date'        => "2018-02-13",
                'path_img'    => "schedules/rozklad.png",
                'schedule_types_id' => $this->findType('Денна')->id,
            ])->save();
        }

        $schedule = $this->findSchedule('2018-02-14');
        if (!$schedule->exists) {
            $schedule->fill([
                'date'        => "2018-02-14",
                'path_img'    => "schedules/rozklad1.png",
                'schedule_types_id' => $this->findType('Денна')->id,
            ])->save();
        }

        $schedule = $this->findSchedule('2018-02-15');
        if (!$schedule->exists) {
            $schedule->fill([
                'date'        => "2018-02-15",
                'path_img'    => "schedules/rozklad2.png",
                'schedule_types_id' => $this->findType('Заочна')->id,
            ])->save();
        }

    }

    protected function findSchedule($date)
    {
        return \App\Schedule::firstOrNew(['date' => $date]);
    }

    protected function findType($type_name)
    {
        return \App\ScheduleType::firstOrNew(['type_name' => $type_name]);
    }
}

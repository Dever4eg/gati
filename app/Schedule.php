<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    public function Type(){
        return $this->belongsTo('App\ScheduleType', 'schedule_types_id')
          ->withTrashed();
    }



    public static function getLast(){
         // Возвращает все что позже текущей даты -2
         $schedules = Schedule::with('type')
             ->where('date', '>=', date("Y-m-d", strtotime('-2 days')))
             ->limit(5*ScheduleType::all()->count())
             ->orderBy('date', 'desk')
             ->get();

        // Если предыдущая вернула < 5 то взять последние 5
        if(self::CountDates($schedules) < 5)
            $schedules = Schedule::with('type')
                ->limit(5*ScheduleType::all()->count())
                ->orderBy('date', 'desk')
                ->get();


        return $schedules;
    }

    public static function GetLastFiveArray() {

        $result = self::ConvertToArray(self::GetLast());      
        $result = array_slice($result,0,5);
        ksort($result);


        //Установка актиного(тот который отображается по умолчанию)
        $isSetDefault = false;
        if(date('H') < 17 && isset($result[date("Y-m-d")])){
            $result['default'] = date("Y-m-d");
            $isSetDefault = true;
        } else {
            foreach (array_keys($result) as $date) {
                if($date > date("Y-m-d")){
                    $result['default'] = $date;
                    $isSetDefault = true;
                    break;
                }
            }
        }
        if(!$isSetDefault) {
            end($result);
            $result['default'] = key($result);
            $isSetDefault = true;
        }

      return $result;
    }



    protected static function ConvertToArray($schedules) {
      $result = [];
      foreach ($schedules as $item) {
          $result[$item->date][$item->type->order . $item->type->type_name] = $item;
          ksort($result[$item->date]);
      }

      return $result;
    }

    protected static function CountDates ($schedules) {
      $result = [];
      foreach ($schedules as $item) {
          $result[$item->date] = true;
      }
      return count($result);
    }

}

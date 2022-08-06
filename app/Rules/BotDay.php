<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Modules\Base\Services\Utils;
use Modules\Bot\Models\Bot;
use Modules\Bot\Models\Day;

class BotDay implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
//        $dayId = request()->get('day');
//        $startTime = request()->get('start_time');
//        $endTime = request()->get('end_time');
//
//        return Bot::with('days')->
//        whereHas('days', function ($query) use ($dayId, $startTime, $endTime) {
//            $query->where(function ($query) use ($startTime, $endTime) {
//                $query->whereNotBetween('start_time', [$startTime, $endTime]);
//                $query->orWhereNotBetween('end_time', [$startTime, $endTime]);
//            });
////            $query->where(function ($query) use ($dayId) {
//            $query->where('day_id', '=', $dayId);
//
////            switch ($dayId) {
////                case Day::HOLIDAYS :
////                    $query->orWhere('day_id', '=', $dayId);
////                    break;
////                case Day::WORKING_DAYS:
////                    $query->where(function ($query) use ($startTime, $endTime) {
////
////                    });
////                    break;
////                default :
////            }
////            });
//
//        })->exists();
//
//

//        foreach ($data as $item) {
//            if (!count($item->days)) {
//                return true;
//            }
//            foreach ($item->days as $day) {
//                //Dias Uteis
//                if ($dayId == 8) {
//                    if ($day->id != 1 || $day->id != 7 || $day->id != 9) {
//                        if ($day->config->start_time <= $startTime && $day->config->end_time <= $endTime) {
//                            return true;
//                        } else {
//                            return false;
//                        }
//                    }
//                }
//                if ($dayId == 9) {
//                    if ($day->id == 1 || $day->id == 7 || $day->id == 9) {
//                        if ($day->config->start_time <= $startTime && $day->config->end_time <= $endTime) {
//                            return true;
//                        } else {
//                            return false;
//                        }
//                    }
//                }
//                if ($day->id == $dayId) {
//                    if ($day->config->start_time <= $startTime && $day->config->end_time <= $endTime) {
//                        return true;
//                    } else {
//                        return false;
//                    }
//                }
//            }
//        }

//        return !Bot::with('days')->whereHas('days', function ($query) use ($value) {
//            $query->where('day_id', '=', request()->get('day'));
//            $query->where('start_time', '<=', request()->get('start_time'));
//            $query->where('end_time', '<=', request()->get('end_time'));
//        })->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Data ou horário já selecionado!';
    }
}

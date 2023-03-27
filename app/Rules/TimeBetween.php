<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
{
    /** 
     *  @return void 
     * 
    */
    public function __construct()
    {
        
    }
    /**
     * @param string
     * @param mixed
     * @return bool
     */
    public function passes($attribute , $value)
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour , $pickupDate->minute , $pickupDate->second);
        $earlisetTime = Carbon::createFromTimeString('17:00:00') ;
        $lastTime = Carbon::createFromTimeString('23:00:00') ;
        return $pickupTime->between($earlisetTime,$lastTime) ? true : false ;
    }
    public function message()
    {
        return ' please choose the date between  17:00-23:00.' ;
    }
}

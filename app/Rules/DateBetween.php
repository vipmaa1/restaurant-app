<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\Rule;


class DateBetween implements Rule
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
   

    public function passes($attribute,$value)
    {
        $pickupDate = Carbon::parse($value);
        $lastDate = Carbon::now()->addWeek();
        return $value >= now() && $value <= $lastDate ;
    }
    public function message()
    {
        return ' please choose the date between  a week from now.' ;
    }
}

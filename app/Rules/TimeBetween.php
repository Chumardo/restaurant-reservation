<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        
        $earlisetTime = Carbon::createFromTimeString('17:00:00');
        $lastTime = Carbon::createFromTimeString('23:00:00');

        if(!$pickupTime->between($earlisetTime, $lastTime)) {
            $fail('Please choose the time between 17:00-23:00');
        };
    }
}

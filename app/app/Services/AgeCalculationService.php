<?php

namespace App\Services;

use Carbon\Carbon;

class AgeCalculationService
{
    public function calculateAgeAsOfOctoberFirst(string $birthDate): string
    {
        $inputDate = Carbon::parse($birthDate);
        $firstOfOctober = Carbon::create(date('Y'), 10, 1);
        $years = $inputDate->diffInYears($firstOfOctober);
        $months = $inputDate->diffInMonths($firstOfOctober) % 12;
        $days = $inputDate->diffInDays($firstOfOctober->copy()->subYears($years)->subMonths($months));

        return "{$years}-{$months}-{$days}";
    }
}

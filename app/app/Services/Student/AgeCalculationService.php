<?php

namespace App\Services\Student;

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

        $birthDate = Carbon::parse($birthDate);
        $targetDate = Carbon::create(now()->year, 10, 1);

        $years = $birthDate->diffInYears($targetDate);
        $months = $birthDate->diffInMonths($targetDate) % 12;
        $days = $birthDate->diffInDays(
            $targetDate->copy()->subYears($years)->subMonths($months)
        );

        return "{$years}-{$months}-{$days}";
    }
}

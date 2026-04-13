<?php

namespace App\Events;

use App\Models\Recipt_Payment;
use App\Models\Student;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FeePaymentReceived
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Student $student,
        public Recipt_Payment $payment,
        public float $amount
    ) {}
}

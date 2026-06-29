<?php

namespace App\Livewire\FundAccount;

use App\Models\FundAccount;
use Livewire\Component;

class FundAccountIndex extends Component
{
    public $date;

    public function mount()
    {
        $this->date = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.fund-account.fund-account-index', [
            'accounts' => FundAccount::where('date', $this->date)->get(),
        ]);
    }
}

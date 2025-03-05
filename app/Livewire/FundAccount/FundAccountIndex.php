<?php

namespace App\Livewire\FundAccount;

use Livewire\Component;
use App\Models\fund_account;
class FundAccountIndex extends Component
{
    public $date;
    public function mount(){
        $this->date = date("Y-m-d");
    }
    public function render()
    {
        return view('livewire.fund-account.fund-account-index',[
            'accounts'=> fund_account::where('date',$this->date)->get(),
        ]);
    }
}
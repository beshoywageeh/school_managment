<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('dashboard')]
    public function render()
    {

        return view('livewire.dashboard.dashboard');
    }
}

<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SessionExpiryHandler extends Component
{
    protected $listeners = ['session-expired' => 'handleSessionExpired'];

    public function handleSessionExpired(): void
    {
        $this->dispatch('session.expired');
    }

    public function render()
    {
        return view('livewire.session-expiry-handler');
    }
}

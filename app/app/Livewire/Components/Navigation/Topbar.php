<?php

namespace App\Livewire\Components\Navigation;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Topbar extends Component
{
    public string $moduleTitle = '';

    public string $brandColor = '';

    public function mount(string $moduleTitle = '', string $brandColor = ''): void
    {
        $this->moduleTitle = $moduleTitle;
        $this->brandColor = $brandColor;
    }

    public function getUserNameProperty(): string
    {
        return Auth::user()?->name ?? '';
    }

    public function toggleSidebar(): void
    {
        $this->dispatch('sidebar-toggle');
    }

    public function render()
    {
        return view('livewire.navigation.topbar');
    }
}

<?php

namespace App\Livewire\Components\Dashboard;

use Livewire\Component;

class KpiCard extends Component
{
    public string $label;

    public string $value;

    public ?string $trend = null;

    public string $trendDirection = 'up';

    public ?string $icon = null;

    public bool $loading = true;

    public function mount(string $label, string $value = '—', ?string $trend = null, string $trendDirection = 'up', ?string $icon = null): void
    {
        $this->label = $label;
        $this->value = $value;
        $this->trend = $trend;
        $this->trendDirection = $trendDirection;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('livewire.dashboard.kpi-card');
    }
}

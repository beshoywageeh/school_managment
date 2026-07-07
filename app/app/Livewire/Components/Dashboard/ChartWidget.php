<?php

namespace App\Livewire\Components\Dashboard;

use Livewire\Component;

class ChartWidget extends Component
{
    public string $type = 'area';

    public array $chartData = [];

    public bool $loading = true;

    public function mount(string $type = 'area', array $chartData = []): void
    {
        $this->type = $type;
        $this->chartData = $chartData;
    }

    public function updatedChartData(): void
    {
        $this->dispatch('chart-data-'.$this->type, chartData: $this->chartData, type: $this->type);
    }

    public function render()
    {
        return view('livewire.dashboard.chart-widget');
    }
}

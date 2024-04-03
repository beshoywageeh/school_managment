<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropDown_Table extends Component
{
    public string $Row_Data;

    /**
     * Create a new component instance.
     */
    public function __construct(string $Row_Data)
    {
        $this->Row_Data = $Row_Data;
    }

    public function change(string $Row_Data)
    {
        $this->Row_Data = $Row_Data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.drop-down_-table');
    }
}

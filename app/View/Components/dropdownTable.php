<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dropdownTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $buttonText;
    public $items;
    public function __construct($buttonText, $items = [])
    {
        $this->buttonText = $buttonText;
        $this->items = $items;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dropdown-table');
    }
}

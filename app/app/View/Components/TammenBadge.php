<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TammenBadge extends Component
{
    public function __construct(public bool $value = false) {}

    public function render(): View|Closure|string
    {
        return view('components.tammen-badge');
    }
}

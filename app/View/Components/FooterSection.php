<?php

namespace App\View\Components;

use Closure;
use App\Models\Information;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FooterSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd(Information::first());
        return view('components.footers.footer-section', ['info' => Information::first()]);
    }
}

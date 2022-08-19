<?php

namespace App\View\Components\Hrace009\Auth;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InsideMain extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.hrace009.auth.inside-main');
    }
}

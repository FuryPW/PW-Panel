<?php


namespace App\View\Components\Hrace009;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Balance extends Component
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
        $balance = number_format((Auth::user()->money), 0, '', '.') . ' ' . config('pw-config.currency_name');
        return view('components.hrace009.balance', [
            'balance' => $balance,
        ]);
    }
}

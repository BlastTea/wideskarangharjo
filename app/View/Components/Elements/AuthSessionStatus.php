<?php

namespace App\View\Components\Elements;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthSessionStatus extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
                @props(['status'])

                @if ($status)
                    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
                        {{ $status }}
                    </div>
                @endif
        blade;
    }
}

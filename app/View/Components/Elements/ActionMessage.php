<?php

namespace App\View\Components\Elements;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionMessage extends Component
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
        return <<<'blade'
            @props(['on'])

            <div x-data="{ shown: false, timeout: null }"
                x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })"
                x-show.transition.out.opacity.duration.1500ms="shown"
                x-transition:leave.opacity.duration.1500ms
                style="display: none;"
                {{ $attributes->merge(['class' => 'text-sm text-gray-600']) }}>
                {{ $slot->isEmpty() ? 'Saved.' : $slot }}
            </div>

        blade;
    }
}

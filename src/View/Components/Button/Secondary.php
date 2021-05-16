<?php


namespace Honda\Ui\View\Components\Button;


use Honda\Ui\View\Components\Button;
use Illuminate\View\View;

class Secondary extends Button
{
    public function render(): View
    {
        return view('ui::button.secondary');
    }
}

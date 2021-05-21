<?php

namespace Honda\Ui\View\Components;

use Illuminate\View\View;

class Password extends Input
{
    public function render(): View
    {
        return view('ui::password');
    }
}

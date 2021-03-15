<?php

namespace Honda\Ui\Components;

class Pill extends Badge
{
    public function render()
    {
        return view('ui::badge', [
            'pill' => true,
        ]);
    }
}

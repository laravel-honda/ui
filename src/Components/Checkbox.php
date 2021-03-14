<?php

namespace Starts\Ui\Components;

use InvalidArgumentException;

class Checkbox extends Input
{
    public bool $checked;

    public function __construct(
        string $name = null,
        string $label = null,
        string $type = 'checkbox',
        string $icon = null,
        string $iconSet = 'tabler',
        bool $first = false,
        string $color = null,
        bool $checked = false
    ) {
        if ($icon) {
            throw new InvalidArgumentException('Attribute [icon] is not allowed.');
        }

        parent::__construct($name, $label, $type, $icon, $iconSet, $first, $color);

        $this->checked = $checked;
    }

    public function render()
    {
        return view('ui::checkbox');
    }
}

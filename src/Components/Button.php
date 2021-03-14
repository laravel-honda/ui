<?php

namespace Starts\Ui\Components;

use Illuminate\View\Component;
use InvalidArgumentException;

class Button extends Component
{
    public ?string $content;
    public ?string $icon;
    public string $type;
    public string $iconSide;
    public string $iconSet;
    public string $color;

    public function __construct(string $color = null, string $content = null, string $type = 'submit', string $icon = null, string $iconSide = 'left', string $iconSet = 'tabler')
    {
        if (!in_array($iconSide, ['left', 'right'])) {
            throw new InvalidArgumentException("Icon side must be either right or left, [$iconSide] given");
        }

        if (!in_array($type, ['button', 'submit', 'reset'])) {
            throw new InvalidArgumentException('Button type must be button, submit or reset, [$type] given');
        }

        $this->content  = $content;
        $this->type     = $type;
        $this->icon     = $icon;
        $this->iconSide = $iconSide;
        $this->iconSet  = $iconSet;
        $this->color    = $color ?? settings('color');
    }

    public function render()
    {
        return view('ui::button');
    }
}

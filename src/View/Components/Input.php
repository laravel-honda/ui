<?php

namespace Honda\Ui\View\Components;

use Honda\Ui\Support\Str;
use Honda\Ui\Types\Direction;
use Honda\Ui\Types\Icon;
use Illuminate\View\View;

class Input extends Component
{
    public string $name;
    public string $color;
    public string $label;
    public string $type;
    public Icon $icon;
    public Direction $iconSide;
    public bool $hideLabel;
    public bool $first;
    public bool $disabled;
    public bool $readonly;
    public bool $inline;

    public function __construct(
        string $name,
        string $color,
        string $label = null,
        string $type = null,
        string $icon = null,
        Direction|string $iconSide = 'left',
        bool $hideLabel = false,
        bool $first = false,
        bool $disabled = false,
        bool $readonly = false,
        bool $inline = false
    )
    {
        $this->name = $name;
        $this->color = $color;
        $this->label = $label ?? Str::humanize($name);
        $this->type = $type ?? $this->guessTypeFromName($name);
        $this->icon = Icon::fromString($icon);
        $this->iconSide = is_string($iconSide) ? new Direction($iconSide) : $iconSide;
        $this->hideLabel = $hideLabel;
        $this->first = $first;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
        $this->inline = $inline;
    }


    protected function guessTypeFromName(string $name): string
    {
        if (in_array($name, ['email', 'password'])) {
            return $name;
        }

        return 'text';
    }

    public function render(): View
    {
        return view('ui::input');
    }
}

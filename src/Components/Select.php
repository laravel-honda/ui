<?php

namespace Honda\Ui\Components;

use Illuminate\Support\Collection;

class Select extends Input
{
    public array $values = [];
    public ?string $selected;

    /**
     * @param array|Collection $values
     * @param string|null $selected
     */
    public function __construct(
        iterable $values = [],
        string $name = null,
        string $label = null,
        string $type = 'text',
        string $icon = null,
        string $iconSet = 'tabler',
        bool $first = false,
        string $color = null,
        $selected = null
    )
    {
        parent::__construct($name, $label, $type, $icon, $iconSet, $first, $color);

        foreach ($values as $key => $value) {
            $this->values[$key] = $value;
        }
        $this->selected = $selected;
    }

    public function render()
    {
        return view('ui::select');
    }
}

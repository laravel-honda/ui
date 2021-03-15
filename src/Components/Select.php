<?php

namespace Honda\Ui\Components;

use App\Support\ArrayList;
use Illuminate\Support\Collection;

class Select extends Input
{
    public array $values;
    public array $selected;

    /**
     * @param array|string|Collection|null $values
     * @param array|string|Collection|null $selected
     */
    public function __construct(
        array $values = [],
        string $name = null,
        string $label = null,
        string $type = 'text',
        string $icon = null,
        string $iconSet = 'tabler',
        bool $first = false,
        string $color = null,
        $selected = null
    ) {
        parent::__construct($name, $label, $type, $icon, $iconSet, $first, $color);

        $this->values   = $values;
        $this->selected = ArrayList::make($selected)->toArray();
    }

    public function render()
    {
        return view('ui::select');
    }
}

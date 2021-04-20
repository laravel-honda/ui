<?php


namespace Honda\Ui\Components;


use Illuminate\View\Component;

class InputError extends Component
{
    public ?string $name;

    public function __construct(string $name = null)
    {
        $this->name = $name;
    }

    public function shouldRender(): bool
    {
        return !is_null($this->name);
    }

    public function render()
    {
        return view('ui::input-error');
    }
}

<?php

namespace Honda\Ui\View\Components;

use Illuminate\View\View;

class Alert extends Component
{
    public string $color;

    public function __construct(public string $type, public bool $closeable)
    {
        $this->color = [
                'success' => 'green',
                'danger'  => 'red',
                'warning' => 'yellow',
                'info'    => 'blue',
            ][$this->type] ?? 'gray';
    }

    public function shouldRender(): string
    {
        return !empty($this->content());
    }

    public function content()
    {
        return session($this->type);
    }

    public function render(): View
    {
        return view('ui::alert');
    }
}

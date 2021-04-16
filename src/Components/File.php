<?php

namespace Honda\Ui\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Symfony\Component\Mime\MimeTypes;

class File extends Component
{
    public ?string $name = null;
    public ?string $label = null;
    public int $max;
    public array $extensions;
    public bool $multiple;
    public bool $first;
    public bool $hideLabel;
    public array $mimes;

    public function __construct(string $name = null, string $label = null, int $max = 1024, array $extensions = ['png', 'jpg'], bool $multiple = false, bool $first = false, bool $hideLabel = false)
    {
        $mimes = new MimeTypes();
        $this->name = $name;
        $this->label = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->max = $max;
        $this->extensions = $extensions;
        $this->multiple = $multiple;
        $this->first = $first;
        $this->hideLabel = $hideLabel;
        $this->mimes = collect($extensions)->map(fn(string $extension) => $mimes->getMimeTypes($extension))->flatten()->toArray();
    }

    public function render()
    {
        return view('ui::file');
    }
}

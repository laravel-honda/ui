<?php

namespace Honda\Ui\Types;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class Icon implements Htmlable
{
    public string $icon;
    public array $attributes;

    public function __construct(
        string $icon,
        array $attributes = []
    )
    {
        $this->icon = $icon;
        $this->attributes = $attributes;
    }

    public static function fromString(string $icon): Icon
    {
        return new self(trim($icon));
    }

    public function __toString(): string
    {
        return svg($this->icon, $this->attributes)->toHtml();
    }

    public function with(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function toHtml(): HtmlString
    {
        return new HtmlString($this);
    }
}

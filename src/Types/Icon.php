<?php

namespace Honda\Ui\Types;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class Icon implements Htmlable
{
    public static string $defaultSet = '';
    public ?string $icon;
    public ?string $set;
    public array $attributes;

    public function __construct(
        ?string $icon,
        ?string $set,
        array $attributes = []
    ) {
        $this->icon       = $icon;
        $this->set        = $set ?? static::$defaultSet;
        $this->attributes = $attributes;
    }

    public static function fromString(?string $icon): Icon
    {
        if (is_null($icon)) {
            return new self(null, null);
        }

        [$icon, $set] = explode(',', $icon);

        return new self(trim($icon), trim($set));
    }

    public function __toString(): string
    {
        if (!$this->isNotNull()) {
            return '';
        }

        return svg($this->set . '-' . $this->icon, $this->attributes)->toHtml();
    }

    public function isNotNull(): bool
    {
        return !is_null($this->icon);
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

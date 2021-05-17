<?php

namespace Honda\Ui\Types;

use InvalidArgumentException;

class Direction
{
    protected static array $directions = ['top', 'bottom', 'left', 'right'];
    public string $current;

    public function __construct(string $direction)
    {
        if (!in_array($direction, static::$directions, true)) {
            throw new InvalidArgumentException('The given direction is not one of ' . implode(', ', static::$directions));
        }

        $this->current = $direction;
    }

    public function __toString(): string
    {
        return $this->current;
    }

    public function is(string $comparison): bool
    {
        return $this->current === $comparison;
    }
}

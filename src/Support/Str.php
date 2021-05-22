<?php

namespace Honda\Ui\Support;

class Str
{
    public static function humanize(string $string): string
    {
        return ucwords(str_replace(
            '#[space]',
            ' ',
            trim(preg_replace('/[^\x21-\x7E]/', '', str_replace(['_', '-'], '#[space]', $string)) ?: '')
        ));
    }
}

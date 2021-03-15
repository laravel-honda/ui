<?php

namespace Honda\Ui\Support;

use Illuminate\Support\Str;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

final class UrlResolver
{
    /**
     * @internal
     */
    public static function guess(?string $url = '', array $context = []): string
    {
        if (empty($url)) {
            return '/' . ltrim(request()->path(), '/');
        }

        if (Str::contains($url, '/')) {
            return $url;
        }

        try {
            return route($url, $context);
        } catch (RouteNotFoundException $exception) {
            return $url;
        }
    }
}

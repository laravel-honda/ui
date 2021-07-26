@php($classes = $size !== null ? sprintf('w-%s h-%s ', $size, $size) : '')

{{ svg($name, $classes . $attributes->get('class'), $attributes->except('class')->toArray()) }}

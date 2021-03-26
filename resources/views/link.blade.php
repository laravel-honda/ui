<a href="{{ $href }}"
    {{ $attributes->class([
     "hover:text-$color-500 text-$color-500  font-semibold" => !$unstyled,
     "inline-flex items-center",
     "flex-col-reverse" => $iconSide === 'left'
 ]) }}>
    {{ $content ?? $slot }}

    @if ($icon)
        <x-ui-icon :name="$icon" :set="$iconSet" size="4" class="ml-1" solid/>
    @endif
</a>

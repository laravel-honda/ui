<div>
    <a
        @if (!empty($href) && !$disabled) href="{{ $href }}" @endif
        {{ $attributes->class([
            "inline-flex items-center px-3 text-sm py-1.5 bg-$color-200",
            "opacity-50 select-none cursor-default" => $disabled,
            "hover:bg-$color-300 focus:outline-none focus:ring-2 focus:ring-$color-500 focus:ring-offset-2" => !$disabled && !empty($href),
            "rounded-full" => isset($pill),
            "rounded-lg" => !isset($pill),
            "text-gray-500" => $color === 'gray',
            "text-$color-700" =>  $color !== 'gray',
]) }}
    >

        @if ($icon->isNotNull())
            {{ $icon }}
        @endif

        <span
            class="inline-block font-semibold leading-none @if ($icon->isNotNull()) ml-2 @endif">{{ $slot }}</span>
    </a>
</div>

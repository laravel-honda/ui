@php($hasContent = $slot->isNotEmpty() || !empty($content))
<button type="{{ $type }}"
    {{ $attributes->class([
    "flex items-center justify-center bg-$color-500 disabled:opacity-50 focus:outline-none focus:ring-2 focus:ring-$color-500 focus:ring-offset-2 text-white rounded-lg transition ease-in-out duration-150",
    "py-2 px-5" => $hasContent,
    "p-2.5" => !$hasContent,
    "flex-row-reverse" => $iconSide === 'right',
    "hover:bg-$color-400 active:bg-$color-500" => !$attributes->has('disabled'),
    "pointer-events-none" => $attributes->has('disabled'),
]) }}
>
    @if (!empty($icon))
        <x-ui-icon :name="$icon" :size="5" :set="$iconSet" solid/>
    @endif
    <span
        class="text-md font-semibold inline-block @if(!empty($icon) && $hasContent) {{ $iconSide === 'right' ? 'mr-3' : 'ml-3'  }} @endif">{{ $content ?? $slot }}</span>
</button>

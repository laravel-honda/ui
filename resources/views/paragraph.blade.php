@if ($markdown)
    <x-ui-markdown :color="$color" {{ $attributes }}>{{ $content ?? $slot }}</x-ui-markdown>
@else
    <p {{ $attributes->merge(['class' => 'text-' . $color . '-700']) }}>{{ $content ?? $slot }}</p>
@endif

@if ($markdown)
    <x-ui-markdown :color="$color" {{ $attributes }}>{{ $slot }}</x-ui-markdown>
@else
    <p {{ $attributes->merge(['class' => 'text-' . $color . '-700']) }}>{{ $slot }}</p>
@endif

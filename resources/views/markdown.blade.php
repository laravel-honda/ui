<div
    class="@if ($size) prose-{{ $size }} @else prose @endif prose-{{ $color }} {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>
    @markdown(trim((string) $slot))
</div>

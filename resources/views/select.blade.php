<div class="@if ($inline) flex @endif @if (!$first) mt-4 @endif">
    @if (!$hideLabel || !$inline)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <select name="{{ $name }}"
            id="{{ $name }}" {{ $attributes->class("block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-$color-500 focus:border-$color-500") }}>
            id="{{ $name }}" {{ $attributes->class("block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-$color-500 focus:border-$color-500") }}>
        {{ $slot }}
    </select>
    <x-ui-input-error :name="$name"/>
</div>

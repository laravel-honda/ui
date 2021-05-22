<div class="w-full @if (!$first) mt-4 @endif">
    @if (!$hideLabel && !$inline)
        <label for="{{ $name }}" class="block font-medium text-gray-700">{{ $label }}</label>
    @endif
    <div class="@if (!$hideLabel && !$inline) mt-1 @endif relative rounded-lg shadow-sm">
        <textarea name="{{ $name }}" id="{{ $name }}"
            {{$attributes->class([
                 "form-textarea focus:ring-$color-500 focus:border-$color-500 no-scrollbar block w-full border-gray-300 rounded-lg resize-none",
                 'bg-gray-100' => $attributes->has('disabled') || $attributes->has('readonly'),
            ])}}>{{ $slot }}</textarea>
    </div>

    <x-ui-input-error :name="$name"/>
</div>

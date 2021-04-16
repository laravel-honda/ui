<div class="w-full @if (!$first) mt-4 @endif">
    @if ($name && $label)
        <label for="{{ $name }}" class="block  font-medium text-gray-700">{{ $label }}</label>
    @endif
    <div class="@if ($name && $label) mt-1 @endif relative rounded-lg shadow-sm">
        <textarea name="{{ $name }}" id="{{ $name }}"
            {{$attributes->class([
                 "form-textarea focus:ring-$color-500 focus:border-$color-500 no-scrollbar block w-full border-gray-300 rounded-lg resize-none",
                 'bg-gray-100' => $attributes->hasAnyOf('disabled', 'readonly'),
                 'pl-10' => $icon !==null,
                 'pl-4' => $icon === null,
            ])}}>{{ $attributes->has('value') ? $attributes->get('value') : $slot }}</textarea>
    </div>

    @if ($name)
        @error($name)
        <p class="flex items-center text-red-500 mt-2">
            <x-ui-icon name="alert-circle" solid size="5"/>
            <span class="inline-block ml-2">{{ $message }}</span>
        </p>
        @enderror
    @endif
</div>

<div class="flex flex-col @if (!$first) mt-4 @endif">
    <div class="flex items-center">
        <input id="{{ $name }}" type="checkbox" name="{{ $name }}"
               class="rounded border-gray-300 text-{{ $color }}-600 shadow-sm focus:border-{{ $color }}-300 focus:ring focus:ring-offset-0 focus:ring-{{ $color }}-200 focus:ring-opacity-50" {{$attributes }}/>
        <label class="text-gray-700 ml-2" for="{{ $name }}">{{ $label  }}</label>
    </div>
    <x-ui-input-error name="$name"/>
</div>

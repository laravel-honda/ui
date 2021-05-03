<div class="@if ($inline) flex items-center @endif @if ($first) mt-4 @endif w-full">
    @if (!$hideLabel )
        <label class="text-gray-700" for="{{ $name }}">{{ $label }}</label>
    @endif
    <div class="flex items-start @if (!$hideLabel) mt-1 @endif @if($inline) ml-4 @endif">
        @isset($outsideLeft)
            <div class="border border-gray-300 rounded-lg border-r-0 rounded-r-none whitespace-nowrap py-2">
                {{ $outsideLeft }}
            </div>
        @endisset
        @isset($insideLeft)
            <div class="border border-gray-300 rounded-lg border-r-0 rounded-r-none whitespace-nowrap py-2">
                {{ $insideLeft }}
            </div>
        @endisset
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" {{ $attributes->class([
    "focus:outline-none focus:ring-$color-500 focus:border-$color-500 block w-full border-gray-300 rounded-lg",
    "border-l-0 rounded-l-none" => isset($insideLeft),
    "rounded-l-none" => isset($outsideLeft),
    "border-r-0 rounded-r-none" => isset($insideRight),
    "rounded-r-none" => isset($outsideRight),
]) }} @if ($disabled) disabled aria-disabled="true" @endif @if ($readonly) readonly aria-readonly="true" @endif>
        @isset($insideRight)
            <div class="border border-gray-300 rounded-lg border-l-0 rounded-l-none whitespace-nowrap py-2">
                {{ $insideRight }}
            </div>
        @endisset
        @isset($outsideRight)
            <div class="border border-gray-300 rounded-lg border-l-0 rounded-l-none whitespace-nowrap py-2">
                {{ $outsideRight }}
            </div>
        @endisset
    </div>

</div>

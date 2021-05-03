<div class="@if ($first) mt-4 @endif w-full">
    <label class="text-gray-700" for="{{ $name }}">{{ $label }}</label>
    <div class="flex items-start mt-1">
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
    "rounded-r-none" => isset($outsideRight)
]) }}>
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

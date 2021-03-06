<div
    class="@if ($inline) flex items-center @endif @if (!$first) mt-4 @endif w-full @if ($disabled || $readonly) opacity-50 @endif">
    @if (!$hideLabel )
        <label class="text-gray-700" for="{{ $name }}">{{ $label }}</label>
    @endif
    <div class="flex items-stretch @if (!$hideLabel) mt-1 @endif @if($inline) ml-4 @endif">
        @if(isset($outsideLeft) || ($icon !== null && $iconSide->is('left')))
            <div
                class="border border-gray-300 bg-gray-100  rounded-lg rounded-r-none whitespace-nowrap flex items-center">
                @if($icon !== null)
                    <div class="px-3 mt-0.5">
                        {{ $icon->with(['class' => 'w-5 h-5 text-gray-700']) }}
                    </div>
                @endif
                @isset($outsideLeft)
                    {{ $outsideLeft }}
                @endisset
            </div>
        @endisset
        @isset($insideLeft)
            <div class="border border-gray-300 rounded-lg border-r-0 rounded-r-none whitespace-nowrap">
                {{ $insideLeft }}
            </div>
        @endisset
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" {{ $attributes->class([
    "focus:outline-none focus:ring-$color-500 focus:border-$color-500 block w-full border-gray-300 rounded-lg",
    "border-l-0 rounded-l-none" => isset($insideLeft) ||($icon !== null && $iconSide->is('left')),
    "rounded-l-none" => isset($outsideLeft),
    "border-r-0 rounded-r-none" => isset($insideRight),
    "rounded-r-none" => isset($outsideRight) || ($icon !== null && $iconSide->is('right')),
]) }} @if ($disabled) disabled aria-disabled="true" @endif @if ($readonly) readonly aria-readonly="true" @endif>
        @isset($insideRight)
            <div class="border border-gray-300 rounded-lg border-l-0 rounded-l-none whitespace-nowrap">
                {{ $insideRight }}
            </div>
        @endisset
        @if(isset($outsideRight) || ($icon !== null && $iconSide->is('right')))
            <div
                class="border border-gray-300 bg-gray-100  rounded-lg border-l-0 rounded-l-none whitespace-nowrapflex items-center">
                @if($icon !== null)
                    <div class="px-3 mt-0.5">
                        {{ $icon->with(['class' => 'w-5 h-5 text-gray-700']) }}
                    </div>
                @endif
                @isset($outsideRight)
                    {{ $outsideRight }}
                @endisset
            </div>
        @endisset
    </div>
    <x-ui-input-error class="mt-2" :name="$name"/>
</div>

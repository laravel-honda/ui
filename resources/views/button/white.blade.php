<button {{ $attributes->merge([
    'class' => "flex items-center font-semibold bg-white border focus:outline-none focus:ring-2 focus:ring-$color-500 text-gray-700 hover:text-gray-500 focus:ring-offset-2 text-white py-2 rounded-lg transition disabled:opacity-50"
]) }} @if($disabled) disabled aria-disabled="true" @endif>
    <span class="px-4 flex items-center @if ($iconSide->is('right')) flex-row-reverse @endif">
            @if ($icon!== null)
            {{ $icon->with(['aria-hidden' => 'true', 'class' => 'w-5 h-5 ' . ($iconSide->is('right') ? 'ml-2' : 'mr-2')]) }}
        @endif

        {{ $slot }}
    </span>
</button>

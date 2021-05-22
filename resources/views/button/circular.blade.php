<button {{ $attributes->class("bg-$color-500 hover:bg-$color-400 focus:ring-2 focus:outline-none focus:ring-$color-500 focus:ring-offset-2 text-white p-2 rounded-$radius transition") }} >
    {{ $icon->with(['aria-hidden' => 'true', 'class' => 'w-5 h-5' ]) }}
</button>

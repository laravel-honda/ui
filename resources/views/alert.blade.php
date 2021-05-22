<div {{ $attributes->class("bg-$color-100 text-$color-700 p-4 rounded-lg") }} x-data="{ closed: false }" x-show="!closed">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-{{ $color }}-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="ml-4">{{ $content() }}</p>
        </div>

        @if ($closeable)
            <button @click="closed = true"
                    class="focus:outline-none focus:bg-{{ $color }}-200 hover:bg-{{ $color }}-200 rounded-lg p-2 -m-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        @endif
    </div>
</div>

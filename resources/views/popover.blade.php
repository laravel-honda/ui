<div x-data="{ open: false }" class="relative">

    <!-- Trigger element -->
    <div
        @mouseover="open = true" @mouseleave="open = false" class="inline-block">
        {{ $trigger }}

        <div
            x-cloak
            x-show="open"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
            class="z-10 mt-3 px-2 w-screen max-w-md sm:px-0">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="bg-white px-5 py-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>

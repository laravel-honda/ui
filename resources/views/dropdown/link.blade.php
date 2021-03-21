<a href="#"
   class="flex items-center w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
   role="menuitem">
    @if ($icon)
        <x-ui-icon solid :name="$icon" :set="$iconSet" size="5" class="text-gray-400"/>
    @endif
    <div class="@if ($icon !== null) ml-2 @endif">
        {{ $content ?? $slot }}
    </div>
</a>

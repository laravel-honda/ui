<div x-data="{ hidePassword: true }">
    <x-ui-input
        type="password"
        x-bind:type="hidePassword ? 'password' : 'text'"
        :name="$name"
        :label="$label"
        :icon="$icon"
        :iconSet="$iconSet"
        :first="$first"
        :color="$color"
        {{ $attributes }}
    >
        <button
            type="button"

            class="@if (!$attributes->hasAnyOf('disabled', 'readonly')) hover:text-gray-500 focus:text-gray-500 focus:outline-none @else pointer-events-none ç@endif"
            @click="if (!{{ $attributes->hasAnyOf('disabled', 'readonly') ? 'true' : 'false' }}) { hidePassword = !hidePassword }">
            <div x-show="hidePassword">
                <x-ui-icon name="eye" size="5" solid/>
            </div>
            <div x-show="!hidePassword" x-cloack>
                <x-ui-icon name="eye-off" size="5" solid/>
            </div>
        </button>
    </x-ui-input>
</div>

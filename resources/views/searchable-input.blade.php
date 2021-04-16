@php($id = uniqid())
<div>
    <x-ui-input
        type="text"
        x-bind:type="hidePassword ? 'password' : 'text'"
        :name="$name"
        :label="$label"
        :icon="$icon"
        :iconSet="$iconSet"
        :first="$first"
        :color="$color"
        list="{{ $id }}"
        {{ $attributes }}
    />

    <datalist id="{{ $id }}">
        @foreach($values as $value)
            <option value="{{ $value }}"></option>
        @endforeach
    </datalist>
</div>

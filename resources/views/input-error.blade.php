@error($name)
<p {{ $attributes->merge([
    'class' => "flex items-center text-red-500 mt-2"
]) }}>
    <x-ui-icon name="alert-circle" size="5"/>
    <span class="inline-block ml-2">{{ $message }}</span>
</p>
@enderror

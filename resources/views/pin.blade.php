<div x-data="{
            pin: '',
            length: {{ $length }},
            resetValue(i) {
                for (x = 0; x < this.length; x++) {
                    if (x >= i) document.querySelector(`[name='{{ $name }}_pin_${x}']`).value = ''
                }
            },
            stepForward(i) {
                if (document.querySelector(`[name='{{ $name }}_pin_${i}']`).value && i != this.length - 1) {
                    document.querySelector(`[name='{{ $name }}_pin_${i+1}']`).focus()
                    document.querySelector(`[name='{{ $name }}_pin_${i+1}']`).value = ''
                }
                this.pin = this.getPin()
            },
            stepBack(i) {
                if (document.querySelector(`[name='{{ $name }}_pin_${i-1}']`).value && i != 0) {
                    document.querySelector(`[name='{{ $name }}_pin_${i-1}']`).focus()
                    document.querySelector(`[name='{{ $name }}_pin_${i-1}']`).value = ''
                }
            },
            getPin() {
                let pin = ''
                for (i = 0; i < this.length; i++) {
                    pin = pin + document.querySelector(`[name='{{ $name }}_pin_${i}']`).value
                }

                return pin
            },
}">
    <div class="flex space-x-4">
        @for ($i = 0; $i < $length; $i++)
            <div class="w-12">
                <x-ui-input
                    name="{{ $name }}_pin_{{ $i }}"
                    {{ $attributes->class('text-center') }}
                    color="{{ $color }}"
                    value=""
                    maxlength="1"
                    max="9"
                    hide-label
                    min="0"
                    inputmode="decimal"
                    @keyup="stepForward({{ $i }})"
                    @keydown.backspace="stepBack({{ $i }})"
                    @focus="resetValue({{ $i }})"
                />
            </div>
        @endfor
    </div>
</div>

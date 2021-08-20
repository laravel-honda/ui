<div x-data="{
            pin: '',
            length: {{ $length }},
            pins: [],
            resetValue(i) {
                for (x = 0; x < this.length; x++) {
                    if (x >= i) document.querySelector(`[name='{{ $name }}_pin_${x}']`).value = ''
                }
            },
            stepForward(e, i) {
                if (e.ctrlKey === true) {
                    return
                }

                if (this.pins[i].value && i != this.length - 1) {
                    this.pins[i + 1].focus()
                    this.pins[i + 1].value = ''
                }


                this.pin = this.getPin()
            },
            stepBack(i) {
                if (this.pins[i - 1].value && i != 0) {
                    this.pins[i - 1].focus()
                    this.pins[i - 1].value = ''
                }
            },
            handlePaste(event) {
                let paste = (event.clipboardData || window.clipboardData).getData('text')

                for (let i = 0; i < this.length; i++) {
                    this.pins[i].value = paste[i]
                }

                this.pin = this.getPin()
            },
            getPin() {
                let pin = ''
                for (i = 0; i < this.length; i++) {
                    pin += this.pins[i].value
                }

                return pin
            },
}" x-init="() => {
     for (let i = 0; i < length; i++) {
        pins.push(document.querySelector(`[name='{{ $name }}_pin_${i}']`))
    }
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
                    @paste="handlePaste($event)"
                    inputmode="decimal"
                    @keyup="stepForward($event, {{ $i }})"
                    @keydown.backspace="stepBack({{ $i }})"
                    @focus="resetValue({{ $i }})"
                />
            </div>
        @endfor
    </div>
    <input type="hidden" name="{{ $name }}" x-model="pin" />
    <div class="mt-2">

        <x-ui-input-error name="{{ $name }}" />
    </div>
</div>

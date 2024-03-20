@props(['name', 'label', 'type' => 'text', 'large' => false, 'maxlength' => null])

<div class="flex flex-col gap-2 {{ $large ? 'w-[600px]' : 'w-[380px]' }}">
    <label for="{{ $name }}" class="text-lg font-bold text-[#7f8487]">{{ $label }}</label>

    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
        class="py-[10px] px-4 text-[#7f8487] border border-[#7f8487] rounded-lg"
        value="{{ $type === 'password' ? '' : old($name) }}" {{ $maxlength ? "maxlength=$maxlength" : '' }} />


    @error($name)
        <p class="text-[#ff1e1e] text-sm">{{ $message }}</p>
    @enderror
</div>

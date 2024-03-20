@props(['value', 'large' => false])

<div class="flex flex-col gap-2 {{ $large ? 'w-[600px]' : 'w-[380px]' }}">
    <button type="submit"
        class="py-3 px-4 border-none rounded-lg text-white bg-[#ff731d] hover:bg-[#fa6a10] text-lg font-bold">
        {{ $value }}
    </button>
</div>

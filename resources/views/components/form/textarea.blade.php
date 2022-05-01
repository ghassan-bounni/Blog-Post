@props(['name'])
<div class="mb-6">
    <x-form.label name="{{ $name }}" />
                                                    
    <textarea
        class="border border-gray-300 p-2 w-full rounded"
        id="{{ $name }}"
        name="{{ $name }}"
        required
        >
        {{ $slot ?? old($name)}}
    </textarea>
</div>

<x-form.error name="{{ $name }}" />
                    
@props(['name'])
<div class="mb-6">
    <x-form.label name="{{ $name }}" />
                                                    
    <textarea
        class="border border-gray-400 p-2 w-full"
        id="{{ $name }}"
        name="{{ $name }}"
        required
        >
        {{old($name)}}
    </textarea>
</div>

<x-form.error name="{{ $name }}" />
                    
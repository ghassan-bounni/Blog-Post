@props(['name','type' => 'text'])
<div class="mb-6">

    <x-form.label name="{{ $name }}" />

     <input
        class="border border-gray-400 p-2 w-full"
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{old($name)}}"
        required
        />
    </div>

<x-form.error name="{{ $name }}" />
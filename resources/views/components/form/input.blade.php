@props(['name','type' => 'text'])
<div class="mb-6">

    <x-form.label name="{{ $name }}" />

     <input
        class="border border-gray-300 p-2 w-full rounded"
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{old($name)}}"
        required
        />
    </div>

<x-form.error name="{{ $name }}" />
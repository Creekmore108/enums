@props(['id', 'name'])

<select id="{{ $id }}" name="{{ $name }}" autocomplete="{{ $name }}" wire:model='{{ $name }}'
{{ $attributes->merge(['class' => 'class="block  pl-2  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset  ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:max-w-xs sm:text-sm sm:leading-6']) }}>
{{ $slot }}
</select>

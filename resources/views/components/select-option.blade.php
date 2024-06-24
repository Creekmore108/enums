@props(['name'])

{{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}
<option value="{{ str_replace("&#039;","'", $name) }}" {{ $attributes->merge(['class' => 'block font-medium text-sm']) }}>{{ str_replace("&#039;","'", $name) }}</option>

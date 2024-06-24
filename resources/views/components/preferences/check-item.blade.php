@props(['name', 'title'])
{{-- string replace in title to remove apostrophe hex value --}}
<div class="w-1/3 px-2">
    <div class="bg-white ">
        <div class="flex h-6 items-center">
            <input wire:model.live="{{$name}}" id="{{$name}}"  type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
            <label for="{{ $name }}" class="ml-4 font-medium text-gray-900">{{$title }}</label>
        </div>
    </div>
  </div>

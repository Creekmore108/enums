@props(['title'])
<div class="bg-white py-4 mb-2  rounded-2xl shadow">
    <div class="flex flex-wrap">
        <div>
    <h3 class="ml-8 mb-2 text-base font-bold leading-6 text-gray-900">{{ $title }}</h3>
        </div>
        <div>

        </div>
    </div>
    <div class="border-t mx-auto max-w-7xl px-6 gap-6 lg:px-6">
        {{$slot}}
    </div>
</div>

<div class="lg:p-6 bg-white border-b border-gray-200">
    <div class="grid grid-col-6 p-4 bg-stone-200 rounded-xl shadow-xl">
        {{-- Reading the Enums into a select --}}
        <div class="sm:col-span-1">
            <x-label for="realtionship" value="{{ __('Relationship Type') }}" />
            <div class="mt-2 mb-2">
                <x-select id='relationship' name='relationship'>

                    @foreach (App\Enums\relationship::cases() as $relate)
                        <x-select-option name="{{ $relate->label() }}" />
                    @endforeach

                </x-select>
            </div>
        </div>


        {{-- Loading the options from Enums and populating the values from the database --}}
        <form x-on:click="$wire.update_options()">
            <x-preferences.topic-block title="Which relationship options would they have selected?">
                <x-preferences.check-item-block>

                    @foreach (App\Enums\relationship::cases() as $relate)
                        <x-preferences.check-item name="{{ $relate->get_dbName() }}" title="{{ $relate->label() }}" />
                        @if (!(intval($relate->value) % 3))
                            </div>
                        </div>
                        <div class="px-2">
                            <div class="flex -mx-2">
                        @endif
                    @endforeach

                </x-preferences.check-item-block>
            </x-preferences.topic-block>
        </form>
    </div>
</div>

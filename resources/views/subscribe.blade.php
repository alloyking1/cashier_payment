<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Choose a data plan") }}

                    <div class="mt-4">
                        <x-paddle-button :checkout="$checkout" class="p-4 rounded-xl bg-sky-500 text-white">
                            Subscribe
                        </x-paddle-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

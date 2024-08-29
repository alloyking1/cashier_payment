<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Time Tracker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You need to") }}
                    <span class="font-bold text-sky-400 hover:cursor-pointer hover:text-sky-500">
                        <a href="{{ route('subscribe') }}">
                            subscribe
                        </a>
                    </span>
                    to use this service
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

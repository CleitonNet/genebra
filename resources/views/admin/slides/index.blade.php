<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 _dark:text-gray-200 leading-tight">
            {{ __('Slides') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white _dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 _dark:text-gray-100">

                    @livewire('admin.slides.index')

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

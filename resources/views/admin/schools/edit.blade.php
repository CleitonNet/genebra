<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 _dark:text-gray-200">
            {{ __('Editar escola') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm _dark:bg-gray-800 sm:rounded-lg">
                <div class="p-4 text-gray-900 _dark:text-gray-100">

                    @livewire('admin.school.edit', ['school' => $id])

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

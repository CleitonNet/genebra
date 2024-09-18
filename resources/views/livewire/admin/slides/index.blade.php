<div class="relative">
    <div class="px-1.5 py-2 overflow-x-auto border-2 border-slate-900 rounded-xl bg-azul">
        <table class="w-full min-w-full overflow-hidden border-collapse">
            <thead class="bg-azul text-white/80">
                <tr>
                    <th class="p-3 text-left">#</th>
                    <th class="p-3 text-left">Título 1</th>
                    <th class="p-3 text-right">Ações</th>
                </tr>
            </thead>
            <tbody class="p-1 overflow-hidden divide-y-4 divide-azul">
                @foreach ($slides as $slide)
                <tr class="transition-all duration-200 rounded-lg cursor-pointer hover:bg-gray-200/80 odd:bg-gray-100 even:bg-white">
                    <td onclick="window.location.href='{{ route('admin.slides.edit', $slide->id) }}'" class="w-24 py-1">
                        <img src="{{ asset('storage/'.$slide->image) }}" alt="Slide Image" class="object-cover w-20 rounded h-14">
                    </td>
                    <td onclick="window.location.href='{{ route('admin.slides.edit', $slide->id) }}'" class="p-3 text-sm font-medium">@if($slide->title1 === null && $slide->title2 === null) <span class="font-bold text-amber-700">- - -</span> @else {{ $slide->title1 }} {{ $slide->title2 }} @endif</td>
                    <td class="p-3 text-right">
                        <button class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700" x-data @click=" if (confirm('Tem certeza que deseja excluir este slide?')) { $wire.deleteSlide({{ $slide->id }}) }">
                            <x-trash class="w-5 h-5 text-white"></x-trash>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="fixed bottom-10 right-10">
        <a href="{{ route('admin.slides.create') }}" class="px-8 py-2 mt-6 font-bold text-white rounded-lg bg-azul" id="enviar">Novo Slide</a>
    </div>

    <x-action-message class="absolute bottom-0 left-0 w-full px-6" on="message">
        @if (session()->has('message'))
            <div class="p-3 mx-auto text-white bg-yellow-700 rounded max-w-7xl">
                {{ session('message') }}
            </div>
        @endif
    </x-action-message>

    <!-- Paginação -->
    <div class="mt-4">
        {{ $slides->links() }}
    </div>
</div>

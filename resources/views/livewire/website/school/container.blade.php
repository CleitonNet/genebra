<x-schools.container>
    @foreach ($schools as $school)
        <x-schools.school :image="$school->image" :unity="$school->title" :enrollment="$school->enrollment" :segments="$school->segments" :address="$school->address">
            <ul>
                @foreach ($school->segments as $segment) <!-- Use segments como propriedade -->
                    <li class="flex justify-between gap-1">
                        <div>{{ $segment->name }}</div>
                        <div class="flex-auto mb-2 border-b-2 border-dotted border-azul/50"></div>
                        <div class="font-semibold">{{ $segment->description }}</div>
                    </li>
                @endforeach
            </ul>
        </x-schools.school>
    @endforeach
</x-schools.container>

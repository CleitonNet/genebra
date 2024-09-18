<x-schools.container>

    @foreach ($schools as $school)
    <x-schools.school :image="$school->image" :unity="$school->title" :enrollment="$school->enrollment">
        <ul>
            <li class="flex justify-between gap-1"><div>Garderie</div>          <div class="flex-auto mb-2 border-b-2 border-dotted border-azul/50"></div> <div class="font-semibold">1 a 2 anos</div></li>
            <li class="flex justify-between gap-1"><div>Educação Infantil</div> <div class="flex-auto mb-2 border-b-2 border-dotted border-azul/50"></div> <div class="font-semibold">2 a 5 anos</div></li>
            <li class="flex justify-between gap-1"><div>Fundamental 1</div>     <div class="flex-auto mb-2 border-b-2 border-dotted border-azul/50"></div> <div class="font-semibold">1º ao 5º ano</div></li>
            <li class="flex justify-between gap-1"><div>Fundamental II</div>    <div class="flex-auto mb-2 border-b-2 border-dotted border-azul/50"></div> <div class="font-semibold">6º ao 9º ano</div></li>
            <li class="flex justify-between gap-1"><div>Ensino Médio</div>      <div class="flex-auto mb-2 border-b-2 border-dotted border-azul/50"></div> <div class="font-semibold">1ª e 2ª séries</div></li>
        </ul>
    </x-schools.school>
    @endforeach

</x-schools.container>

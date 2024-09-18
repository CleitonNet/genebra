<x-guest-layout>
    <x-slot name="page">Corpo Docente Cristão</x-slot>

    <x-page-header background='img/foto6.jpg' bg_position='bg-top'>
        <h1>Corpo Docente <br> Cristão</h1>
    </x-page-header>


    <x-container>

        <div class="mx-2 my-16">
            <p class="mt-2 mb-4 text-justify text-normal">Na Escola Cristã Genebra, acreditamos firmemente que a educação é uma jornada que vai além dos limites acadêmicos e alcança o coração e a alma de nossos alunos. É com essa visão em mente que priorizamos um corpo docente que comunga de uma cosmovisão cristã.</p>
            <p class="mt-2 mb-4 text-justify text-normal">Diferentemente de muitas instituições, não temos aulas específicas de religião e não praticamos o proselitismo denominacional ou teológico. Em vez disso, nossa abordagem é integrar a fé de maneira holística ao ambiente educacional. Cada professor em nossa escola é não apenas especialista em sua disciplina, mas também está imbuído de uma compreensão profunda e pessoal dos princípios e valores cristãos conforme expostos na Bíblia.</p>
            <p class="mt-2 mb-4 text-justify text-normal">Isso significa que, enquanto ensinam matéria curricular, nossos docentes estão aptos e preparados para guiar momentos devocionais, proporcionando reflexões e discussões que cultivam o caráter e os valores de nossos alunos. Além disso, ao interagirem em sala de aula, esses professores expressam e exemplificam verdades e conceitos cristãos, garantindo que o ensino esteja sempre alinhado a uma perspectiva bíblica.</p>
            <p class="mt-2 mb-4 text-justify text-normal">Com esta abordagem, visamos formar não apenas mentes brilhantes, mas também corações sábios e compassivos, preparados para enfrentar o mundo com integridade, amor e um profundo sentido de propósito.</p>
        </div>

        <div class="grid w-full max-w-6xl grid-cols-2 gap-6 mx-auto mb-20 md:grid-cols-3 lg:grid-cols-4">
            <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('philosofia') }}" class="relative flex items-center justify-center p-2 mt-0 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto2.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Filosofia <br> Coram Deo</div>
                </a>
            </div>
            <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('educational_model') }}" class="relative flex items-center justify-center p-2 mt-16 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto7.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Modelo Educacional <br> Suíço</div>
                </a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('trilingual_program') }}" class="relative flex items-center justify-center p-2 mt-0 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto9.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Programa Trilingue</div>
                </a>
            </div>
            {{-- <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('teaching_staff') }}" class="relative flex items-center justify-center p-2 -mt-10 overflow-hidden transition rounded-lg md:mt-0 lg:-mt-16 xl:mt-0 group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto6.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Corpo Docente <br> Cristão</div>
                </a>
            </div> --}}
            <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('education_system') }}" class="relative flex items-center justify-center p-2 mt-6 overflow-hidden transition rounded-lg md:-mt-16 lg:mt-16 group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto8.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Sistema de <br> Ensino Mackenzie</div>
                </a>
            </div>
        </div>

    </x-container>

</x-guest-layout>

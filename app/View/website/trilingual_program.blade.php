<x-guest-layout>
    <x-slot name="page">Programa Trilíngue</x-slot>

    <x-page-header background='img/foto9-horizontal.jpg' bg_position='bg-top'>
        <h1>Programa <br>Trilíngue</h1>
    </x-page-header>


    <x-container>
        <div class="px-2">
            <div class="flex items-center gap-4 my-10">
                <img src="{{ asset('img/language.svg') }}" alt="language" class="w-20 h-20" />
                <div class="text-3xl font-bold">Programa <br>Trilíngue</div>
            </div>
            <div class="pb-8 text-xl text-justify">Entendemos o português como língua oficial de nossa escola e por isso é nosso foco principal para um bom desenvolvimento linguístico de nossas crianças. Desde nossa Garderie (berçário) já iniciamos o trabalho de <strong class="font-semibold">conscientização fonológica</strong>.</div>
            <div class="pb-8 text-xl text-justify">Trabalhamos a Alfabetização pelo <strong class="font-semibold">método fônico</strong> e, para dar uma atenção ainda mais próxima, temos uma <strong class="font-semibold">coordenação de alfabetização</strong> que acompanha os alunos de 4 até 6 anos para cuidar dessa transição da Educação Infantil para o Fundamental.</div>
            <div class="pb-8 text-xl text-justify">No Fundamental tanto 1 quanto 2, o estimulo à <strong class="font-semibold">boa literatura</strong> e a prática da escrita cursiva vai ganhando corpo conforme o aluno avança até chegar ao Ensino Médio onde o preparamos para as provas de língua portuguesa das universidades. A partir do 6º ano iniciamos as aulas de <strong class="font-semibold">filosofia clássica</strong> a fim de desenvolver a parte lógica, retórica e dialética dos alunos.</div>
            <div class="pb-8 text-xl text-justify">Nossa escola não oferece uma formação bilíngue convencional pelo método comunicativo, mas trabalhamos o <strong class="font-semibold">português</strong> e o <strong class="font-semibold">inglês</strong> pelo <strong class="font-semibold">método fônico</strong> simultaneamente!</div>
            <div class="pb-8 text-xl text-justify">Esse processo começa com <strong class="font-semibold">aulas diárias</strong> de ambas as línguas a partir dos 2 anos de idade, continuando até o 3º ano do Ensino Fundamental I. A partir do 4º ano até o Ensino Médio, alteramos nossa abordagem do ensino de inglês, priorizando a comunicação. Dado que somos um <strong class="font-semibold">centro certificador TOEFL</strong>, os estudantes têm a opção de participar da turma preparatória para obter a certificação.</div>
            <div class="flex flex-col items-center justify-center gap-8 lg:flex-row">
                <img src="{{ asset('img/abeka.svg') }}" alt="abeka" class="h-32">
                <div class="text-xl text-justify">Seguimos o currículo de língua inglesa da escola abeka na Flórida/EUA, que além de cristã, é um ministério com mais de 60 anos e que fornece material para mais de 8.000 escolas cristãs ao redor do Globo.</div>
            </div>
        </div>

        <h2 class="my-20 text-5xl font-bold tracking-wide text-center">Nosso Diferenciais</h2>

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
            {{-- <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('trilingual_program') }}" class="relative flex items-center justify-center p-2 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto9.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Programa Trilingue</div>
                </a>
            </div> --}}
            <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('teaching_staff') }}" class="relative flex items-center justify-center p-2 -mt-10 overflow-hidden transition rounded-lg md:mt-0 lg:-mt-16 xl:mt-0 group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto6.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Corpo Docente <br> Cristão</div>
                </a>
            </div>
            <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('education_system') }}" class="relative flex items-center justify-center p-2 mt-6 overflow-hidden transition rounded-lg md:-mt-16 lg:mt-16 group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto8.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Sistema de <br> Ensino Mackenzie</div>
                </a>
            </div>
        </div>

    </x-container>
</x-guest-layout>

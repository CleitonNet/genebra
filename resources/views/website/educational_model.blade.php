<x-guest-layout>
    <x-slot name="page">Modelo Educacional Suíço</x-slot>

    <x-page-header background='img/foto7-horizontal.jpg'>
        <h1>Modelo Educacional <br>Suíço</h1>
    </x-page-header>


    <x-container>

        <div class="px-2">
            <h2 class="pt-16 mb-12 text-4xl font-bold tracking-wide text-center md:text-5xl">Nossos Diferenciais</h2>

            <p class="mt-2 mb-4 text-justify text-normal">Entender o modelo educacional suíço é compreender um sistema que se destaca globalmente por sua excelência, rigor, e preparação abrangente para a cidadania global. Adotado pela Escola Cristã Genebra, esse modelo traz diferenciais claros e específicos em sua abordagem pedagógica:</p>

            <ul class="py-4 pl-10">
                <li class="mt-2 mb-4">&#x27A4; <strong>Excelência e Rigor Acadêmico:</strong> A educação suíça é sinônimo de qualidade e precisão. Ela enfatiza a profundidade do conteúdo e a metodologia de ensino para garantir uma aprendizagem robusta e duradoura. O foco é equipar os alunos com as ferramentas cognitivas necessárias para enfrentar desafios acadêmicos e profissionais de alto nível, cultivando uma paixão intrínseca pelo conhecimento.</li>
                <li class="mt-2 mb-4">&#x27A4; <strong>Internacionalização e Plurilinguismo:</strong> A Suíça, com sua posição geográfica estratégica e rica herança cultural, é o epicentro do plurilinguismo. Dentro deste modelo, os alunos são expostos a múltiplas línguas desde tenra idade, o que permite não só a fluência em diferentes idiomas, mas também uma compreensão aprofundada de diversas culturas. Essa imersão linguística e cultural capacita os alunos a se tornarem verdadeiros cidadãos do mundo, preparados para interações internacionais e desafios globais.</li>
                <li class="mt-2 mb-4">&#x27A4; <strong>Experiências e Vivências Pedagógicas - PBL Genebra:</strong> Inspirado na pedagogia suíça, nosso PBL (Problem-Based Learning) Genebra transcende a aprendizagem tradicional baseada em conteúdo. Priorizamos a experiência e a aplicação prática, permitindo que os alunos aprendam por meio da resolução de problemas reais e da condução de projetos. Esta abordagem não só solidifica o conhecimento, mas também desenvolve habilidades essenciais como pensamento crítico, colaboração e inovação.</li>
            </ul>

            <p class="mt-2 mb-4 text-justify text-normal">Ao adotar o modelo educacional suíço, a Escola Cristã Genebra busca cultivar mentes aguçadas, corações compreensivos e cidadãos preparados para um mundo dinâmico e interconectado.</p>
        </div>

        <div class="grid w-full max-w-6xl grid-cols-2 gap-6 mx-auto mb-20 md:grid-cols-3 lg:grid-cols-4">
            <div data-aos="fade-up" data-aos-duration="1500">
                <a href="{{ route('philosofia') }}" class="relative flex items-center justify-center p-2 mt-0 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto2.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Filosofia <br> Coram Deo</div>
                </a>
            </div>
            {{-- <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('educational_model') }}" class="relative flex items-center justify-center p-2 mt-16 overflow-hidden transition rounded-lg group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto7.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Modelo Educacional <br> Suíço</div>
                </a>
            </div> --}}
            <div data-aos="fade-down" data-aos-duration="1500">
                <a href="{{ route('trilingual_program') }}" class="relative flex items-center justify-center p-2 mt-6 overflow-hidden transition rounded-lg md:-mt-16 lg:mt-16 group h-96 lg:hover:bg-indigo-800/70 bg-indigo-800/70 lg:bg-transparent bg-gradient-to-t from-black/75 via-black/50 to-transparent">
                    <div class="absolute top-0 left-0 w-full h-full transition bg-center bg-cover group-hover:blur-sm -z-10" style="background-image: url('{{ asset('img/foto9.jpg') }}')"></div>
                    <div class="px-10 text-2xl font-[800] leading-6 text-center text-white">Programa Trilingue</div>
                </a>
            </div>
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

<x-guest-layout>
    <x-slot name="page">Ensino Médio</x-slot>

    <div class="grid px-5 mx-auto my-32 md:px-10 lg:px-20 md:grid-cols-12">
        <div class="md:col-span-3"><img src="{{ asset('img/foto3.jpg') }}" alt="Ensino Médio" class="rounded"></div>
        <div class="flex items-center py-5 md:p-10 lg:p-20 md:col-span-9">
            <div>
                <div class="text-5xl font-[700] text-azul pb-5">Ensino Médio</div>
                {{-- <h2 class="text-xl font-bold">Ensino Médio na Escola Cristã Genebra: Preparação Global para Líderes do Amanhã 🎓🌍</h2> --}}
                {{-- <p class="mt-2 mb-4 text-justify text-normal">No Ensino Médio da Escola Cristã Genebra, nosso compromisso é duplo: proporcionar uma formação de padrão internacional através do renomado Dual Diploma Programme do IB (International Baccalaureate Organization) e, simultaneamente, garantir a preparação robusta e focada para os desafios acadêmicos nacionais, como o ENEM. Para assegurar esta última, contamos com o acompanhamento rigoroso e sistemático através de simulados realizados em parceria com a Evolucional, permitindo uma avaliação contínua e aprimoramento constante de nossos alunos.</p> --}}
                {{-- <p class="mt-2 mb-4 text-justify text-normal">Com o suporte e orientação de nosso dedicado Conselor, nossos discentes são preparados para mais de 1000 universidades que reconhecem o diploma IB, abrindo portas para instituições de renome como Harvard, Oxford e MIT.</p> --}}

                <p class="mt-2 mb-4 text-justify text-normal">No Ensino Médio da Escola Cristã Genebra, nosso compromisso é proporcionar uma formação de padrão internacional com ênfase na excelência acadêmica. Buscamos garantir uma preparação robusta e focada para os desafios acadêmicos nacionais, como o ENEM. Para assegurar isso, contamos com o acompanhamento rigoroso e sistemático por meio de simulados realizados em parceria com a Evolucional, permitindo avaliação contínua e aprimoramento constante de nossos alunos.</p>
                <p class="mt-2 mb-4 text-justify text-normal">O ritmo de estudos em nosso Ensino Médio é integral. Entretanto, valorizamos o equilíbrio entre estudo intenso e bem-estar, promovendo momentos estratégicos de descanso e convivência. Estes momentos permitem não apenas fortalecer vínculos sociais, mas também potencializar o aprendizado em um ambiente cooperativo e motivador.</p>
                <p class="mt-2 mb-4 text-justify text-normal">Nossa proposta trilíngue se destaca por seu equilíbrio: 50% das aulas em português, 40% em inglês e 10% em francês. Com uma carga horária ampliada para o francês, buscamos garantir um domínio aprofundado deste idioma, preparando cidadãos globais, comunicativos e aptos a interagir em diversos contextos internacionais.</p>
                <p class="mt-2 mb-4 text-justify text-normal">Inovação e tradição caminham juntas em nosso currículo. O uso obrigatório de notebooks em sala promove uma aprendizagem atual e dinâmica. Paralelamente, os materiais da ABC<sup>2</sup> (Associação Brasileira de Cristãos na Ciência) garantem um embasamento que entrelaça sabedoria acadêmica e princípios cristãos.</p>
                <p class="mt-2 mb-4 text-justify text-normal">Em síntese, nosso Ensino Médio não só abre portas para o mundo, mas também assegura uma preparação sólida para os desafios acadêmicos do Brasil. A Escola Cristã Genebra está comprometida em formar líderes íntegros, versáteis e prontos para os desafios do presente e do futuro.</p>
            </div>
        </div>
    </div>
    <x-campus.campi stitle='Unidade de Ensino Médio'>

        {{-- <x-campus.campus image='img/genebra1.jpg' goToSlide='1' place='São Francisco I'  segment='Educação Infantil'             phone='21 2610-1144' address='Av. Rui Barbosa, 391, São Francisco, Niterói - RJ' gotoURL='https://appt.link/meet-with-escola-crista-genebra-unidade-sao-francisco-infantil' gotoVisit='https://goo.gl/maps/UyLWjtm1A8cHiYwo7' /> --}}
        {{-- <x-campus.campus image='img/genebra2.jpg' goToSlide='0' place='Icaraí'           segment='Berçário e Educação Infantil'  phone='21 3254-6293' address='Av. Sete de Setembro, 157, Icaraí, Niterói - RJ'   gotoURL='https://appt.link/meet-with-escola-crista-genebra-unidade-icarai-infantil'        gotoVisit='https://maps.app.goo.gl/MXV22TjDBEXARhTr6' /> --}}
        <x-campus.campus image='img/genebra3.jpg' place='São Francisco II' segment='Ensino Fundamental e Médio'             phone='21 3254-6293' address='Rua Tamoios, 391, São Francisco, Niterói - RJ' gotoURL='https://appt.link/escola-crista-genebra-ensino-fundamental'                       gotoVisit='https://maps.app.goo.gl/d4EFysa6kfi5HmnZ7' />

        <x-slot name="thumbnails">
            {{-- <x-campus.thumbnail image='img/genebra1.jpg' gotoSlide='0' /> --}}
            {{-- <x-campus.thumbnail image='img/genebra2.jpg' gotoSlide='1' /> --}}
            {{-- <x-campus.thumbnail image='img/genebra3.jpg' gotoSlide='1' /> --}}
        </x-slot>
    </x-campus.campi>

    <x-segmentos.segmentos items='3' w='1200px'>
        <x-segmentos.segmento duration='1000' stitle='Berçário/ Ed. Infantil' :gotoURL="route('nursery')"         image='img/foto4.jpg'  description='Como pais, você tem a responsabilidade única e profunda de moldar o futuro de seu filho. Cada escolha conta, ' />
        <x-segmentos.segmento duration='1250' stitle='Ens. Fundamental I    ' :gotoURL="route('child_education')" image='img/foto5.jpg'  description='Adentrar os primeiros anos da Educação Fundamental é uma etapa crucial na jornada educacional de cada criança. Na Escola' />
        <x-segmentos.segmento duration='1500' stitle='Ens. Fundamental II'    :gotoURL="route('primary')"         image='img/foto10.jpg' description='Na fase do Fundamental II, a Escola Cristã Genebra abraça a etapa da lógica, um dos pilares centrais do Trivium, a base da' />
        {{-- <x-segmentos.segmento duration='1750' stitle='Ens. Médio'             :gotoURL="route('high_school')"     image='img/foto3.jpg'  description='No Ensino Médio da Escola Cristã Genebra, nosso compromisso é duplo: proporcionar uma formação de padrão internacional' /> --}}
    </x-segmentos.segmentos>

</x-guest-layout>

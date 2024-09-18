<x-guest-layout>
    <x-slot name="page">Berçário e Educação Infantil</x-slot>

    <div class="grid px-5 mx-auto my-32 md:px-10 lg:px-20 md:grid-cols-12">
        <div class="flex justify-center md:col-span-3"><img src="{{ asset('img/foto4.jpg') }}" alt="Berçário <br> Ed. Infantil" class="max-w-full rounded max-h-96"></div>
        <div class="flex items-center py-5 md:p-10 lg:p-20 md:col-span-9">
            <div>
                <div class="text-5xl font-[700] text-azul pb-5">Berçário <br> Ed. Infantil</div>
                {{-- <div class="mb-4 text-2xl font-bold">Bem-vindo(a) a Escola Cristã Genebra! ✨</div> --}}
                <div class="text-justify text-normal">Como pais, vocês têm a responsabilidade única e profunda de moldar o futuro de seu filho. Cada escolha conta, principalmente na primeira infância onde cada momento é uma oportunidade ímpar de desenvolver ou evoluir nossa criança. Ao matricular uma criança na educação infantil, o pai deve ir muito além de verificar a prática acadêmica de ensinar os números e as letras, deve procurar uma escola com o aprendizado de forma lúdica e que esteja preocupada em:</div>
                <ul class="flex flex-col gap-2 py-10 pl-10">
                    <li>🧠 Estimular a curiosidade e as múltiplas inteligências;</li>
                    <li>💬 Proporcionar a criação de laços e o desenvolvimento social;</li>
                    <li>🤸‍♂️ Desenvolver habilidades motoras;</li>
                    <li>🙏 Desenvolver a espiritualidade e as virtudes cristãs;</li>
                    <li>🍎 Proporcionar uma alimentação variada, nutritiva e de qualidade;</li>
                    <li>🫶 Experimentar um cotidiano repleto de afeto e momentos felizes;</li>
                    <li>🛡️Garantir um ambiente seguro, higienizado e confortável.</li>
                </ul>
                <p class="text-justify">O dever de garantir um desenvolvimento holístico é seu, mas você não está sozinho nessa tarefa! Nós estamos aqui para servir sua família nesse propósito de garantir uma educação completa e que conduza seus filhos nos caminhos de Jesus Cristo.</p>
            </div>
        </div>
    </div>
    <x-campus.campi stitle='Unidades com Ed. Infantil e Berçário'>

        <x-campus.campus image='img/genebra1.jpg' goToSlide='1' place='São Francisco I'  segment='Educação Infantil'             phone='21 2610-1144' address='Av. Rui Barbosa, 391, São Francisco, Niterói - RJ' gotoURL='https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20S%C3%A3o%20Francisco%20I.%20' gotoVisit='https://goo.gl/maps/UyLWjtm1A8cHiYwo7' />
        <x-campus.campus image='img/genebra2.jpg' goToSlide='0' place='Icaraí'           segment='Berçário e Educação Infantil'  phone='21 3254-6293' address='Av. Sete de Setembro, 157, Icaraí, Niterói - RJ'   gotoURL='https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20Icara%C3%AD%20I'        gotoVisit='https://maps.app.goo.gl/MXV22TjDBEXARhTr6' />
        {{-- <x-campus.campus image='img/genebra3.jpg' goToSlide='0' place='São Francisco II' segment='Ensino Fundamental e Médio'    phone='21 3254-6293' address='Rua Tamoios, 32, São Francisco, Niterói - RJ'      gotoURL='https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20S%C3%A3o%20Francisco%20II.%20'                       gotoVisit='https://maps.app.goo.gl/d4EFysa6kfi5HmnZ7' /> --}}
        <x-slot name="thumbnails">
            <x-campus.thumbnail image='img/genebra1.jpg' gotoSlide='0' />
            <x-campus.thumbnail image='img/genebra2.jpg' gotoSlide='1' />
            {{-- <x-campus.thumbnail image='img/genebra3.jpg' gotoSlide='2' /> --}}
        </x-slot>

    </x-campus.campi>

    <x-segmentos.segmentos items='3' w='900px'>
        {{-- <x-segmentos.segmento duration='1000' stitle='Berçário/ Ed. Infantil' :gotoURL="route('nursery')"         image='img/foto4.jpg'  description='Como pais, você tem a responsabilidade única e profunda de moldar o futuro de seu filho. Cada escolha conta, ' /> --}}
        <x-segmentos.segmento duration='1250' stitle='Ens. Fundamental I    ' :gotoURL="route('child_education')" image='img/foto5.jpg'  description='Adentrar os primeiros anos da Educação Fundamental é uma etapa crucial na jornada educacional de cada criança. Na Escola' />
        <x-segmentos.segmento duration='1500' stitle='Ens. Fundamental II'    :gotoURL="route('primary')"         image='img/foto10.jpg' description='Na fase do Fundamental II, a Escola Cristã Genebra abraça a etapa da lógica, um dos pilares centrais do Trivium, a base da' />
        <x-segmentos.segmento duration='1750' stitle='Ens. Médio'             :gotoURL="route('high_school')"     image='img/foto3.jpg'  description='No Ensino Médio da Escola Cristã Genebra, nosso compromisso é duplo: proporcionar uma formação de padrão internacional' />
    </x-segmentos.segmentos>

</x-guest-layout>

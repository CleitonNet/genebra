<div class="my-28">
    <x-container id="section_why">
        <h2 class="mb-16 text-5xl font-bold tracking-wide text-center text-grafite">Por que escolher a <span class="font-light font-century text-vermelho">GENEBRA</span>?</h2>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">

            <div data-aos="fade-up"   data-aos-duration="1500" class="pt-0 mt-0 pb-14 sm:pt-0 sm:pb-14 md:pt-0 md:pb-0 lg:pt-0 lg:pb-0 xl:pt-0 xl:pb-14"                               ><x-why-item :image="asset('img/foto2.jpg')" :link="route('cosmovisao')"                 :text="'Cosmovisão Cristã'"         /></div>
            <div data-aos="fade-down" data-aos-duration="1500" class="pb-0 mt-0 pt-14 sm:pt-14 sm:pb-0 md:pt-14 md:pb-0 lg:pt-14 lg:pb-0 xl:pt-14 xl:pb-0"                             ><x-why-item :image="asset('img/foto7.jpg')" :link="route('educational_model')"          :text="'Modelo Educacional Suíço'"    /></div>
            <div data-aos="fade-up"   data-aos-duration="1500" class="pt-0 -mt-14 pb-14 sm:pt-0 sm:pb-14 sm:-mt-14 md:mt-0 md:pt-0 md:pb-14 lg:pt-0 lg:pb-14 xl:pt-0 xl:pb-14"         ><x-why-item :image="asset('img/foto9.jpg')" :link="route('trilingual_program')"         :text="'Programa Trilingue'"          /></div>
            <div data-aos="fade-down" data-aos-duration="1500" class="pb-0 -mt-14 pt-14 sm:pt-14 sm:pb-0 sm:-mt-14 md:pt-0 md:-mt-14 md:pb-0 lg:pt-14 lg:mt-0 lg:pb-0 xl:pt-14 xl:pb-0"><x-why-item :image="asset('img/foto6.jpg')" :link="route('teaching_staff')"             :text="'Campeonatos Eportivos'"       /></div>
            <div data-aos="fade-up"   data-aos-duration="1500" class="pt-0 pb-0 -mt-14 sm:pt-0 sm:pb-14 sm:-mt-14 md:mt-0 md:pt-0 md:pb-14 lg:-mt-14 lg:pb-0 xl:mt-0 xl:pt-0 xl:pb-14" ><x-why-item :image="asset('img/foto8.jpg')" :link="'https://ib.escolagenebra.com.br/'"  :text="'Currículo IB'" :target="true" /></div>

        </div>
    </x-container>
</div>

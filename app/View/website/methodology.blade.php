<x-guest-layout>
    <x-slot name="page">Metodologia</x-slot>

    <style>
        .program_triligue { max-width: 100%; margin: 0 auto; object-fit: contain; }
        .carouse-image { max-height: calc( 100vh - 100px ); min-height: 70vh; }
        .reflexo { -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, rgba(0,0,0,0.15)); }
        @media (max-width: 900px) { .carouse-image { height: 500px; } }
    </style>

    <div class="w-full transition bg-center bg-no-repeat bg-cover carousel slide" style="background-image: url({{ asset('img/methodology.jpg') }});">
        <div class="text-white bg-gradient-to-r from-black/90 via-black/25 to-transparent">

            <x-container>

                <div data-aos="zoom-out-right" class="flex text-5xl md:text-6xl lg:text-8xl flex-col justify-center gap-3 mt-[80px] px-7 sm:px-20 text-left carouse-image">
                    <div class="leading-[50px] md:leading-[65px] lg:leading-[75px] xl:leading-[95px]">
                        <div class="font-bold">Metodologia</div>
                        <div class="font-bold">Genebra</div>
                    </div>
                </div>

            </x-container>
        </div>
    </div>

    <x-container>

        <div class="px-1 2xl:px-12 xl:px-16 lg:px-12 md:px-7 sm:px-3">

            <x-methodology.index />
            <x-methodology.index-excelency />
            <x-methodology.index-language />
            <x-methodology.index-intercultural />
            <x-methodology.index-outdoor />
            <x-methodology.virtudes />
            <x-methodology.know-faith />
            <x-methodology.original />
            <x-methodology.director />

        </div>

    </x-container>
</x-guest-layout>

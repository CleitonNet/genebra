<x-guest-layout>
    <x-slot name="page">Nossas Unidades</x-slot>

    <div class="w-full transition bg-center bg-no-repeat bg-cover carousel slide" style="background-image: url({{ asset('img/methodology.jpg') }});">
        <div class="text-white bg-azul/85 backdrop-blur-sm">
            <x-container>


                <div data-aos="zoom-out-right" class="flex text-6xl lg:text-[5vw] flex-col justify-center gap-3 mt-[80px] carouse-image">
                    <div class="leading-[50px] md:leading-[65px] lg:leading-[75px] xl:leading-[95px] flex items-center">
                        <div class="py-20 font-bold">Nossas Unidades</div>
                    </div>
                </div>

            </x-container>

        </div>
    </div>

    <div class="mb-28">

        <style>
            .segmento .segment_more { transform: translateY(0); box-shadow: 0 0 5px 2px rgba(0,0,0,0.5) }
            .segmento:hover .segment_more { animation: ease-in-out slideUp 500ms forwards; box-shadow: 0 0 10px 2px rgba(0,0,0,0.5) }

            @keyframes slideUp {
                from { transform: translateY(200px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            .segments::-webkit-scrollbar { height: 1px; }
        </style>

        <h2 class="text-3xl font-bold tracking-wide text-center md:text-4xl lg:text-5xl mb-14 lg:hidden">Segmentos</h2>

        <div class="segments" style="overflow: auto; scroll-behavior: smooth;">
            <div class="flex justify-center gap-8 w-[1480px] py-5 pr-5 xl:pl-5 pl-40 xl:mx-auto">

                <a href="{{ route('child_education') }}" data-aos="fade-left" data-aos-duration="1000" class="segmento min-w-[350px]">

                    <div class="overflow-hidden relative bg-cover border-2 border-azul h-[500px] bg-center rounded-xl" style="background-image: url({{ asset($image) }}); font-size: 400%">
                        <div class="absolute bottom-0 left-0 right-0 top-44 bg-gradient-to-t from-azul via-azul/90 to-transparent"></div>
                        <div class="absolute bottom-0 z-10 w-full px-2 bg-white opacity-0 md:px-4 h-72 pb-28 segment_more">
                            <div class="pt-4 mb-2 text-4xl font-extrabold leading-10 text-azul" style="line-height: 44px;">Ens. Fundamental I</div>
                            <div class="text-[12pt] font-bold">{{ $description }}<span class="font-normal text-azul/70">... ler mais.</span></div>
                        </div>
                        <div class="absolute w-full px-3 mb-2 text-4xl font-extrabold text-center text-white md:px-5 bottom-10" style="line-height: 44px;">{{ $stitle }}</div>

                    </div>
                    <div class="absolute top-[10%] -right-3 font-semibold gap-1 text-xs flex items-center z-50 flex-col backdrop-blur-sm bg-vermelho/80 text-white rounded-xl p-2">
                        <svg class="w-5 h-5" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="m0 0h32v32h-32z" class="fill-[#f00]"/>
                            <path d="m13 6h6v7h7v6h-7v7h-6v-7h-7v-6h7z" class="fill-white"/>
                        </svg>

                        Saiba<br>mais
                    </div>
                </a>

            </div>
        </div>
    </div>

</x-guest-layout>

<div>
    <div class="w-full transition bg-center bg-no-repeat bg-cover carousel" style="background-image: url({{ asset('img/methodology.jpg') }});">
        <div class="text-white bg-azul/85 backdrop-blur-sm">
            <x-container>

                <div data-aos="zoom-out-right" class="flex flex-col justify-center mt-[80px]">
                    <div class="pt-20 text-6xl font-bold ">Unidades</div>
                    <div class="pb-20 text-3xl font-normal leading-[50px] md:leading-[65px] lg:leading-[75px] xl:leading-[95px]">Clique sobre a unidade desejada para realizar a pré-matrícula</div>
                </div>

            </x-container>

        </div>
    </div>

    <div class="mb-28">

        <style>
            .segmento .segment_more { transform: translateY(0); box-shadow: 0 0 5px 2px rgba(0,0,0,0.5) }
            .segmento:hover .segment_more { animation: ease-in-out slideUp 500ms forwards; box-shadow: 0 0 10px 2px rgba(0,0,0,0.5) }

            @keyframes slideUp {
                from { transform: translateY(350px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
        </style>

        <div class="segments">
            <div class="grid gap-4 px-4 py-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:pl-5 xl:mx-auto">{{ $slot }}</div>
        </div>
    </div>
</div>

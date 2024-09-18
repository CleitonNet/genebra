<div>
    <div class="w-full transition bg-center bg-no-repeat bg-cover carousel" style="background-image: url({{ asset('img/methodology.jpg') }});">
        <div class="text-white bg-azul/85 backdrop-blur-sm">
            <x-container>


                <div data-aos="zoom-out-right" class="flex text-6xl lg:text-[5vw] flex-col justify-center gap-3 mt-[80px] carouse-image">
                    <div class="leading-[50px] md:leading-[65px] lg:leading-[75px] xl:leading-[95px] flex items-center">
                        <div class="py-20 font-bold">Unidades</div>
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
                from { transform: translateY(350px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
        </style>

        <div class="segments">
            <div class="grid gap-4 px-4 py-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:pl-5 xl:mx-auto">

                {{ $slot }}

            </div>
        </div>
    </div>
</div>

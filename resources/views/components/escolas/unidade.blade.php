@props(['image', 'unity', 'URL', 'content'])

<a href="{{ $URL }}" target="_blank" data-aos="fade-up" data-aos-duration="1000" class="segmento">

    <div class="overflow-hidden relative bg-cover border-2 border-azul h-[400px] bg-center rounded-xl" style="background-image: url({{ $image }}); font-size: 400%">
        <div class="absolute bottom-0 left-0 right-0 top-44 bg-gradient-to-t from-azul via-azul/90 to-transparent"></div>
        <div class="absolute bottom-0 z-10 flex flex-col justify-center w-full h-full px-2 opacity-0 bg-white/85 md:px-4 pb-28 segment_more">
            <div class="pt-4 mb-2 text-4xl font-extrabold leading-10 text-azul" style="line-height: ;">{{ $unity }}</div>
            <div class="text-[12pt] font-bold text-azul">{{ $content }}<span class="font-normal text-azul/70">... ler mais.</span></div>
        </div>
        <div class="absolute w-full px-3 mb-2 text-4xl font-extrabold text-center text-white md:px-5 bottom-10" style="line-height: 44px;">{{ $unity }}</div>

    </div>
</a>

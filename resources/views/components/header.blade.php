@props(['image'=>false,'alignment'=>'center'])
<h1 class="relative w-full my-10 pt-10 h-[350px] flex items-center {{ $image ? 'bg-azul/70':'bg-azul' }}">
    <div class="absolute top-0 left-0 w-full h-full bg-cover -z-10" style="background-position: {{ $alignment }}; background-image: url({{ $image }})"></div>
    <x-container class="w-full">
        <div data-aos="zoom-out-right" class="leading-[50px] md:leading-[65px] pl-20 lg:leading-[75px] xl:leading-[95px] text-white title-header font-smoothy">
            {{ $slot }}
        </div>
    </x-container>
</h1>

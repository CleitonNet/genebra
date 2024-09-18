@props(['place','segment'=>'','phone'=>'','address'=>'','gotoURL'=>'','gotoVisit'=>''])

<div class="flex flex-col justify-center p-4 md:p-10 lg:p-16 campus_info">
    <h3 class="text-[2.5rem] font-bold text-azul md:text-5xl leading-10">{{ $place }}</h3>
    <div class="grid gap-1 my-5">
        <div class="flex gap-2 md:text-lg lg:text-xl"><img src="{{ asset('img/graduate-cap.svg') }}" alt="graduate-cap" class=" h-7 md:h-8">{{ $segment }}</div>
        <div class="flex gap-2 md:text-lg lg:text-xl"><img src="{{ asset('img/phone.svg') }}" alt="graduate-cap" class="h-7 md:h-8">{{ $phone }}</div>
        <div class="flex gap-2 md:text-lg lg:text-xl"><img src="{{ asset('img/map-point.svg') }}" alt="graduate-cap" class="h-7 md:h-8">{{ $address }}</div>
    </div>
    <div class="flex gap-2 text-base">
        <a href="{{ $gotoURL }}" target="_blanc" class="px-4 py-2 text-sm font-semibold text-white transition duration-300 border-vermelho md:text-base bg-gradient-to-r from-vermelho via-vermelho to-vermelho hover:from-transparent hover:via-transparent hover:to-transparent hover:text-vermelho hover:border-vermelho rounded-xl border-x-4 border-y">
            Agendar uma visita
        </a>
        <a href="{{ $gotoVisit }}" target="_blanc" class="px-4 py-2 text-sm font-semibold transition duration-300 text-vermelho border-vermelho md:text-base hover:bg-gradient-to-r from-vermelho via-vermelho to-vermelho hover:border-vermelho hover:text-white rounded-xl border-x-4 border-y">
            Como chegar
        </a>
    </div>
</div>

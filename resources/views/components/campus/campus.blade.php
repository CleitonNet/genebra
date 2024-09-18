@props(['goToSlide'=>null,'image','address','place','segment','phone','address','gotoURL','gotoVisit'])
<div class="relative carousel-slide-unity">
    {{-- INICIO DA UNIDADE --}}
    <div class="grid lg:grid-cols-2 relative overflow-hidden border-y-4 border-x-8 border-azul rounded-[3rem] w-full min-h-[450px] group">
        <x-campus.banner banner="{{ $image }}" goToSlide="{{ $goToSlide }}" />
        <x-campus.info place="{{ $place }}" segment="{{ $segment }}" phone="{{ $phone }}" address="{{ $address }}" gotoURL="{{ $gotoURL }}" gotoVisit="{{ $gotoVisit }}" />
    </div>
    {{-- FIM DA UNIDADE --}}
</div>

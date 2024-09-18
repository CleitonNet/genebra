@props(['goToSlide'=>null])
<div class="absolute -bottom-10 right-1/2 lg:-right-10 lg:bottom-2/4 {{ $goToSlide == null ? 'hidden':'' }}">
    <style>
        .lds-ripple { opacity: 1; animation: lds-ripple 2s cubic-bezier(0, 0.2, 0.8, 1) infinite; }
        @keyframes lds-ripple {
            0% { top: 40px; left: 40px; width: 0; height: 0; opacity: 0; }
            4.9% { top: 40px; left: 40px; width: 0; height: 0; opacity: 0; }
            5% { top: 40px; left: 40px; width: 0; height: 0; opacity: 1; }
            100% { top: 0px; left: 0px; width: 80px; height: 80px; opacity: 0; }
        }
    </style>


    <div class="relative flex items-center justify-center w-20 h-20">
        <svg class="z-10 w-12 h-12 bg-white rounded-full shadow-lg cursor-pointer currentColor fill-vermelho group-hover:fill-vermelho hover:fill-vermelho" onclick="goToSlide({{ $goToSlide }})" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
            <path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm2.71,10.71-3,3a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42L12.59,12l-2.3-2.29a1,1,0,0,1,1.42-1.42l3,3A1,1,0,0,1,14.71,12.71Z"></path>
        </svg>
        <div class="absolute border-4 rounded-full border-azul lds-ripple slide_control_center"></div>
        <div class="absolute border-4 rounded-full border-azul lds-ripple slide_control_center"></div>
    </div>
</div>

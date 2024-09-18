@props(['gotoSlide','image'])

<div
    class="bg-center bg-no-repeat bg-cover border-2 border-indigo-800 cursor-pointer thumbnail h-14"
    style="background-image: url({{ asset($image) }})"
    onclick="goToSlide({{ $gotoSlide }})"
    data-slide="{{ $gotoSlide }}"></div>

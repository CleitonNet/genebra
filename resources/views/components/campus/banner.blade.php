@props(['banner'=>'','goToSlide'=>null])
<style>
    .campus_banner { height: 100%; min-height: 250px; }
</style>

<div class="relative bg-center bg-no-repeat bg-cover campus_banner" style="background-image: url({{ $banner }})">
    {{-- <x-campus.slide-control-center goToSlide="{{ $goToSlide }}" /> --}}
</div>

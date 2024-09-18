<x-guest-layout>
    <x-slot name="page">Home</x-slot>

    @livewire('website.welcome.header')
    <x-welcome.matricula />
    <x-welcome.why />
    <x-welcome.segmentos />
    <x-welcome.newsletter />
    <x-welcome.store />
    @livewire('website.school.carousel')
    <x-welcome.questions />

</x-guest-layout>

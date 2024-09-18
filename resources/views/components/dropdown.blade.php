@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}

$classes = ($active ?? false)
            ? 'border-azul text-black focus:outline-none focus:border-azul/80'
            : 'border-transparent text-black/70 hover:text-azul/90 hover:border-azul/70 focus:outline-none focus:text-back focus:border-azul/50';

@endphp

<div class="relative inline-flex items-center {{ $classes }} px-1 mt-4 border-b-[7px] font-semibold leading-5 transition duration-150 ease-in-out" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <button type="button" class="flex items-center justify-center h-full " x-on:click="open = ! open" >
        {{ $trigger }}
        <svg class="ml-1" width="10" height="6" viewBox="0 0 10 6" stroke-opacity="0.5" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path x-show="open" d="M1 5L5 1L9 5" stroke="black" stroke-width="1.5" stroke-linejoin="round"/>
            <path x-show="!open" d="M1 1L5 5L9 1" stroke="black" stroke-width="1.5" stroke-linejoin="round"/>
        </svg>
    </button>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-2 top-[59px] {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-b-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}" style="box-shadow: 0 0 5px 2px rgba(0,0,0,0.1)">
            {{ $content }}
        </div>
    </div>
</div>

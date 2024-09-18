<nav x-data="{ open: false }" class="border-b backdrop-blur border-gray-100 fixed transition top-0 left-0 right-0 z-[9999] bg-white" style="box-shadow: 0 1px 15px 0 rgba(0,0,0,.3)">
    <x-container>
        <!-- Primary Navigation Menu -->
        <div class="flex justify-between h-20 gap-1">
            <div class="flex items-center gap-2">
                <!-- Logo -->
                <a href="{{ route('welcome') }}" class="flex items-center gap-0.5">
                    <x-application-logo class="sm:h-[80px] h-[55px] sm:mt-9 mt-8" style="filter: drop-shadow(0 4px 0px #fff)" />
                    <x-application-logo-text class="sm:h-[40px] h-6 mt-4" />
                </a>
                <div class="w-px rounded bg-slate-400/40 h-2/3"></div>
                <a href="https://ib.escolagenebra.com.br" target="_blank" class="flex items-center gap-0.5 sm:gap-1 pt-2">
                    <img src="{{ asset('img/international-baccalaureate.png') }}" alt="International Baccalaureate Organization"
                        class="object-cover md:max-h-11 max-h-7">
                    <div class="flex flex-col items-start justify-center text-[10px] text-sky-700/80 sm:text-xs">
                        <div>Cadidate</div>
                        <div>School</div>
                    </div>
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="items-stretch justify-center hidden gap-8 sm:-my-px sm:mx-8 xl:flex">
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')">{{ __('Quem somos') }}</x-nav-link>
                <x-dropdown :active="request()->routeIs('segmentos')">
                    <x-slot name='trigger'>
                        Segmentos
                    </x-slot>
                    <x-slot name='content'>
                        <x-dropdown-link :href="route('nursery')">          Berçário/ Ed. Infantil</x-dropdown-link>
                        <x-dropdown-link :href="route('child_education')">  Ens. Fundamental I    </x-dropdown-link>
                        <x-dropdown-link :href="route('primary')">          Ens. Fundamental II</x-dropdown-link>
                        <x-dropdown-link :href="route('high_school')">      Ens. Médio</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
                <x-nav-link :href="'https://galeriagenebra.myportfolio.com/work'" target="_blank">{{ __('Galeria') }}</x-nav-link>
                {{-- <x-nav-link :href="route('methodology')" :active="request()->routeIs('methodology')">{{ __('Metodologia') }}</x-nav-link> --}}
                <x-nav-link :href="route('segments')" :active="request()->routeIs('segments')">{{ __('Matrícula') }}</x-nav-link>
            </div>


            <div class="flex">
                <!-- Settings Dropdown -->
                <div class="flex items-center gap-1.5 sm:ml-6">
                    <a href="https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20para%20conhecer%20a%20escola.%20" target="_blanc" class="items-center hidden px-10 py-2 text-sm font-bold leading-4 text-center text-white transition rounded-lg sm:inline-flex text-xm focus:outline-none bg-gradient-to-r from-azul via-azul/90 to-azul hover:from-azul/90 hover:via-azul hover:to-azul/90">
                        {{ __('Agendar') }} {{ __('Visita') }}
                    </a>

                    <div class="flex gap-1">
                        <div class="w-8 h-5 bg-center bg-no-repeat bg-cover rounded" style="background-image: url({{ asset('img/brazil.svg') }})"></div>
                        <div class="w-8 h-5 bg-center bg-no-repeat bg-cover rounded" style="background-image: url({{ asset('img/united_states.svg') }})"></div>
                    </div>
                    <!-- Hamburger -->
                    <div class="flex items-center ml-2 sm:mx-2 xl:hidden">
                        <button x-on:click="open =! open" class="inline-flex items-center justify-center gap-1 p-2 text-black transition duration-150 ease-in-out rounded-md hover:text-gray-50 hover:bg-gray-800 focus:outline-none focus:bg-gray-900 focus:text-gray-100">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg> Menu
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden xl:hidden">
            <div class="pt-10 pb-3 space-y-1">
                <div class="pb-2 space-y-1">
                    <x-responsive-nav-link class="bg-indigo-100/50" :href="route('nursery')" :active="request()->routeIs('nursery')" >{{ __('Berçário/ Ed. Infantil') }} </x-responsive-nav-link>
                    <x-responsive-nav-link class="bg-indigo-100/50" :href="route('child_education')" :active="request()->routeIs('child_education')" >{{ __('Ens. Fundamental I') }} </x-responsive-nav-link>
                    <x-responsive-nav-link class="bg-indigo-100/50" :href="route('primary')" :active="request()->routeIs('primary')" >{{ __('Ens. Fundamental II') }} </x-responsive-nav-link>
                    <x-responsive-nav-link class="bg-indigo-100/50" :href="route('high_school')" :active="request()->routeIs('high_school')" >{{ __('Ens. Médio') }} </x-responsive-nav-link>
                </div>
                <x-responsive-nav-link class="bg-indigo-200/20" :href="'https://galeriagenebra.myportfolio.com/work'" target="_blank" :active="request()->routeIs('gallery')"     >{{ __('Galeria') }}     </x-responsive-nav-link>
                <x-responsive-nav-link class="bg-indigo-200/20" :href="route('methodology')" :active="request()->routeIs('methodology')" >{{ __('Metodologia') }} </x-responsive-nav-link>
                <x-responsive-nav-link class="bg-indigo-200/20" :href="route('campus')"      :active="request()->routeIs('campus')"      >{{ __('Escolas') }}      </x-responsive-nav-link>
            </div>
        </div>
    </x-container>
</nav>

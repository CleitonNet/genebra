<div>
    <form wire:submit="EditSlide" class="grid p-8 border-2 rounded-lg backdrop-blur-sm bg-azul/10" style="box-shadow: 0 0 2px 1px rgba(0,0,0,0.5)" enctype="multipart/form-data">

        <label for="slideImage" class="relative flex items-center justify-center flex-auto mb-4 overflow-hidden border-4 border-white rounded-lg shadow cursor-pointer group h-[528px] bg-slate-300/75 group-hover:bg-slate-300" style="box-shadow: inset 0 0 10px 2px rgba(0,0,0,0.7);">
            @if ($getImage)
                <img src="{{ $getImage->temporaryUrl() }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000; filter: drop-shadow(0 0 10px rgba(0,0,0,0.5));" />
            @elseif ($image !== null && Storage::exists('public/' . $slide->image))
                <img src="{{ asset('storage/' . $image) }}" alt="image" class="object-contain max-w-full max-h-full border border-slate-300" style="box-shadow: 0 0 10px 2px #000" />
            @else
                <img src="{{ asset('img/upload.svg') }}" alt="image" class="absolute object-cover w-40 h-40 opacity-50 group-hover:opacity-75" style="filter: drop-shadow(0 0 2px rgba(0,0,0,.5))" />
            @endif
            <input wire:model='getImage' type="file" name="slideImage" id="slideImage" class="absolute opacity-0 -z-10" />
        </label>

        <div class="pt-4 mt-8 border-t-4 border-slate-500">
            <div class="font-medium">Deseje colocar título?</div>
            <div class="pt-2 mb-4">
                <button type="button" wire:click='carouselWithTitle()' class="px-6 py-2 rounded {{ $withTitle ? 'bg-azul text-white/80' : 'bg-white text-azul' }}" type="button">Sim</button>
                <button type="button" wire:click='carouselUntitle()' class="px-6 py-2 rounded {{ !$withTitle ? 'bg-azul text-white/80' : 'bg-white text-azul' }}" type="button">Não</button>
            </div>
        </div>

        @if ($withTitle)
            <div class="grid gap-1 max-w-[550px] xl:max-w-max overflow-auto xl:grid-cols-2">
                <div class="grid gap-2 p-4 border rounded-lg border-azul min-w-[550px]">
                    <div class="pl-1 text-sm font-medium opacity-70"><strong>Título</strong> :: Linha 1</div>
                    <input wire:model='title1' class="flex-auto px-6 py-3 border rounded-lg shadow max-w-[420px] bg-white/90" type="text" placeholder="Linha 1" name="title1" id="title1" />
                    <div class="grid grid-cols-8 gap-2">
                        <div class="flex flex-col col-span-1">
                            <div class="text-xs text-center">Sombra</div>
                            <button type="button" wire:model="shadowTitle1" wire:click="togggleShadowTitle1()" class="h-full font-semibold text-black bg-white rounded shadow" style="text-shadow:1.5px 1.5px 2px {{ $shadowTitle1 ? '#1b365d' : 'none' }}">
                                A
                            </button>
                        </div>
                        <div class="col-span-1">
                            <label class="flex flex-col items-center justify-center h-full" for="colorTitle1">
                                <div class="text-xs">Cor</div>
                                <input type="color" name="colorTitle1" id="colorTitle1" wire:model.live='colorTitle1' class="w-full h-10" />
                            </label>
                        </div>
                        <div class="grid col-span-3 text-center">
                            <div class="text-xs">Espessura da fonte</div>
                            <div class="flex items-center h-full gap-2">
                                <button type="button" wire:click='minusWeightTitle1' class="flex-auto border border-slate-400 px-2 py-1 font-bold rounded @if ($this->weightTitle1 !== 100) bg-sky-900/25 @endif">-</button>
                                <span class="bg-white rounded-sm py-0.5 px-6" style="font-weight: {{ $weightTitle1 }}">{{ $weightTitle1 / 100 }}</span>
                                <button type="button" wire:click='addWeightTitle1' class="flex-auto border border-slate-400 px-2 py-1 font-bold rounded @if ($this->weightTitle1 !== 900) bg-sky-900/25 @endif">+</button>
                            </div>
                        </div>
                        <div class="grid col-span-3">
                            <div class="text-xs text-center">Alinhamento</div>
                            <div class="flex h-full gap-1">
                                <label class="flex cursor-pointer items-center justify-center flex-auto font-semibold rounded shadow {{ $alignTitle1 == 'left' ? 'bg-azul/15 border border-azul/80' : 'bg-azul/5' }}">
                                    <input type="radio" wire:model="alignTitle1" value="left" wire:click="alignTitle1Define(`left`)" class="hidden" />
                                    <svg width="24px" height="24px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <g id="Edit / Text_Align_Right"> <path id="Vector" d="M20 18H10M20 14H4M20 10H10M20 6H4" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g> </svg>
                                </label>

                                <label class="flex cursor-pointer items-center justify-center flex-auto font-semibold rounded shadow {{ $alignTitle1 == 'center' ? 'bg-azul/15 border border-azul/80' : 'bg-azul/5' }}">
                                    <input type="radio" wire:model="alignTitle1" value="center" wire:click="alignTitle1Define(`center`)" class="hidden" />
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <g id="Edit / Text_Align_Center"> <path id="Vector" d="M17 18H7M20 14H4M17 10H7M20 6H4" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g> </svg>
                                </label>

                                <label class="flex cursor-pointer items-center justify-center flex-auto font-semibold rounded shadow {{ $alignTitle1 == 'right' ? 'bg-azul/15 border border-azul/80' : 'bg-azul/5' }}">
                                    <input type="radio" wire:model="alignTitle1" value="right" wire:click="alignTitle1Define(`right`)" class="hidden" />
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <g id="Edit / Text_Align_Left"> <path id="Vector" d="M4 18H14M4 14H20M4 10H14M4 6H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g> </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-2 p-4 border rounded-lg border-azul min-w-[550px]">
                    <div class="pl-1 text-sm font-medium opacity-70"><strong>Título</strong> :: Linha 2</div>
                    <input wire:model='title2' class="flex-auto px-6 py-3 border rounded-lg shadow max-w-[420px] bg-white/90" type="text" placeholder="Linha 1" name="title2" id="title2" />
                    <div class="grid grid-cols-8 gap-2">
                        <div class="flex flex-col col-span-1">
                            <div class="text-xs text-center">Sombra</div>
                            <button type="button" wire:model="shadowTitle2" wire:click="togggleShadowTitle2()" class="h-full font-semibold text-black bg-white rounded shadow" style="text-shadow:1.5px 1.5px 2px {{ $shadowTitle2 ? '#1b365d' : 'none' }}">
                                A
                            </button>
                        </div>
                        <div class="col-span-1">
                            <label class="flex flex-col items-center justify-center h-full" for="colorTitle2">
                                <div class="text-xs">Cor</div>
                                <input type="color" name="colorTitle2" id="colorTitle2" wire:model.live='colorTitle2' class="w-full h-10" />
                            </label>
                        </div>
                        <div class="grid col-span-3 text-center">
                            <div class="text-xs">Espessura da fonte</div>
                            <div class="flex items-center h-full gap-2">
                                <button type="button" wire:click='minusWeightTitle2' class="flex-auto border border-slate-400 px-2 py-1 font-bold rounded @if ($this->weightTitle2 !== 100) bg-sky-900/25 @endif">-</button>
                                <span class="bg-white rounded-sm py-0.5 px-6" style="font-weight: {{ $weightTitle2 }}">{{ $weightTitle2 / 100 }}</span>
                                <button type="button" wire:click='addWeightTitle2' class="flex-auto border border-slate-400 px-2 py-1 font-bold rounded @if ($this->weightTitle2 !== 900) bg-sky-900/25 @endif">+</button>
                            </div>
                        </div>
                        <div class="grid col-span-3">
                            <div class="text-xs text-center">Alinhamento</div>
                            <div class="flex h-full gap-1">
                                <label class="flex cursor-pointer items-center justify-center flex-auto font-semibold rounded shadow {{ $alignTitle2 == 'left' ? 'bg-azul/15 border border-azul/80' : 'bg-azul/5' }}">
                                    <input type="radio" wire:model="alignTitle2" value="left" wire:click="alignTitle2Define(`left`)" class="hidden" />
                                    <svg width="24px" height="24px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <g id="Edit / Text_Align_Right"> <path id="Vector" d="M20 18H10M20 14H4M20 10H10M20 6H4" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g> </svg>
                                </label>

                                <label class="flex cursor-pointer items-center justify-center flex-auto font-semibold rounded shadow {{ $alignTitle2 == 'center' ? 'bg-azul/15 border border-azul/80' : 'bg-azul/5' }}">
                                    <input type="radio" wire:model="alignTitle2" value="center" wire:click="alignTitle1Define(`center`)" class="hidden" />
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <g id="Edit / Text_Align_Center"> <path id="Vector" d="M17 18H7M20 14H4M17 10H7M20 6H4" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g> </svg>
                                </label>

                                <label class="flex cursor-pointer items-center justify-center flex-auto font-semibold rounded shadow {{ $alignTitle1 == 'right' ? 'bg-azul/15 border border-azul/80' : 'bg-azul/5' }}">
                                    <input type="radio" wire:model="alignTitle1" value="right" wire:click="alignTitle1Define(`right`)" class="hidden" />
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> <g id="SVGRepo_iconCarrier"> <g id="Edit / Text_Align_Left"> <path id="Vector" d="M4 18H14M4 14H20M4 10H14M4 6H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g> </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4 mt-12 border-t-4 border-slate-500">
                <div class="font-medium">Deseje colocar botões?</div>
                <div class="pt-2 mb-4">
                    <button type="button" wire:click='carouselWithBtns()' class="px-6 py-2 rounded {{ $withBtns ? 'bg-azul text-white/80' : 'bg-white text-azul' }}">Sim</button>
                    <button type="button" wire:click='carouselUnBtns()' class="px-6 py-2 rounded {{ !$withBtns ? 'bg-azul text-white/80' : 'bg-white text-azul' }}">Não</button>
                </div>

                @if ($withBtns)
                    <div class="flex gap-2 overflow-auto">
                        <input wire:model='btnlabel1' class="w-48 px-6 py-3 border rounded-lg shadow bg-white/90" type="text" placeholder="Legenda botão 1" name="btnlabel1" id="btnlabel1" />
                        <input wire:model='btnaction1' class="flex-auto px-6 py-3 border rounded-lg shadow min-w-60 bg-white/90" type="url" placeholder="URL do botão 1" name="btnaction1" id="btnaction1" />
                        <x-switch-toggle :name="'newPage1'" :label="'Nova Página?'" :status="$newPage1 ? true : false" />
                    </div>

                    <div class="flex gap-2 mt-2 overflow-auto">
                        <input wire:model='btnlabel2' class="w-48 px-6 py-3 border rounded-lg shadow bg-white/90" type="text" placeholder="Legenda botão 2" name="btnlabel2" id="btnlabel2" />
                        <input wire:model='btnaction2' class="flex-auto px-6 py-3 border rounded-lg shadow min-w-60 bg-white/90" type="url"                         placeholder="URL do botão 2" name="btnaction2" id="btnaction2" />
                        <x-switch-toggle :name="'newPage2'" :label="'Nova Página?'" :status="$newPage2 ? true : false" />
                    </div>
                @else
                    <div class="flex gap-2 mt-2 overflow-auto">
                        <input wire:model='btnactionSlide' class="flex-auto px-6 py-3 border rounded-lg shadow bg-white/90" type="url" placeholder="URL do Slide" name="btnactionSlide" id="btnactionSlide" />
                        <x-switch-toggle :name="'slideTarget'" :label="'Nova Página?'" :status="$slideTarget ? true : false" />
                    </div>
                @endif
            </div>
        @else
            <div class="flex gap-2 mt-2 overflow-auto">
                <input wire:model='btnactionSlide' class="flex-auto px-6 py-3 border rounded-lg shadow bg-white/90" type="url" placeholder="URL do Slide" name="btnactionSlide" id="btnactionSlide" />
                <x-switch-toggle :name="'slideTarget'" :label="'Nova Página?'" :status="$slideTarget ? true : false" />
            </div>
        @endif

        <div class="flex justify-end"><button type="submit" class="px-8 py-2 font-bold text-white rounded-lg bg-azul" id="enviar">Salvar</button></div>

        <x-action-message class="w-full mt-2" on="form-updated">
            <div class="p-3 text-white bg-green-500 rounded">{{ __('Saved.') }}</div>
        </x-action-message>

    </form>
</div>

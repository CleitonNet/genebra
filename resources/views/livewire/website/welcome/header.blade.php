<div class="pt-20 carousel-container carousel-welcome">
    @if ($slides->count() >= 1)

    <div class="carousel-inner">
        @foreach ($slides as $slide)
            @if (Storage::exists('public/'.$slide->image))
            <div class="overflow-hidden carousel-item">
                @if($slide->btnactionSlide)
                <a target="_blank" href="{{ $slide->btnactionSlide }}" class="content-slide-welcome" style="background-image: url({{ 'storage/'.$slide->image }})">
                    <img src="{{ 'storage/'.$slide->image }}" alt="welcome">
                    <div></div>
                    <div></div>
                    <div>
                        <x-container><div data-aos="fade-up" class="welcome-title" style="{{ $slide->shadowTitle1 ? 'text-shadow:1px 1px 5px #000' : '' }};text-shadow:1px 1px 5px #000; font-weight: {{ $slide->weightTitle1 }}; text-align: {{ $slide->alignTitle1 }}; color: {{ $slide->colorTitle1 }}">{!! $slide->title1 !!}</div></x-container>
                        <x-container><div data-aos="fade-up" class="welcome-title" style="{{ $slide->shadowTitle2 ? 'text-shadow:1px 1px 5px #000' : '' }}; font-weight: {{ $slide->weightTitle2 }}; text-align: {{ $slide->alignTitle2 }}; color: {{ $slide->colorTitle2 }}">{{ $slide->title2 }}</div></x-container>
                    </div>
                    <div></div>
                </a>
                @else
                <div class="content-slide-welcome" style="background-image: url({{ 'storage/'.$slide->image }})">
                    <img src="{{ 'storage/'.$slide->image }}" alt="welcome">
                    <div></div>
                    <div></div>
                    <div>
                        <x-container><div data-aos="fade-up" class="welcome-title welcome-title1" style="{{ $slide->shadowTitle1 ? 'text-shadow:1px 1px 5px #000' : '' }};font-weight: {{ $slide->weightTitle1 }}; text-align: {{ $slide->alignTitle1 }}; color: {{ $slide->colorTitle1 }}">{!! $slide->title1 !!}</div></x-container>
                        <x-container><div data-aos="fade-up" class="welcome-title welcome-title2" style="{{ $slide->shadowTitle2 ? 'text-shadow:1px 1px 5px #000' : '' }};font-weight: {{ $slide->weightTitle2 }}; text-align: {{ $slide->alignTitle2 }}; color: {{ $slide->colorTitle2 }}">{{ $slide->title2 }}</div></x-container>
                        <x-container class="flex justify-start gap-2 pt-4">
                            @if($slide->btnaction1)
                                <a @if($slide->newPage1) target="_blank" @endif href="{{ $slide->btnaction1 }}" class="welcome-btn welcome-btn1 backdrop-blur-sm">{{ $slide->btnlabel1 }}</a>
                            @endif
                            @if($slide->btnaction2)
                                <a @if($slide->newPage2) target="_blank" @endif href="{{ $slide->btnaction2 }}" class="welcome-btn welcome-btn2 backdrop-blur-sm">{{ $slide->btnlabel2 }}</a>
                            @endif
                        </x-container>
                    </div>
                    <div></div>
                </div>
                @endif
            </div>
            @endif
        @endforeach
    </div>

    @if ($slides->count()>1)
        <div class="carousel-thumbnails">
            @foreach ($slides as $slide)
            <div class="carousel-thumbnail" style="background-image: url({{ 'storage/'.$slide->image }});" data-slide="{{ $loop->index }}"></div>
            @endforeach
        </div>
        <div class="progress-bar-container"><div class="progress-bar"></div></div>
    @endif

    @endif
</div>

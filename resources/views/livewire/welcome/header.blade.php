{{-- <div class="pt-20 carousel-container carousel-welcome">
    @if ($slides->count() > 1)

    <div class="carousel-inner">
        @foreach ($slides as $slide)
            @if (Storage::exists('public/'.$slide->image))
            <div class="carousel-item">
                <div class="content-slide-welcome" style="background-image: url({{ 'storage/'.$slide->image }})">
                    <div></div>
                    <div></div>
                    <div>
                        <x-container><div data-aos="fade-up" class="welcome-title welcome-title1" style="text-align: {{ $slide->alignment }}">{!! $slide->title1 !!}</div></x-container>
                        <x-container><div data-aos="fade-up" class="welcome-title welcome-title2" style="text-align: {{ $slide->alignment }}">{{ $slide->title2 }}</div></x-container>
                        <x-container class="flex justify-start gap-2">
                            @if($slide->btnaction1)
                                <a href="{{ $slide->btnaction1 }}" class="welcome-btn welcome-btn1 backdrop-blur-sm">{{ $slide->btnlabel1 }}</a>
                            @endif
                            @if($slide->btnaction2)
                                <a href="{{ $slide->btnaction2 }}" class="welcome-btn welcome-btn2 backdrop-blur-sm">{{ $slide->btnlabel2 }}</a>
                            @endif
                        </x-container>
                    </div>
                    <div></div>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    <div class="carousel-thumbnails">
        @foreach ($slides as $slide)
        <div class="carousel-thumbnail" style="background-image: url({{ 'storage/'.$slide->image }});" data-slide="{{ $loop->index }}"></div>
        @endforeach
    </div>

    <div class="progress-bar-container"><div class="progress-bar"></div></div>

    @endif
</div> --}}
<div></div>

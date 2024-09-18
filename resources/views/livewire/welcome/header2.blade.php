<div>
    {{-- <style>
        .carousel-container {
            display: flex;
            overflow: hidden;
            position: relative;
        }

        .carousel-slide {
            width: 100%;
            transition: all 1s;
            flex: 0 0 auto;
        }

        .thumbnails {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .thumbnail-items {
            display: flex;
            justify-content: center;
        }

        .thumbnail {
            flex-grow: 1;
            flex-basis: 200px;
            width: 100%;
            max-width: 100px;
            margin: 0 5px;
            opacity: 0.3;
            cursor: pointer;
            border-radius: 10px;
            transition: opacity 0.3s;
        }

        .thumbnail.active {
            opacity: 1;
            border: 2px solid #1b365d ;
        }

        .progress-bar-container {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 1px;
            background-color: #e0e0e0;
        }

        .progress-bar {
            height: 100%;
            background-color: red;
            transition: none;
        }

        @keyframes progress {
            from { width: 0%; }
            to { width: 100%; }
        }
    </style>

    <div class="carousel-container">

        @foreach ($slides as $slide)
        @if (Storage::exists('public/'.$slide->image))
        <div class="relative pt-16 overflow-hidden carousel-slide">
            <img src="{{ 'storage/'.$slide->image }}" alt="banner" class="object-cover max-w-full">
        </div>
        @endif
        @endforeach

        @if ($slides->count()>1)
        <div class="absolute w-full gap-2 px-2 mx-auto overflow-hidden bottom-10 thumbnail-items">
            @foreach ($slides as $slide)
            <div class="bg-center bg-no-repeat bg-cover border-2 border-indigo-800 cursor-pointer thumbnail h-14"
                style="background-image: url({{ 'storage/'.$slide->image }})" onclick="goToSlide({{ $loop->index }})" data-slide="{{ $loop->index }}">
            </div>
            @endforeach
        </div>

        <div class="progress-bar-container">
            <div class="progress-bar"></div>
        </div>
        @endif
    </div>

    <script>
        let slideIndex = 0;
        let slides = document.querySelectorAll('.carousel-slide');
        let totalSlides = slides.length;
        let carouselInterval;
        let thumbnails = document.querySelectorAll('.thumbnail');
        let progressBar = document.querySelector('.progress-bar');
        let time = 5000;

        function updateActiveThumbnail() {
            thumbnails.forEach((thumbnail, index) => {
                if (index === slideIndex) {
                    thumbnail.classList.add('active');
                } else {
                    thumbnail.classList.remove('active');
                }
            });
        }

        function moveSlide() {
            for (let slide of slides) {
                slide.style.transform = `translateX(-${slideIndex * 100}%)`;
            }

            updateActiveThumbnail();

            slideIndex++;

            if (slideIndex === totalSlides) {
                slideIndex = 0;
            }

            resetProgressBar();
        }

        function goToSlide(index) {
            slideIndex = index;
            moveSlide();
            clearInterval(carouselInterval);
            resetProgressBar();
        }

        function resetProgressBar() {
            progressBar.style.animation = 'none';
            setTimeout(() => {
                progressBar.style.animation = 'progress 5s linear';
            }, 10); // Pequeno atraso para reiniciar a animação
        }

        carouselInterval = setInterval(moveSlide, time);

        document.querySelector('.carousel-container').addEventListener('mouseenter', function() {
            clearInterval(carouselInterval);
            progressBar.style.animation = 'none'; // Pausar a barra de progresso ao passar o mouse
        });

        document.querySelector('.carousel-container').addEventListener('mouseleave', function() {
            carouselInterval = setInterval(moveSlide, time);
            resetProgressBar(); // Reiniciar a barra de progresso ao remover o mouse
        });

        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', function() {
                goToSlide(index);
            });
        });

        // Inicializar a barra de progresso na primeira vez
        resetProgressBar();
    </script> --}}
</div>

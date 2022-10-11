@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="bg-white rounded-md px-9 pb-9">
            {{-- Top --}}
            <div class="flex items-center justify-center w-full pt-4 gap-x-2">
                <button type="button"
                    class="flex items-center justify-center text-lg bg-[#D9D9D9] rounded-full  w-14 h-14 btn-previous">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#333443" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                {{-- Slider --}}
                <div class="relative flex w-[860px] overflow-hidden py-1 ani-slider">
                    {{-- Slides --}}
                    <div class="absolute px-2 ani-slide">
                        <img class="rounded-full hover:ring-2 ring-[#4CAF50]"
                            src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="absolute px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    <div class="px-2 ani-slide">
                        <img src="{{ asset('images/main/manpower/person.png') }}" alt="">
                    </div>
                    {{-- Controls --}}
                </div>
                <button type="button"
                    class="flex items-center justify-center text-lg bg-[#D9D9D9] rounded-full w-14 h-14 btn-next">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#333443" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

            </div>
            {{-- Info --}}
            <div class="flex items-center">
                {{-- 1 --}}
                <div class="flex items-center">
                    <h2>25 August, 2022</h2>
                    <div class="flex">
                        <h2>Month</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const slides = document.querySelectorAll(".ani-slide");
        const nextSlide = document.querySelector(".btn-next");
        const prevSlide = document.querySelector(".btn-previous");
        slides.forEach((aniSlides, index) => {
            aniSlides.style.transform = `translateX(${index * 100}%)`;
        });
        let sliderCounter = 0;
        nextSlide.addEventListener("click", function() {
            if (sliderCounter < slides.length - 1) {
                sliderCounter++;
                slides.forEach((aniSlides, index) => {
                    aniSlides.style.transform = `translateX(${ (index - sliderCounter) * 100 }%)`;
                });
            }
        });
        prevSlide.addEventListener("click", function() {
            if (sliderCounter > 0) {
                sliderCounter--;
                slides.forEach((aniSlides, index) => {
                    aniSlides.style.transform = `translateX(${ (index - sliderCounter) * 100 }%)`;
                });
            }
        });
    </script>
@endsection

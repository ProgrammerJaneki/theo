@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="bg-white rounded-md px-9 pb-9">
            {{-- Top --}}
            <div class="flex items-center justify-center w-full pt-4 gap-x-2">
                <button type="button"
                    class="whitespace-nowrap flex items-center justify-center text-lg bg-[#D9D9D9] rounded-full p-6 btn-previous">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#333443" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                {{-- Slider --}}
                <div class="relative flex w-full overflow-hidden py-1 ani-slider ">
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
            <div x-data="{ monthOption: false, deptOption: false }" class="flex items-center text-xs mt-16">
                {{-- 1 --}}
                <div class="flex items-center gap-x-7">
                    <h2>25 August, 2022</h2>
                    <div class="flex items-center gap-x-4">
                        <h2>Month</h2>
                        <div class="relative font-bold">
                            <button @click="monthOption = !monthOption" @click.outside="monthOption = false"
                                class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-1 px-2 w-[135px] gap-x-1"
                                type="button">
                                <span class="">Month</span>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                            {{-- dropdown --}}
                            <template x-if="monthOption">
                                <div class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[135px]">
                                    <ul class="text-left ">
                                        <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">January</li>
                                        <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">February</li>
                                    </ul>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="flex items-center gap-x-3 ml-9">
                    <h2>Department</h2>
                    <div class="relative font-bold">
                        <button @click="deptOption = !deptOption" @click.outside="deptOption = false"
                            class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-1 px-2 w-[135px] gap-x-1"
                            type="button">
                            <span class="">House Keeping</span>
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        {{-- dropdown --}}
                        <template x-if="deptOption">
                            <div class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[135px]">
                                <ul class="text-left ">
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Sales</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Marketing</li>
                                </ul>
                            </div>
                        </template>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="flex items-center gap-x-4 ml-16">
                    <h2>Time In</h2>
                    <div class="relative font-bold">
                        <div
                            class="flex justify-between items-center border border-[#CACACA] rounded-md py-1 pl-1 w-[82px] gap-x-1">
                            <span class="">9:00 AM</span>
                        </div>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="flex items-center gap-x-4 ml-16">
                    <h2>Time Out</h2>
                    <div class="relative font-bold">
                        <div
                            class="flex justify-between items-center border border-[#CACACA] rounded-md py-1 pl-1 w-[82px] gap-x-1">
                            <span class="">6:00 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            <livewire:components.main.manpower.schedules.schedules-section2 />
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

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
                <div class="relative flex w-full py-1 overflow-hidden ani-slider ">
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
            {{-- Dropdowns --}}
            <div x-data="{ monthOption: false, deptOption: false }" class="flex items-center mt-16 text-xs">
                {{-- 1 --}}
                <div class="flex items-center gap-x-7">
                    <h2 class="font-bold whitespace-nowrap">25 August, 2022</h2>
                    <div class="flex items-center gap-x-4">
                        <label for="month">Month</label>
                        <div x-data="select" class="relative h-6 leading-none w-36" @click.outside="open = false">
                            <button type="button" @click="toggle"
                                class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                <span class="font-bold" x-text="(option == '') ? 'October' : option"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </button>
                            <template x-if="open">
                                <ul
                                    class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('January')"> January</li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('February')">
                                        February
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('March')">
                                        March
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('April')">
                                        April
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('May')">
                                        May
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('June')">
                                        June
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('July')">
                                        July
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('August')">
                                        August
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('September')">
                                        September
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('October')">
                                        October
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('November')">
                                        November
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('December')">
                                        December
                                    </li>
                                </ul>
                            </template>
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="flex items-center gap-x-3 ml-9">
                    <label for="department">Department</label>
                    <div x-data="select" class="relative h-6 leading-none w-36" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                            <span class="font-bold" x-text="(option == '') ? 'House Keeping' : option"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul
                                class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('House Keeping')"> House Keeping</li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Kitchen')"> Kitchen</li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Electrician')">
                                    Electrician
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Receptionist')">
                                    Receptionist
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Purchasing')">
                                    Purchasing
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Sales & Marketing')">
                                    Sales & Marketing
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('IT')">
                                    IT
                                </li>
                            </ul>
                        </template>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="flex items-center ml-14 gap-x-4">
                    <h2 class="whitespace-nowrap">Time In</h2>
                    <div class="relative font-bold">
                        <div
                            class="flex justify-between items-center border border-[#CACACA] rounded-md py-1 pl-1 w-[82px] gap-x-1">
                            <span class="">9:00 AM</span>
                        </div>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="flex items-center ml-16 gap-x-4">
                    <h2 class="whitespace-nowrap">Time Out</h2>
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
@endsection
@push('scripts')
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
        // Option Select
        document.addEventListener("alpine:init", () => {
            Alpine.data("select", () => ({
                open: false,
                option: "",

                toggle() {
                    this.open = !this.open;
                },

                setOption(val) {
                    this.option = val;
                    this.open = false;
                },
            }));
        });
    </script>
@endpush

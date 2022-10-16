@extends('livewire.layouts.theo-base')
@section('main-theo')
    {{-- Top --}}
    <div class="relative flex items-center justify-center w-full pt-4 gap-x-2">
        <style>
            .swiper-button-prev {
                margin-left: 0 !important;
                border-radius: 100%;
            }

            .swiper-button-next {
                margin-right: 0 !important;
                border-radius: 100%;
            }

            .swiper-button-prev,
            .swiper-button-next {
                width: 48px !important;
                height: 48px !important;
            }

            .swiper-button-next::after,
            .swiper-button-prev::after {
                color: gray;
                font-size: 16px !important;
            }
        </style>
        <div class="relative flex items-center px-14 w-full">

            <div class="flex items-center swiper w-full mySwiper px-0">
                <ul class="swiper-wrapper flex items-center space-x-5 w-full px-0 ">
                    @for ($k = 0; $k < 15; $k++)
                        <li class="swiper-slide max-w-[56px] max-h-[56px] rounded-full">
                            <div class="bg-[#4CAF50] p-0.5 rounded-full">
                                <a class="h-14 w-14" href="">
                                    <img class="rounded-full" src="{{ asset('images/main/manpower/person.png') }}"
                                        alt="">
                                </a>
                            </div>
                    @endfor
                </ul>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

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
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('January')">
                                January</li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('February')">
                                February
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('March')">
                                March
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('April')">
                                April
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('May')">
                                May
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('June')">
                                June
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('July')">
                                July
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('August')">
                                August
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('September')">
                                September
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('October')">
                                October
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('November')">
                                November
                            </li>
                            <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('December')">
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
                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('House Keeping')">
                            House Keeping</li>
                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Kitchen')">
                            Kitchen</li>
                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Electrician')">
                            Electrician
                        </li>
                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Receptionist')">
                            Receptionist
                        </li>
                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Purchasing')">
                            Purchasing
                        </li>
                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                            @click="setOption('Sales & Marketing')">
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
@endsection
@push('scripts')
    //Carousel
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 11,
            spaceBetween: 0,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
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

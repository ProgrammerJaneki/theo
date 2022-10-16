@extends('livewire.layouts.theo-base')
@section('main-theo')
            {{-- Top --}}
            <div class="flex w-full pb-8 pt-7 ">
                <h2 class="font-bold">Customer Reviews</h2>
            </div>
            {{-- Drop Downs --}}
            <div x-data="{ pickOrder: false, pickMonth: false, pickYear: false }" class="flex items-center text-xs gap-x-8">
                     {{-- Order --}}
                    <div class="flex items-center gap-x-2 ">
                        <h2>Order:</h2>
                        <div x-data="select" class="relative h-6 leading-none w-36" @click.outside="open = false">
                            <button type="button" @click="toggle"
                                class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                <span class="font-bold" x-text="(option == '') ? 'Newest - Oldest' : option"></span>
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
                                        @click="setOption('Newest - Oldest')">
                                        Newest - Oldest
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('Oldest - Newest')">
                                        Oldest - Newest
                                    </li>
                                </ul>
                            </template>
                        </div>
                    </div>
                    {{-- Month --}}
                    <div class="flex items-center gap-x-2">
                        <label for="month">Month:</label>
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
                    {{-- Year --}}
                    <div class="flex items-center gap-x-2 ">
                        <label for="year">Year:</label>
                        <div x-data="select" class="relative w-24 h-6 leading-none"
                            @click.outside="open = false">
                            <button type="button" @click="toggle"
                                class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                <span class="font-bold" x-text="(option == '') ? '2022' : option"></span>
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
                                        @click="setOption('2021')">
                                        2021
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('2022')">
                                        2022
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('2023')">
                                        2023
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('2024')">
                                        2024
                                    </li>
                                </ul>
                            </template>
                        </div>
                    </div>
            </div>
            {{-- Reviews --}}
            @for ($i = 0; $i < 3; $i++)
                <div class="flex flex-col py-6 px-4 w-full text-xs bg-[#FFFFFF] border-2 border-[#D9D9D9] mt-8 rounded-xl">
                    {{-- Top --}}
                    <div class="flex justify-between w-full">
                        <div class="flex gap-x-5">
                            <img class="w-12 h-12" src="{{ asset('images/main/transactions/sampleImg.png') }}"
                                alt="">
                            <div class="flex flex-col gap-y-5">
                                <div class="flex flex-col gap-y-2">
                                    <h2 class="font-bold">Juanita Josefina Manolita Teodora Pacholita</h2>
                                    <div class="flex items-center gap-x-11">
                                        <div class="flex">
                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.5889 4.17513L14.5806 4.76402C14.9111 4.81124 15.1889 5.04458 15.2945 5.36402C15.4 5.68625 15.3139 6.03624 15.075 6.27513L12.1806 9.11402L12.8639 13.1862C12.9195 13.5196 12.7833 13.8585 12.5056 14.0557C12.2306 14.2529 11.8667 14.2779 11.5695 14.1196L8.00279 12.2168L4.4389 14.1196C4.1389 14.2779 3.77501 14.2529 3.50001 14.0557C3.22501 13.8585 3.08612 13.5196 3.14445 13.1862L3.82779 9.11402L0.932785 6.27513C0.693618 6.03624 0.608618 5.68625 0.713618 5.36402C0.818341 5.04458 1.09528 4.81124 1.42834 4.76402L5.41667 4.17513L7.20556 0.499301C7.35278 0.193301 7.6639 -0.000976562 8.00279 -0.000976562C8.34445 -0.000976562 8.65556 0.193301 8.80278 0.499301L10.5889 4.17513Z"
                                                    fill="#FFC702" />
                                            </svg>
                                            <span class="text-[#4CAF50]">5</span>
                                        </div>
                                        <h2 class="text-[#A7A7A7]">24 August, 2022</h2>
                                    </div>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sit malesuada magna eget
                                    cursus.
                                    Lobortis at in pellentesque porttitor dolor sit ac tellus. Ac neque massa commodo
                                    volutpat
                                    nulla.
                                    Facilisi ultricies sit morbi in vel. Fringilla velit, eget nisi, venenatis nec. “</p>
                                {{-- Images --}}
                                <div class="flex gap-x-5">
                                    @for ($j = 0; $j < 5; $j++)
                                        <img class="w-20 h-20" src="{{ asset('images/main/guests/sampleReviewImg.png') }}"
                                            alt="">
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="whitespace-nowrap">Standard | 3 Nights</span>
                        </div>
                    </div>
                </div>
            @endfor
            {{-- Pagination --}}
            <nav class="flex mt-5" aria-label="Page navigation example">
                <ul class="inline-flex items-center ml-auto -space-x-px text-xs">
                    <li>
                        <a href="" class="block py-2 pr-4 ml-0 leading-tight bg-white hover:text-[#4CAF50]">
                            <span class="sr-only">Previous</span>
                            <svg class="w-4 h-4" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="" class="py-2 px-2 leading-tight bg-white text-[#4CAF50]">1</a>
                    </li>
                    <li>
                        <a href=""
                            class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">2</a>
                    </li>
                    <li>
                        <a href=""
                            class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">3</a>
                    </li>
                    <li>
                        <a href=""
                            class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">4</a>
                    </li>
                    <li>
                        <a href=""
                            class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">5</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 pl-4 leading-tight bg-white hover:text-[#4CAF50]">
                            <span class="sr-only">Next</span>
                            <svg class="w-4 h-4" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
@endsection

@push('scripts')
    <script>
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

@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="px-12 pb-5 bg-white rounded-md">
            {{-- Top --}}
            <div class="flex w-full pb-8 pt-7 ">
                <h2 class="font-bold">Customer Reviews</h2>
            </div>
            {{-- Drop Downs --}}
            <div x-data="{ pickOrder: false, pickMonth: false, pickYear: false }" class="flex items-center text-xs gap-x-8">
                {{-- Order --}}
                <div class="flex items-center gap-x-2 ">
                    <h2>Order:</h2>
                    <div class="relative font-bold">
                        <button @click="pickOrder = !pickOrder" @click.outside="pickOrder = false"
                            class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-1 px-2 whitespace-nowrap w-[147px]"
                            type="button">
                            <span class="">Newest - Oldest</span>
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        {{-- dropdown --}}
                        <template x-if="pickOrder">
                            <div class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[147px]">
                                <ul class="text-left ">
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Oldest - Newest</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Option</li>
                                </ul>
                            </div>
                        </template>
                    </div>
                </div>
                {{-- Month --}}
                <div class="flex items-center gap-x-2">
                    <h2>Month:</h2>
                    <div class="relative font-bold">
                        <button @click="pickMonth = !pickMonth" @click.outside="pickMonth = false"
                            class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-1 px-2 whitespace-nowrap w-[147px]"
                            type="button">
                            <span class="">August</span>
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        {{-- dropdown --}}
                        <template x-if="pickMonth">
                            <div class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[147px]">
                                <ul class="text-left ">
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">January</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">February</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">March</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">April</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">June</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">July</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">September</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">October</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">November</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">December</li>
                                </ul>
                            </div>
                        </template>
                    </div>
                </div>
                {{-- Year --}}
                <div class="flex items-center gap-x-2 ">
                    <h2>Year:</h2>
                    <div class="relative font-bold">
                        <button @click="pickYear = !pickYear" @click.outside="pickYear = false"
                            class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-1 px-2 whitespace-nowrap w-[95px]"
                            type="button">
                            <span class="">2022</span>
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        {{-- dropdown --}}
                        <template x-if="pickYear">
                            <div class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[95px]">
                                <ul class="text-left ">
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">2018</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">2019</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">2020</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">2021</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">2022</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">2023</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">2024</li>
                                </ul>
                            </div>
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
        </div>
    </div>
@endsection

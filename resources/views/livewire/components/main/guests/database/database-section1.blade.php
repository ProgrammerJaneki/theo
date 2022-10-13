@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="bg-white rounded-md px-7 pb-9">
            {{-- Top --}}
            <div x-data="{ showAll: true, showNew: false, showRegular: false, showVip: false }" class="flex items-center justify-between w-full pt-5 pb-0 text-xs ">
                {{-- Left --}}
                <div class="flex gap-x-6">
                    <div class="flex">
                        <button @click="showAll = true, showNew = false, showRegular = false, showVip = false"
                            :class=" showAll ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                            class="rounded-l-md py-3 px-5 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                            type="button">All</button>
                        <button @click="showNew = true, showAll = false, showRegular = false, showVip = false"
                            :class=" showNew ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                            class="py-3 px-12 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                            type="button">New</button>
                        <button @click="showRegular = true, showAll = false, showNew = false, showVip = false"
                            :class=" showRegular ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                            class="py-3 px-10 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                            type="button">Regular</button>
                        <button @click="showVip = true, showAll = false, showNew = false, showRegular = false"
                            :class=" showVip ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                            class="px-12 py-3 transition-all duration-150 ease-linear rounded-r-md"
                            type="button">VIP</button>
                    </div>
                    <button
                        class="flex justify-center gap-x-2 text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] border-[#4CAF50] px-3 py-3 border rounded-md"
                        type="button">
                        <svg class="w-4 h-4" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.71429 1.15625V2.3125H10.2857V1.15625C10.2857 0.517783 10.7964 0 11.4286 0C12.0607 0 12.5714 0.517783 12.5714 1.15625V2.3125H14.2857C15.2321 2.3125 16 3.08899 16 4.04688V5.78125H0V4.04688C0 3.08899 0.7675 2.3125 1.71429 2.3125H3.42857V1.15625C3.42857 0.517783 3.93929 0 4.57143 0C5.20357 0 5.71429 0.517783 5.71429 1.15625ZM0 6.9375H16V16.7656C16 17.7231 15.2321 18.5 14.2857 18.5H1.71429C0.7675 18.5 0 17.7231 0 16.7656V6.9375ZM2.28571 10.9844C2.28571 11.3023 2.54143 11.5625 2.85714 11.5625H4C4.31429 11.5625 4.57143 11.3023 4.57143 10.9844V9.82812C4.57143 9.51016 4.31429 9.25 4 9.25H2.85714C2.54143 9.25 2.28571 9.51016 2.28571 9.82812V10.9844ZM6.85714 10.9844C6.85714 11.3023 7.11429 11.5625 7.42857 11.5625H8.57143C8.88571 11.5625 9.14286 11.3023 9.14286 10.9844V9.82812C9.14286 9.51016 8.88571 9.25 8.57143 9.25H7.42857C7.11429 9.25 6.85714 9.51016 6.85714 9.82812V10.9844ZM12 9.25C11.6857 9.25 11.4286 9.51016 11.4286 9.82812V10.9844C11.4286 11.3023 11.6857 11.5625 12 11.5625H13.1429C13.4571 11.5625 13.7143 11.3023 13.7143 10.9844V9.82812C13.7143 9.51016 13.4571 9.25 13.1429 9.25H12ZM2.28571 15.6094C2.28571 15.9273 2.54143 16.1875 2.85714 16.1875H4C4.31429 16.1875 4.57143 15.9273 4.57143 15.6094V14.4531C4.57143 14.1352 4.31429 13.875 4 13.875H2.85714C2.54143 13.875 2.28571 14.1352 2.28571 14.4531V15.6094ZM7.42857 13.875C7.11429 13.875 6.85714 14.1352 6.85714 14.4531V15.6094C6.85714 15.9273 7.11429 16.1875 7.42857 16.1875H8.57143C8.88571 16.1875 9.14286 15.9273 9.14286 15.6094V14.4531C9.14286 14.1352 8.88571 13.875 8.57143 13.875H7.42857ZM11.4286 15.6094C11.4286 15.9273 11.6857 16.1875 12 16.1875H13.1429C13.4571 16.1875 13.7143 15.9273 13.7143 15.6094V14.4531C13.7143 14.1352 13.4571 13.875 13.1429 13.875H12C11.6857 13.875 11.4286 14.1352 11.4286 14.4531V15.6094Z"
                                fill="currentColor" />
                        </svg>
                        <span>Calendar View</span>
                    </button>
                </div>
                {{-- Right --}}
                <a class="bg-[#4CAF50] text-[#FFFFFF] flex items-center py-3 px-6 gap-x-2 rounded-md text-xs hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                    href="">
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z"
                            fill="currentColor" />
                        <path
                            d="M8 4C8.13261 4 8.25979 4.05268 8.35355 4.14645C8.44732 4.24021 8.5 4.36739 8.5 4.5V7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H8.5V11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H7.5V4.5C7.5 4.36739 7.55268 4.24021 7.64645 4.14645C7.74021 4.05268 7.86739 4 8 4Z"
                            fill="currentColor" />
                    </svg>
                    <span>Add New</span>
                </a>
            </div>
            {{-- Search Bar --}}
            <div x-data="{ pickOrder: false, pickMonth: false, pickYear: false }" class="flex items-center justify-between w-full text-xs pb-2 mt-8 ">
                {{-- Search Bar --}}
                <div class="bg-[#E6E6E6] text-[#A7A7A7] flex items-center py-3 px-5 gap-x-4 rounded-xl w-[380px]">
                    <input class="w-full bg-transparent focus:text-[#333443] focus:outline-none" type="text"
                        placeholder="Search...">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0a8.5 8.5 0 0 1 17 0Z" />
                    </svg>
                </div>
                {{-- Drop downs --}}
                <div class="flex items-center gap-x-8">
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
            </div>
            {{-- Table --}}
            <livewire:components.main.guests.database.customer-table />
            {{-- Bottom --}}
            <div class="flex items-center justify-between pl-3 mt-8 text-xs">
                <div class="flex space-x-1">
                    <h2>Showing</h2>
                    <div>
                        <span>12</span>/<span>303</span>
                    </div>
                </div>
                {{-- Page nav --}}
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="" class="block py-2 pr-4 ml-0 leading-tight bg-white hover:text-[#4CAF50]">
                                <span class="sr-only">Previous</span>
                                <svg class="w-4 h-4" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="" class="py-2 px-2 leading-tight bg-white text-[#4CAF50]">1</a>
                        </li>
                        <li>
                            <a href="" class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">2</a>
                        </li>
                        <li>
                            <a href="" class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">3</a>
                        </li>
                        <li>
                            <a href="" class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">4</a>
                        </li>
                        <li>
                            <a href="" class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">5</a>
                        </li>
                        <li>
                            <a href="" class="block py-2 pl-4 leading-tight bg-white hover:text-[#4CAF50]">
                                <span class="sr-only">Next</span>
                                <svg class="w-4 h-4" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
@endsection

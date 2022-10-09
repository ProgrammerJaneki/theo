@extends('livewire.layouts.registration-base')
@section('main-base')
    <div x-data="{ firstSlide: true, secondSlide: false, thirdSlide: false, fourthSlide: false }" class="flex justify-center items-center w-full ">
        {{-- 1 --}}
        <template x-if="firstSlide">
            <div class="flex justify-center items-center w-full">
                {{-- Left --}}
                <div class="relative right-0 flex items-center justify-center w-7/12 bg-[#FFFFFF] ">
                    <div class="animate__animated animate__fadeOutUpBig animate__delay-2s absolute  font-bold text-6xl ">
                        Get Started...
                    </div>
                    <div
                        class="animate__animated animate__fadeInUp animate__delay-2s flex flex-col px-12 lg:px-auto lg:mr-0 lg:ml-auto lg:pr-16 xl:pr-20 gap-y-11 items-right">
                        <div class="space-y-6">
                            <div class="flex gap-x-1">
                                <div class="rounded-full w-3 h-3 bg-[#4CAF50]"></div>
                                <div class="rounded-full w-3 h-3 bg-[#D9D9D9]"></div>
                                <div class="rounded-full w-3 h-3 bg-[#D9D9D9]"></div>
                            </div>
                            <h2 class="text-2xl font-bold md:text-5xl ">Book an appointment <br> with ease.</h2>
                            <h4 class="text-2xl leading-none">Set up meetings or any event.</h4>
                        </div>
                        {{-- Buttons --}}
                        <div class="flex gap-x-9">
                            <button
                                class="text-center text-[#4CAF50] py-3 border-2 border-[#4CAF50] hover:text-white hover:bg-[#4CAF50] 
                        transition-all duration-300 ease-linear rounded-xl w-[220px]"
                                @click=" fourthSlide = true, firstSlide = false, secondSlide = false, thirdSlide = false "
                                type="button"> Skip
                            </button>
                            <button
                                class="text-center text-[#FFFFFF] py-3 bg-[#4CAF50] border-2 border-[#4CAF50] hover:bg-[#4CA450]/70
                        transition-all duration-300 ease-linear rounded-xl w-[220px]"
                                @click="firstSlide = !firstSlide, secondSlide = !secondSlide" type="button"> Next
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Right --}}
                <div class=" w-5/12  h-screen">
                    <img class="animate__animated animate__fadeIn animate__delay-2s object-cover w-full h-screen"
                        src="{{ asset('images/profile-creation/slide1.png') }}" alt="">
                </div>
            </div>
        </template>
        {{-- 2 --}}
        <template x-if="secondSlide">
            <div class="animate__animated animate__fadeInRight flex justify-center items-center w-full">
                {{-- Left --}}
                <div class="right-0 flex items-center justify-center w-7/12 bg-[#FFFFFF] ">
                    <div class=" flex flex-col px-12 lg:px-auto lg:mr-0 lg:ml-auto lg:pr-16 xl:pr-20 gap-y-11 items-right">
                        <div class="space-y-6">
                            <div class="flex gap-x-1">
                                <div class="rounded-full w-3 h-3 bg-[#D9D9D9]"></div>
                                <div class="rounded-full w-3 h-3 bg-[#4CAF50]"></div>
                                <div class="rounded-full w-3 h-3 bg-[#D9D9D9]"></div>
                            </div>
                            <h2 class="text-2xl font-bold md:text-5xl ">Start Booking now to <br> get the best deals!</h2>
                            <h4 class="text-2xl leading-none">Set up meetings or any event.</h4>
                        </div>
                        {{-- Buttons --}}
                        <div class="flex gap-x-9">
                            <button
                                class="text-center text-[#4CAF50] py-3 border-2 border-[#4CAF50] hover:text-white hover:bg-[#4CAF50] 
                        transition-all duration-300 ease-linear rounded-xl w-[220px]"
                                @click=" fourthSlide = true, firstSlide = false, secondSlide = false, thirdSlide = false "
                                type="button"> Skip
                            </button>
                            <button
                                class="text-center text-[#FFFFFF] py-3 bg-[#4CAF50] border-2 border-[#4CAF50] hover:bg-[#4CA450]/70
                        transition-all duration-300 ease-linear rounded-xl w-[220px]"
                                @click="secondSlide = !secondSlide, thirdSlide = !thirdSlide" type="button"> Next
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Right --}}
                <div class=" w-5/12  h-screen">
                    <img class="object-cover w-full h-screen" src="{{ asset('images/profile-creation/slide2.png') }}"
                        alt="">
                </div>
            </div>
        </template>
        {{-- 3 --}}
        <template x-if="thirdSlide">
            <div class="animate__animated animate__fadeInRight flex justify-center items-center w-full">
                {{-- Left --}}
                <div class="right-0 flex items-center justify-center w-7/12 bg-[#FFFFFF] ">
                    <div class=" flex flex-col px-12 lg:px-auto lg:mr-0 lg:ml-auto lg:pr-16 xl:pr-20 gap-y-11 items-right">
                        <div class="space-y-6">
                            <div class="flex gap-x-1">
                                <div class="rounded-full w-3 h-3 bg-[#D9D9D9]"></div>
                                <div class="rounded-full w-3 h-3 bg-[#D9D9D9]"></div>
                                <div class="rounded-full w-3 h-3 bg-[#4CAF50]"></div>
                            </div>
                            <h2 class="text-2xl font-bold md:text-5xl ">Start Booking now to <br> get the best deals!</h2>
                            <h4 class="text-2xl leading-none">Set up meetings or any event.</h4>
                        </div>
                        {{-- Buttons --}}
                        <div class="flex gap-x-9">
                            <button
                                class="text-center text-[#4CAF50] py-3 border-2 border-[#4CAF50] hover:text-white hover:bg-[#4CAF50] 
                        transition-all duration-300 ease-linear rounded-xl w-[220px]"
                                @click=" fourthSlide = true, firstSlide = false, secondSlide = false, thirdSlide = false "
                                type="button"> Skip
                            </button>
                            <button
                                class="text-center text-[#FFFFFF] py-3 bg-[#4CAF50] border-2 border-[#4CAF50] hover:bg-[#4CA450]/70
                        transition-all duration-300 ease-linear rounded-xl w-[220px]"
                                type="button"> Next
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Right --}}
                <div class=" w-5/12  h-screen">
                    <img class="object-cover w-full h-screen" src="{{ asset('images/profile-creation/slide3.png') }}"
                        alt="">
                </div>
            </div>
        </template>
        {{-- 4 --}}
        <template x-if="fourthSlide">
            <div class="animate__animated animate__fadeInUp flex justify-center items-center w-full">
                {{-- Left --}}
                <div class="right-0 flex items-center justify-center w-7/12 bg-[#FFFFFF] ">
                    <div class=" flex flex-col px-12 lg:px-auto lg:mr-0 lg:ml-auto lg:pr-16 xl:pr-20 gap-y-11 items-right">
                        <div class="space-y-9">
                            {{-- <div class="flex gap-x-1">
                                <div class="rounded-full w-3 h-3 bg-[#D9D9D9]"></div>
                                <div class="rounded-full w-3 h-3 bg-[#D9D9D9]"></div>
                                <div class="rounded-full w-3 h-3 bg-[#4CAF50]"></div>
                            </div> --}}
                            <h2 class="text-2xl font-bold md:text-5xl ">Set up your <br> profile</h2>
                            <h4 class="text-2xl leading-none">To get started, you need to provide your <br> personal
                                information to access the system <br> based on your current level.</h4>
                        </div>
                    </div>
                </div>
                {{-- Right --}}
                <div class="flex flex-col items-center justify-center w-5/12 h-screen bg-[#4CAF50]">
                    {{-- Icon --}}
                    <svg class="w-[136px] h-[136px]" viewBox="0 0 138 138" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M121.401 112.534C128.403 104.11 133.272 94.1242 135.597 83.4209C137.923 72.7175 137.637 61.6115 134.762 51.0423C131.888 40.4731 126.51 30.7516 119.084 22.7003C111.658 14.649 102.402 8.5047 92.0991 4.78717C81.7961 1.06964 70.7494 -0.111742 59.8933 1.34296C49.0373 2.79766 38.6912 6.84565 29.7305 13.1445C20.7698 19.4433 13.4579 27.8077 8.41347 37.53C3.36903 47.2524 0.740432 58.0467 0.750026 68.9998C0.753708 84.9224 6.36478 100.335 16.5987 112.534L16.5012 112.616C16.8424 113.026 17.2324 113.377 17.5834 113.782C18.0222 114.284 18.495 114.757 18.9484 115.244C20.3134 116.726 21.7174 118.15 23.1897 119.485C23.6382 119.895 24.1013 120.275 24.5546 120.665C26.1147 122.011 27.7185 123.288 29.3809 124.477C29.5954 124.624 29.7904 124.814 30.0049 124.965V124.906C41.4227 132.941 55.0434 137.253 69.0049 137.253C82.9664 137.253 96.5872 132.941 108.005 124.906V124.965C108.219 124.814 108.41 124.624 108.629 124.477C110.286 123.283 111.895 122.011 113.455 120.665C113.909 120.275 114.372 119.89 114.82 119.485C116.292 118.145 117.696 116.726 119.061 115.244C119.515 114.757 119.983 114.284 120.426 113.782C120.773 113.377 121.167 113.026 121.509 112.612L121.401 112.534ZM69 29.9998C73.3389 29.9998 77.5803 31.2864 81.1879 33.6969C84.7955 36.1074 87.6072 39.5336 89.2676 43.5421C90.928 47.5507 91.3625 51.9616 90.516 56.2171C89.6695 60.4725 87.5802 64.3814 84.5122 67.4494C81.4442 70.5174 77.5353 72.6068 73.2798 73.4532C69.0244 74.2997 64.6135 73.8653 60.6049 72.2049C56.5964 70.5445 53.1702 67.7327 50.7597 64.1251C48.3491 60.5175 47.0625 56.2761 47.0625 51.9373C47.0625 46.1191 49.3738 40.5392 53.4879 36.4251C57.602 32.311 63.1818 29.9998 69 29.9998ZM30.0342 112.534C30.1187 106.132 32.72 100.022 37.2753 95.5243C41.8305 91.0266 47.9734 88.503 54.375 88.4998H83.625C90.0266 88.503 96.1695 91.0266 100.725 95.5243C105.28 100.022 107.881 106.132 107.966 112.534C97.2743 122.168 83.3923 127.5 69 127.5C54.6078 127.5 40.7258 122.168 30.0342 112.534Z"
                            fill="white" />
                    </svg>
                    {{-- Forms --}}
                    <form class="flex flex-col gap-y-4 " action="">
                        {{-- Names --}}
                        <div class="space-y-2">
                            <h2 class="text-[#FFFFFF]">First Name</h2>
                            <input class="h-12 p-2 focus-within:ring-4 w-80 rounded-xl focus:outline-none" type="text">
                        </div>
                        <div class="space-y-2">
                            <h2 class="text-[#FFFFFF]">Last Name</h2>
                            <input class="h-12 p-2 focus-within:ring-4 w-80 rounded-xl focus:outline-none" type="text">
                        </div>
                        {{-- Date of Birth --}}
                        <div class="space-y-2">
                            <h2 class="text-[#FFFFFF]">Password</h2>
                            <div
                                class="group focus-within:ring-4 bg-[#FFFFFF] py-2 px-5 border-2 border-[#F5F5F5] font-semibold text-sm rounded-xl flex items-center justify-between w-80 h-12">
                                <input class="bg-transparent focus:outline-none" placeholder="MM/DD/YYYY" type="text">
                                {{-- <button> --}}
                                <button type="button">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.625 20.625C2.625 21.0398 2.96016 21.375 3.375 21.375H20.625C21.0398 21.375 21.375 21.0398 21.375 20.625V10.7812H2.625V20.625ZM20.625 4.3125H16.6875V2.8125C16.6875 2.70937 16.6031 2.625 16.5 2.625H15.1875C15.0844 2.625 15 2.70937 15 2.8125V4.3125H9V2.8125C9 2.70937 8.91563 2.625 8.8125 2.625H7.5C7.39687 2.625 7.3125 2.70937 7.3125 2.8125V4.3125H3.375C2.96016 4.3125 2.625 4.64766 2.625 5.0625V9.1875H21.375V5.0625C21.375 4.64766 21.0398 4.3125 20.625 4.3125Z"
                                            fill="#333443" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        {{-- Gender --}}
                        <div class="space-y-2">
                            <h2 class="text-[#FFFFFF]">Gender</h2>
                            <div
                                class="group focus-within:ring-4 bg-[#FFFFFF] py-2 px-5 border-2 border-[#F5F5F5] font-semibold text-sm rounded-xl flex items-center justify-between w-80 h-12">
                                <input class="bg-transparent focus:outline-none" placeholder="Male" type="text">
                                {{-- <button> --}}
                                <button type="button">
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.24701 11.14L2.45101 5.658C1.88501 5.013 2.34501 4 3.20401 4H12.796C12.9883 3.99984 13.1765 4.05509 13.3381 4.15914C13.4998 4.26319 13.628 4.41164 13.7075 4.58669C13.7869 4.76175 13.8142 4.956 13.7861 5.14618C13.758 5.33636 13.6757 5.51441 13.549 5.659L8.75301 11.139C8.65915 11.2464 8.5434 11.3325 8.41352 11.3915C8.28364 11.4505 8.14265 11.481 8.00001 11.481C7.85737 11.481 7.71638 11.4505 7.5865 11.3915C7.45663 11.3325 7.34087 11.2464 7.24701 11.139V11.14Z"
                                            fill="#333443" />
                                    </svg>

                                </button>
                            </div>
                        </div>
                        {{-- Country --}}
                        <div
                            class="group focus-within:ring-4 bg-[#FFFFFF] mt-5 p-2 border-2 border-[#F5F5F5] font-semibold text-sm rounded-xl flex items-center w-80 h-12">
                            {{-- <input class="bg-transparent focus:outline-none" placeholder="Male" type="text"> --}}
                            {{-- <button> --}}
                            <button class="flex items-center gap-x-2" type="button">
                                <img src="{{ asset('images/profile-creation/ph.png') }}" alt="">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="#333443" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <input class="bg-transparent focus:outline-none" placeholder="+63" type="text">
                        </div>
                        {{-- Login --}}
                        <div x-data="{ openVerify: false }" class="flex flex-col text-center mt-10">
                            <button
                                class="flex justify-center items-center py-3 bg-[#FFE600] gap-x-3  rounded-xl w-full hover:ring-4"
                                type="button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </template>
    </div>
@endsection


{{-- @push('scripts')
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
@endpush --}}

<div x-data="{ showDrawer: false }" class="relative overflow-x-auto ">
    {{-- Drawer --}}
    <template x-if="showDrawer">
        <div class="fixed inset-0 z-50 flex w-full overflow-x-hidden text-base bg-smoke-lighter">
            {{-- Drawer --}}
            <div
                class="ml-auto animate__animated animate__fadeInRight animate__faster flex flex-col mt-0 overflow-y-scroll leading-none bg-white w-[574px] h-screen">
                {{-- Top --}}
                <style>
                    ::-webkit-scrollbar {
                        width: 5px;
                    }
                </style>
                <div id="default-carousel" class="relative w-full" data-carousel="static">
                    {{-- Close button --}}
                    <button
                        class="absolute top-5 right-5 z-50 cursor-pointer text-gray-400 bg-[#F8F8F8]/70 hover:bg-[#F8F8F8] duration-150 p-1 rounded-full"
                        @click="showDrawer = false" type="button">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                            viewBox="0 0 32 32">
                            <path fill="currentColor"
                                d="M24 9.4L22.6 8L16 14.6L9.4 8L8 9.4l6.6 6.6L8 22.6L9.4 24l6.6-6.6l6.6 6.6l1.4-1.4l-6.6-6.6L24 9.4z" />
                        </svg>
                    </button>
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden h-[372px]">
                        <!-- Item 1 -->
                        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                            data-carousel-item="">
                            <img src="{{ asset('images/main/transactions/imgSlider.png') }}"
                                class="absolute block w-full -translate-x-1/2 h-full -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                            data-carousel-item="">
                            <img src="{{ asset('images/main/transactions/imgSlider.png') }}"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                            data-carousel-item="">
                            <img src="{{ asset('images/main/transactions/imgSlider.png') }}"
                                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full bg-[#4CAF50]" aria-current="true"
                            aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 6" data-carousel-slide-to="5"></button>
                        <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false"
                            aria-label="Slide 7" data-carousel-slide-to="6"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev="">
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-md sm:w-10 sm:h-10 bg-[#F8F8F8]/70 hover:bg-[#F8F8F8] ">
                            <svg aria-hidden="true" class="w-9 h-9 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next="">
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-md sm:w-10 sm:h-10 bg-[#F8F8F8]/70 hover:bg-[#F8F8F8] ">
                            <svg aria-hidden="true" class="w-9 h-9 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                {{-- Content --}}
                <div class="px-12">
                    <div class="py-4 space-y-2">
                        <h2 class="font-bold">Standard Bedroom</h2>
                        <div class="flex items-center justify-between">
                            <pre class="flex">
                                        <span>P3,000.00 - P4,500.00 / Night</span>
                                    </pre>
                            <div class="flex items-center text-[#4CAF50] gap-x-2">
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.4066 14.347C16.3354 13.1864 15.0354 12.2601 13.5885 11.6266C12.1417 10.9931 10.5794 10.666 8.99992 10.666C7.42046 10.666 5.85812 10.9931 4.41129 11.6266C2.96446 12.2601 1.66449 13.1864 0.593252 14.347C0.427863 14.5299 0.335347 14.7672 0.333252 15.0137V19.0137C0.336758 19.2766 0.44366 19.5276 0.630818 19.7122C0.817976 19.8969 1.07033 20.0004 1.33325 20.0004H16.6666C16.9318 20.0004 17.1862 19.895 17.3737 19.7075C17.5612 19.52 17.6666 19.2656 17.6666 19.0004V15.0004C17.6613 14.7584 17.569 14.5265 17.4066 14.347Z"
                                        fill="#4CAF50" />
                                    <path
                                        d="M8.99992 9.33333C11.5772 9.33333 13.6666 7.244 13.6666 4.66667C13.6666 2.08934 11.5772 0 8.99992 0C6.42259 0 4.33325 2.08934 4.33325 4.66667C4.33325 7.244 6.42259 9.33333 8.99992 9.33333Z"
                                        fill="#4CAF50" />
                                </svg>
                                <pre class="flex">
                                            <span>1-4 Guests | </span><span>Adults, Kids</span>
                                        </pre>
                            </div>
                        </div>
                    </div>
                    {{-- Reservation Details --}}
                    <div class="flex flex-col py-6 border-y border-[#333443]">
                        <div class="flex items-center justify-between font-bold">
                            <h2>Reservation Details</h2>
                            <h2>#STB01230822</h2>
                        </div>
                        <div class="flex items-center text-xs gap-x-6 mt-7">
                            <img class="w-16 h-16" src="{{ asset('images/main/transactions/sampleImg.png') }}"
                                alt="">
                            <div class="flex flex-col gap-y-1">
                                <h2 class="font-bold">Juanita Josefina Manolita Teodora Pacholita</h2>
                                <pre>+63 905 123 456</pre>
                                <h2 class="text-[#4CAF50]">JuanitaJMTP@gmail.com</h2>
                            </div>
                        </div>
                        <div class="flex flex-col text-xs gap-y-3 mt-9">
                            <div class="flex items-center gap-x-2">
                                <div class="font-bold w-20 ">Check-In:</div>
                                <h2>23 August, 2022 | 9:30 am</h2>
                            </div>
                            <div class="flex items-center gap-x-2 w-full ">
                                <div class="font-bold w-20 ">Check-Out:</div>
                                <h2>23 August, 2022 | 9:30 am</h2>
                            </div>
                            <div class="flex items-center gap-x-2 w-full ">
                                <div class="font-bold w-20 ">Guests:</div>
                                <span>1 Adult</span>
                            </div>
                            <div class="flex items-center gap-x-2 w-full ">
                                <div class="font-bold w-20 ">Nights:</div>
                                <span>3 Nights</span>
                            </div>
                            <div class="flex items-center gap-x-2 w-full ">
                                <div class="font-bold w-20 ">Room No:</div>
                                <span>702</span>
                            </div>
                            <div class="flex items-center gap-x-2 w-full ">
                                <div class="font-bold w-20 ">Extras:</div>
                                <span>1 Ironing Board</span>
                            </div>
                        </div>
                    </div>
                    {{-- Total --}}
                    <div class="font-bold text-xs py-5 space-y-4 w-full">
                        <div class="flex justify-between ">
                            <h2>Sub Total:</h2>
                            <h2>P4,500.00</h2>
                        </div>
                        <div class="flex justify-between ">
                            <h2>VAT:</h2>
                            <h2>P540.00</h2>
                        </div>
                        <div class="flex justify-between ">
                            <h2>Other Fees:</h2>
                            <h2>P0.00</h2>
                        </div>
                        <div class="flex justify-between text-base py-5 ">
                            <h2>Total:</h2>
                            <h2>P5,040.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>


    <table class="w-full text-xs text-left ">
        <thead class="text-xs font-bold border-b border-[#A7A7A7]">
            <tr>
                <th scope="col" class="pl-4 py-3">
                    Booking ID
                </th>
                <th scope="col" class="px-0 py-3 ">
                    Name
                </th>
                <th scope="col" class="px-0 py-3 ">
                    Guests
                </th>
                <th scope="col" class="py-3 pl-0 ">
                    Room Type
                </th>
                <th scope="col" class="px-0 py-3">
                    Extras
                </th>
                <th scope="col" class="py-3 pl-0">
                    Date
                </th>
                <th scope="col" class="px-0 py-3 ">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>

            @for ($i = 0; $i < 8; $i++)
                {{-- 1 --}}
                <tr @click="showDrawer = true" class="bg-[#FFFFFF] odd:bg-[#4CAF50]/10 cursor-pointer">
                    <th scope="row" class="pl-4 py-4 font-medium whitespace-nowrap ">
                        STB01230822
                    </th>
                    <td class="px-0 py-4">
                        Juanito Manolito Pacholito
                    </td>
                    <td class="px-4 py-4 ">
                        1
                    </td>
                    <td class="py-4 pl-0 ">
                        Deluxe
                    </td>
                    <td class="px-0 py-4">
                        Ironing Board
                    </td>
                    <td class="py-4 pl-0 bg-gred-200">
                        23 Aug 2022
                    </td>
                    <td class="px-0 py-4 ">
                        Check-In
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>

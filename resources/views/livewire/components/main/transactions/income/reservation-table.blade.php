<div x-data="{ showDrawer: false }" class="relative overflow-x-auto ">
    {{-- Drawer --}}
    {{-- <template x-if="showDrawer"> --}}
    <div x-show="showDrawer" class="fixed inset-0 z-50 flex w-full overflow-x-hidden text-base bg-smoke-lighter">
        {{-- Drawer --}}
        <div
            class="ml-auto animate__animated animate__fadeInRight animate__faster flex flex-col mt-0 overflow-y-scroll leading-none bg-white w-[574px] h-screen">
            {{-- Top --}}
            <style>
                ::-webkit-scrollbar {
                    width: 5px;
                }
            </style>
            {{-- Close button --}}
            <button
                class="absolute top-5 mr-4 right-0 z-50 cursor-pointer text-gray-400 bg-[#F8F8F8]/70 hover:bg-[#F8F8F8] duration-150 p-1 rounded-full"
                @click="showDrawer = false" type="button">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 32 32">
                    <path fill="currentColor"
                        d="M24 9.4L22.6 8L16 14.6L9.4 8L8 9.4l6.6 6.6L8 22.6L9.4 24l6.6-6.6l6.6 6.6l1.4-1.4l-6.6-6.6L24 9.4z" />
                </svg>
            </button>
            <!-- Carousel wrapper -->
            <div class="w-[574px] h-[372px]">
                <div class="swiper mySwiper w-[574px] h-[372px] ">
                    <div class="swiper-wrapper">
                        @for ($k = 0; $k < 7; $k++)
                            <div class="swiper-slide">
                                <img src="{{ asset('images/main/transactions/imgSlider.png') }}" alt="">
                            </div>
                        @endfor
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
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
                            <div class="w-20 font-bold ">Check-In:</div>
                            <h2>23 August, 2022 | 9:30 am</h2>
                        </div>
                        <div class="flex items-center w-full gap-x-2 ">
                            <div class="w-20 font-bold ">Check-Out:</div>
                            <h2>23 August, 2022 | 9:30 am</h2>
                        </div>
                        <div class="flex items-center w-full gap-x-2 ">
                            <div class="w-20 font-bold ">Guests:</div>
                            <span>1 Adult</span>
                        </div>
                        <div class="flex items-center w-full gap-x-2 ">
                            <div class="w-20 font-bold ">Nights:</div>
                            <span>3 Nights</span>
                        </div>
                        <div class="flex items-center w-full gap-x-2 ">
                            <div class="w-20 font-bold ">Room No:</div>
                            <span>702</span>
                        </div>
                        <div class="flex items-center w-full gap-x-2 ">
                            <div class="w-20 font-bold ">Extras:</div>
                            <span>1 Ironing Board</span>
                        </div>
                    </div>
                </div>
                {{-- Total --}}
                <div class="w-full py-5 space-y-4 text-xs font-bold">
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
                    <div class="flex justify-between py-5 text-base ">
                        <h2>Total:</h2>
                        <h2>P5,040.00</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </template> --}}


    <table class="w-full text-xs text-left ">
        <thead class="text-xs font-bold border-b border-[#A7A7A7]">
            <tr>
                <th scope="col" class="py-3 pl-4">
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
                    <th scope="row" class="py-4 pl-4 font-medium whitespace-nowrap ">
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
@endpush

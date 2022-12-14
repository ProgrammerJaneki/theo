@extends('livewire.layouts.theo-base')
@section('main-theo')
            {{-- Upper Part --}}
            <div class="flex flex-col pt-7 gap-y-6">
                <h1 class="font-bold text-[#4CAF50]">Check-in</h1>
                <div class="flex items-center gap-x-10">
                    {{-- 1 --}}
                    <div class="flex items-center gap-x-4">
                        <div class="bg-[#333443] text-[#FFFFFF] flex items-center justify-center w-12 h-12 rounded-2xl">
                            <span class="font-bold">1</span>
                        </div>
                        <h2 class="font-bold">Date & Room</h2>
                    </div>
                    {{-- 2 --}}
                    <div class="flex items-center gap-x-4">
                        <div class="bg-[#D9D9D9]  flex items-center justify-center w-12 h-12 rounded-2xl">
                            <span class="font-bold">2</span>
                        </div>
                        <h2 class="font-bold">Extras</h2>
                    </div>
                    {{-- 3 --}}
                    <div class="flex items-center gap-x-4">
                        <div class="bg-[#D9D9D9]  flex items-center justify-center w-12 h-12 rounded-2xl">
                            <span class="font-bold">3</span>
                        </div>
                        <h2 class="font-bold">Payment</h2>
                    </div>
                    {{-- 4 --}}
                    <div class="flex items-center gap-x-4">
                        <div class="bg-[#D9D9D9]  flex items-center justify-center w-12 h-12 rounded-2xl">
                            <span class="font-bold">4</span>
                        </div>
                        <h2 class="font-bold">Confirmation</h2>
                    </div>
                </div>
            </div>
            {{-- Content --}}
            <div class="flex items-center gap-x-11">
                {{-- Left --}}
                <div x-data="{ roomType: false }" class="flex flex-col">
                    {{-- Upper --}}
                    <div class="flex items-center text-xs font-bold mt-11 gap-x-4">
                        <h2 class="">Room Type:</h2>
                      <div x-data="select" class="relative h-6 leading-none w-36" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                            <span class="font-bold" x-text="(option == '') ? 'Standard' : option"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul
                                class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('VIP')">
                                    VIP
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Option')">
                                    Option
                                </li>
                            </ul>
                        </template>
                    </div>
                    </div>
                    <div class="flex items-center mt-8 gap-x-6">
                        <img class="w-[209px] h-[154px]" src="{{ asset('images/main/dashboard/bed.png') }}" alt="bed">
                        <div class="flex flex-col">
                            <h1 class="text-2xl font-bold">Standard Bedroom</h1>
                            <div class="flex items-center mt-3 gap-x-2">
                                {{-- Star --}}
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.8192 4.55485L15.1729 5.19715C15.5334 5.24865 15.8364 5.50315 15.9515 5.85156C16.0667 6.20301 15.9727 6.58475 15.7122 6.8453L12.5552 9.94166L13.3005 14.3832C13.3611 14.7468 13.2127 15.1164 12.9097 15.3315C12.6098 15.5466 12.2129 15.5739 11.8887 15.4012L7.99856 13.3258L4.11146 15.4012C3.78425 15.5739 3.38736 15.5466 3.08742 15.3315C2.78748 15.1164 2.63599 14.7468 2.69962 14.3832L3.44492 9.94166L0.287369 6.8453C0.0265114 6.58475 -0.0661975 6.20301 0.0483252 5.85156C0.162545 5.50315 0.464606 5.24865 0.827867 5.19715L5.17791 4.55485L7.12904 0.545649C7.28961 0.211897 7.62894 0 7.99856 0C8.37121 0 8.71054 0.211897 8.87111 0.545649L10.8192 4.55485Z"
                                            fill="#FFC702" />
                                    </svg>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.8192 4.55485L15.1729 5.19715C15.5334 5.24865 15.8364 5.50315 15.9515 5.85156C16.0667 6.20301 15.9727 6.58475 15.7122 6.8453L12.5552 9.94166L13.3005 14.3832C13.3611 14.7468 13.2127 15.1164 12.9097 15.3315C12.6098 15.5466 12.2129 15.5739 11.8887 15.4012L7.99856 13.3258L4.11146 15.4012C3.78425 15.5739 3.38736 15.5466 3.08742 15.3315C2.78748 15.1164 2.63599 14.7468 2.69962 14.3832L3.44492 9.94166L0.287369 6.8453C0.0265114 6.58475 -0.0661975 6.20301 0.0483252 5.85156C0.162545 5.50315 0.464606 5.24865 0.827867 5.19715L5.17791 4.55485L7.12904 0.545649C7.28961 0.211897 7.62894 0 7.99856 0C8.37121 0 8.71054 0.211897 8.87111 0.545649L10.8192 4.55485Z"
                                            fill="#FFC702" />
                                    </svg>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.8192 4.55485L15.1729 5.19715C15.5334 5.24865 15.8364 5.50315 15.9515 5.85156C16.0667 6.20301 15.9727 6.58475 15.7122 6.8453L12.5552 9.94166L13.3005 14.3832C13.3611 14.7468 13.2127 15.1164 12.9097 15.3315C12.6098 15.5466 12.2129 15.5739 11.8887 15.4012L7.99856 13.3258L4.11146 15.4012C3.78425 15.5739 3.38736 15.5466 3.08742 15.3315C2.78748 15.1164 2.63599 14.7468 2.69962 14.3832L3.44492 9.94166L0.287369 6.8453C0.0265114 6.58475 -0.0661975 6.20301 0.0483252 5.85156C0.162545 5.50315 0.464606 5.24865 0.827867 5.19715L5.17791 4.55485L7.12904 0.545649C7.28961 0.211897 7.62894 0 7.99856 0C8.37121 0 8.71054 0.211897 8.87111 0.545649L10.8192 4.55485Z"
                                            fill="#FFC702" />
                                    </svg>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.8192 4.55485L15.1729 5.19715C15.5334 5.24865 15.8364 5.50315 15.9515 5.85156C16.0667 6.20301 15.9727 6.58475 15.7122 6.8453L12.5552 9.94166L13.3005 14.3832C13.3611 14.7468 13.2127 15.1164 12.9097 15.3315C12.6098 15.5466 12.2129 15.5739 11.8887 15.4012L7.99856 13.3258L4.11146 15.4012C3.78425 15.5739 3.38736 15.5466 3.08742 15.3315C2.78748 15.1164 2.63599 14.7468 2.69962 14.3832L3.44492 9.94166L0.287369 6.8453C0.0265114 6.58475 -0.0661975 6.20301 0.0483252 5.85156C0.162545 5.50315 0.464606 5.24865 0.827867 5.19715L5.17791 4.55485L7.12904 0.545649C7.28961 0.211897 7.62894 0 7.99856 0C8.37121 0 8.71054 0.211897 8.87111 0.545649L10.8192 4.55485Z"
                                            fill="#FFC702" />
                                    </svg>
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.8192 4.55485L15.1729 5.19715C15.5334 5.24865 15.8364 5.50315 15.9515 5.85156C16.0667 6.20301 15.9727 6.58475 15.7122 6.8453L12.5552 9.94166L13.3005 14.3832C13.3611 14.7468 13.2127 15.1164 12.9097 15.3315C12.6098 15.5466 12.2129 15.5739 11.8887 15.4012L7.99856 13.3258L4.11146 15.4012C3.78425 15.5739 3.38736 15.5466 3.08742 15.3315C2.78748 15.1164 2.63599 14.7468 2.69962 14.3832L3.44492 9.94166L0.287369 6.8453C0.0265114 6.58475 -0.0661975 6.20301 0.0483252 5.85156C0.162545 5.50315 0.464606 5.24865 0.827867 5.19715L5.17791 4.55485L7.12904 0.545649C7.28961 0.211897 7.62894 0 7.99856 0C8.37121 0 8.71054 0.211897 8.87111 0.545649L10.8192 4.55485Z"
                                            fill="#FFC702" />
                                    </svg>
                                </div>
                                <span class="font-bold text-[#4CAF50]">5.0</span>
                            </div>
                            <div class="text-xs mt-5 max-w-[380px]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum, a ac sed molestie. Sed
                                est ultrices et dolor ac sit. Metus, lectus euismod in pharetra bibendum. Semper non non
                                egestas nisl.
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-5 gap-y-5">
                        <h1 class="font-bold">Amenties</h1>
                        <div class="flex flex-wrap items-center gap-x-11">
                            {{-- 1 --}}
                            <div class="flex flex-col gap-y-4">
                                {{-- TV --}}
                                <div class="flex items-center gap-x-1">
                                    <svg width="24" height="18" viewBox="0 0 24 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.75 17.25C3.75 17.0511 3.82902 16.8603 3.96967 16.7197C4.11032 16.579 4.30109 16.5 4.5 16.5H19.5C19.6989 16.5 19.8897 16.579 20.0303 16.7197C20.171 16.8603 20.25 17.0511 20.25 17.25C20.25 17.4489 20.171 17.6397 20.0303 17.7803C19.8897 17.921 19.6989 18 19.5 18H4.5C4.30109 18 4.11032 17.921 3.96967 17.7803C3.82902 17.6397 3.75 17.4489 3.75 17.25ZM3 0H21C21 0 24 0 24 3V12C24 12 24 15 21 15H3C3 15 0 15 0 12V3C0 3 0 0 3 0Z"
                                            fill="#333443" />
                                    </svg>
                                    <span class="text-xs">Smart TV</span>
                                </div>
                                {{-- Lights --}}
                                <div class="flex items-center gap-x-1 ">
                                    <svg width="16" height="22" viewBox="0 0 16 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 21H10H6ZM1 8C1 6.14348 1.7375 4.36301 3.05025 3.05025C4.36301 1.7375 6.14349 1 8 1C9.85652 1 11.637 1.7375 12.9497 3.05025C14.2625 4.36301 15 6.14348 15 8C15.0007 9.12707 14.7281 10.2375 14.2056 11.2362C13.6831 12.2348 12.9263 13.0919 12 13.734L11.458 16.3C11.3862 16.773 11.1473 17.2046 10.7846 17.5165C10.4219 17.8284 9.95938 17.9999 9.481 18H6.519C6.04062 17.9999 5.57811 17.8284 5.21539 17.5165C4.85267 17.2046 4.61376 16.773 4.542 16.3L4 13.745C3.07341 13.1006 2.31657 12.2415 1.79415 11.2411C1.27173 10.2407 0.999256 9.12862 1 8ZM4 14H12H4Z"
                                            fill="#333443" />
                                        <path
                                            d="M6 21H10M4 14H12M1 8C1 6.14348 1.7375 4.36301 3.05025 3.05025C4.36301 1.7375 6.14349 1 8 1C9.85652 1 11.637 1.7375 12.9497 3.05025C14.2625 4.36301 15 6.14348 15 8C15.0007 9.12707 14.7281 10.2375 14.2056 11.2362C13.6831 12.2348 12.9263 13.0919 12 13.734L11.458 16.3C11.3862 16.773 11.1473 17.2046 10.7846 17.5165C10.4219 17.8284 9.95938 17.9999 9.481 18H6.519C6.04062 17.9999 5.57811 17.8284 5.21539 17.5165C4.85267 17.2046 4.61376 16.773 4.542 16.3L4 13.745C3.07341 13.1006 2.31657 12.2415 1.79415 11.2411C1.27173 10.2407 0.999256 9.12862 1 8V8Z"
                                            stroke="#333443" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span class="text-xs">Smart Lights </span>
                                </div>
                            </div>
                            {{-- 2 --}}
                            <div class="flex flex-col gap-y-4">
                                {{-- Mini Bar --}}
                                <div class="flex items-center gap-x-3">
                                    <svg width="6" height="20" viewBox="0 0 6 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 20C0.734784 20 0.48043 19.8946 0.292893 19.7071C0.105357 19.5196 0 19.2652 0 19V9C0 7 1 5.25 2 5V0.5C2 0.367392 2.05268 0.240215 2.14645 0.146447C2.24021 0.0526785 2.36739 0 2.5 0H3.5C3.63261 0 3.75979 0.0526785 3.85355 0.146447C3.94732 0.240215 4 0.367392 4 0.5V5C5 5.25 6 7 6 9V19C6 19.2652 5.89464 19.5196 5.70711 19.7071C5.51957 19.8946 5.26522 20 5 20H1Z"
                                            fill="#333443" />
                                    </svg>
                                    <span class="text-xs">Mini Bar</span>
                                </div>
                                {{-- Large Closet --}}
                                <div class="flex items-center gap-x-3">
                                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2V17C0 18.1 0.9 19 2 19V20H4V19H7.5V0H2C0.9 0 0 0.9 0 2ZM4 8H6V11H4V8ZM14 0H8.5V19H12V20H14V19C15.1 19 16 18.1 16 17V2C16 0.9 15.1 0 14 0ZM12 11H10V8H12V11Z"
                                            fill="#333443" />
                                    </svg>

                                    <span class="text-xs">Mini Bar</span>
                                </div>
                            </div>
                            {{-- 3 --}}
                            <div class="flex flex-col gap-y-4">
                                {{-- Free Wifi --}}
                                <div class="flex items-center gap-x-3">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7841 6.70809C16.39 7.32132 16.8973 8.02465 17.2881 8.79309C17.3995 9.02808 17.4151 9.29726 17.3314 9.54352C17.2477 9.78978 17.0714 9.99375 16.8398 10.1121C16.6082 10.2305 16.3396 10.254 16.091 10.1777C15.8423 10.1013 15.6332 9.93108 15.5081 9.70309C15.2121 9.1211 14.8283 8.58819 14.3701 8.12309C13.6855 7.4383 12.8484 6.92546 11.9274 6.62661C11.0064 6.32776 10.0277 6.25141 9.07154 6.40382C8.11534 6.55623 7.20887 6.93305 6.42641 7.50341C5.64395 8.07376 5.00779 8.82142 4.57005 9.68509C4.4469 9.91567 4.23835 10.0889 3.98907 10.1676C3.73979 10.2463 3.46961 10.2242 3.23638 10.1062C3.00314 9.98813 2.82541 9.78344 2.74124 9.53596C2.65707 9.28847 2.67316 9.01787 2.78605 8.78209C3.36646 7.63646 4.21008 6.64466 5.24777 5.88799C6.28546 5.13132 7.48769 4.63131 8.75592 4.42895C10.0241 4.22659 11.3223 4.32763 12.5439 4.72379C13.7656 5.11996 14.8759 5.79997 15.7841 6.70809ZM13.7351 9.70009C14.1951 10.1601 14.5731 10.7241 14.8371 11.3241C14.9435 11.567 14.9492 11.8423 14.8527 12.0894C14.7562 12.3365 14.5655 12.5351 14.3226 12.6416C14.0796 12.7481 13.8043 12.7537 13.5572 12.6572C13.3102 12.5607 13.1115 12.37 13.0051 12.1271C12.8409 11.7504 12.6091 11.4071 12.3211 11.1141C11.7148 10.5078 10.8925 10.1672 10.0351 10.1672C9.17764 10.1672 8.35535 10.5078 7.74905 11.1141C7.46481 11.4027 7.23691 11.7419 7.07705 12.1141C7.02544 12.2359 6.95015 12.3463 6.85556 12.4389C6.76097 12.5314 6.64895 12.6043 6.526 12.6532C6.40305 12.7021 6.27162 12.7261 6.13931 12.7239C6.007 12.7217 5.87645 12.6932 5.75523 12.6401C5.63401 12.587 5.52452 12.5104 5.43312 12.4148C5.34172 12.3191 5.27022 12.2062 5.22277 12.0827C5.17531 11.9591 5.15285 11.8274 5.15667 11.6951C5.1605 11.5629 5.19054 11.4327 5.24505 11.3121C5.50476 10.7115 5.87444 10.1648 6.33505 9.70009C7.31641 8.71889 8.64732 8.16767 10.0351 8.16767C11.4228 8.16767 12.7537 8.71889 13.7351 9.70009ZM18.4191 4.29909C18.9271 4.80709 19.4061 5.38609 19.8231 5.99009C19.9715 6.20842 20.0276 6.4766 19.9791 6.73614C19.9306 6.99568 19.7815 7.2255 19.5642 7.37547C19.3469 7.52544 19.0791 7.58339 18.8192 7.53667C18.5594 7.48995 18.3285 7.34236 18.1771 7.12609C17.8271 6.62009 17.4251 6.13309 17.0051 5.71309C13.1331 1.84109 6.85505 1.84109 2.98205 5.71309C2.58305 6.11209 2.18505 6.59909 1.82205 7.12309C1.67088 7.3411 1.43929 7.49013 1.17824 7.53739C0.917192 7.58465 0.64806 7.52627 0.430052 7.37509C0.212044 7.22392 0.0630185 6.99234 0.0157594 6.73128C-0.0314998 6.47023 0.0268787 6.2011 0.178052 5.98309C0.606052 5.36509 1.07905 4.78809 1.56805 4.29909C6.22105 -0.354906 13.7661 -0.354906 18.4191 4.29909ZM11.0621 12.4411C11.3436 12.7226 11.5017 13.1045 11.5017 13.5026C11.5017 13.9007 11.3436 14.2826 11.0621 14.5641C10.7805 14.8456 10.3987 15.0038 10.0006 15.0038C9.60241 15.0038 9.22058 14.8456 8.93905 14.5641C8.65753 14.2826 8.49936 13.9007 8.49936 13.5026C8.49936 13.1045 8.65753 12.7226 8.93905 12.4411C9.22058 12.1596 9.60241 12.0014 10.0006 12.0014C10.3987 12.0014 10.7805 12.1596 11.0621 12.4411Z"
                                            fill="#333443" />
                                    </svg>
                                    <span class="text-xs">Free Wifi</span>
                                </div>
                                {{-- A/C --}}
                                <div class="flex items-center gap-x-3">
                                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 1H2C1.44772 1 1 1.44772 1 2V10C1 10.5523 1.44772 11 2 11H20C20.5523 11 21 10.5523 21 10V2C21 1.44772 20.5523 1 20 1Z"
                                            fill="#333443" stroke="#333443" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M5 7H17V11H5V7Z" fill="#333443" stroke="#333443" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 4H17ZM11 14V17ZM7 15V16ZM15 15V16Z" fill="#333443" />
                                        <path d="M15 4H17M11 14V17M7 15V16M15 15V16" stroke="#333443" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span class="text-xs">A/C</span>
                                </div>
                            </div>
                            {{-- 4 --}}
                            <div class="flex flex-col gap-y-4">
                                {{-- Curtains --}}
                                <div class="flex items-center gap-x-3">
                                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 2H0V0H22V2ZM1 21H5C5 18 3 16 3 16C9 12 10 3 10 3H1V21ZM21 3H12C12 3 13 12 19 16C19 16 17 18 17 21H21V3Z"
                                            fill="#333443" />
                                    </svg>
                                    <span class="text-xs">Black-Out Curtains</span>
                                </div>
                                {{-- Safe --}}
                                <div class="flex items-center gap-x-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.75 0C3.15326 0 2.58097 0.237053 2.15901 0.65901C1.73705 1.08097 1.5 1.65326 1.5 2.25V4.5H0.75C0.551088 4.5 0.360322 4.57902 0.21967 4.71967C0.0790176 4.86032 0 5.05109 0 5.25C0 5.44891 0.0790176 5.63968 0.21967 5.78033C0.360322 5.92098 0.551088 6 0.75 6H1.5V11.25H0.75C0.551088 11.25 0.360322 11.329 0.21967 11.4697C0.0790176 11.6103 0 11.8011 0 12C0 12.1989 0.0790176 12.3897 0.21967 12.5303C0.360322 12.671 0.551088 12.75 0.75 12.75H1.5V18H0.75C0.551088 18 0.360322 18.079 0.21967 18.2197C0.0790176 18.3603 0 18.5511 0 18.75C0 18.9489 0.0790176 19.1397 0.21967 19.2803C0.360322 19.421 0.551088 19.5 0.75 19.5H1.5V21.75C1.5 22.3467 1.73705 22.919 2.15901 23.341C2.58097 23.7629 3.15326 24 3.75 24H21.75C22.3467 24 22.919 23.7629 23.341 23.341C23.7629 22.919 24 22.3467 24 21.75V2.25C24 1.65326 23.7629 1.08097 23.341 0.65901C22.919 0.237053 22.3467 0 21.75 0L3.75 0ZM8.304 6.696L9.939 8.331C10.7008 7.79035 11.6118 7.49993 12.546 7.49993C13.4802 7.49993 14.3912 7.79035 15.153 8.331L16.788 6.696C16.9288 6.55537 17.1198 6.47644 17.3188 6.47658C17.5178 6.47672 17.7086 6.55592 17.8492 6.69675C17.9899 6.83758 18.0688 7.02851 18.0687 7.22753C18.0685 7.42655 17.9893 7.61737 17.8485 7.758L16.2135 9.393C17.3235 10.9485 17.3235 13.053 16.2135 14.607L17.8485 16.242C17.9893 16.3826 18.0685 16.5734 18.0687 16.7725C18.0688 16.9715 17.9899 17.1624 17.8492 17.3032C17.7086 17.4441 17.5178 17.5233 17.3188 17.5234C17.1198 17.5236 16.9288 17.4446 16.788 17.304L15.153 15.669C14.3913 16.2099 13.4802 16.5004 12.546 16.5004C11.6118 16.5004 10.7007 16.2099 9.939 15.669L8.304 17.304C8.23427 17.3737 8.15148 17.429 8.06037 17.4668C7.96927 17.5045 7.87162 17.5239 7.773 17.5239C7.67438 17.5239 7.57673 17.5045 7.48562 17.4668C7.39452 17.429 7.31173 17.3737 7.242 17.304C7.17227 17.2343 7.11695 17.1515 7.07922 17.0604C7.04148 16.9693 7.02205 16.8716 7.02205 16.773C7.02205 16.6744 7.04148 16.5767 7.07922 16.4856C7.11695 16.3945 7.17227 16.3117 7.242 16.242L8.877 14.607C8.33636 13.8452 8.04593 12.9342 8.04593 12C8.04593 11.0658 8.33636 10.1548 8.877 9.393L7.242 7.758C7.10117 7.61717 7.02205 7.42616 7.02205 7.227C7.02205 7.02784 7.10117 6.83683 7.242 6.696C7.38283 6.55517 7.57384 6.47605 7.773 6.47605C7.97216 6.47605 8.16317 6.55517 8.304 6.696V6.696ZM21 9.75V14.25C21 14.4489 20.921 14.6397 20.7803 14.7803C20.6397 14.921 20.4489 15 20.25 15C20.0511 15 19.8603 14.921 19.7197 14.7803C19.579 14.6397 19.5 14.4489 19.5 14.25V9.75C19.5 9.55109 19.579 9.36032 19.7197 9.21967C19.8603 9.07902 20.0511 9 20.25 9C20.4489 9 20.6397 9.07902 20.7803 9.21967C20.921 9.36032 21 9.55109 21 9.75V9.75Z"
                                            fill="#333443" />
                                    </svg>
                                    <span class="text-xs">Security Safe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Calendar --}}
                    <livewire:components.main.dashboard.check-in.check-in-calendar />
                </div>
                {{-- Right | Change to 708px later --}}
                <div class="border border-[#AAAAAA] flex flex-col p-6 rounded-xl w-[339px] h-[745px]">
                    <h1 class="font-bold">Reservation Summary</h1>
                    {{-- Reservation Info --}}
                    <div class="flex flex-col mt-5 text-xs">
                        <div class="flex items-center justify-between ">
                            <div class="flex flex-col space-y-2">
                                <h2>Check-In</h2>
                                <div class="font-bold">
                                    <h2>Tue, 23 Aug, 2022</h2>
                                    <h2>From 9:00 am</h2>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2 ">
                                <h2>Check-Out</h2>
                                <div class="font-bold">
                                    <h2>Sat, 27 Aug, 2022</h2>
                                    <h2>By 6:00 pm</h2>
                                </div>
                            </div>
                        </div>
                        {{-- Total length of stay --}}
                        <div class="space-y-1 mt-9">
                            <h2>Total length of stay</h2>
                            <h2 class="font-bold">5 Nights</h2>
                        </div>
                        {{-- Room Type --}}
                        <div class="flex items-center justify-between mt-6">
                            <div class="space-y-2">
                                <h2>Room Type</h2>
                                <h2 class="font-bold">Standard Bedroom</h2>
                            </div>
                            <div class="space-y-2 w-full max-w-[104px]">
                                <h2>Extras</h2>
                                <h2 class="font-bold">None</h2>
                            </div>
                        </div>
                        {{-- Guests --}}
                        <div class="space-y-1 mt-9">
                            <h2>Guests</h2>
                            <h2 class="font-bold">1 Adult, 2 Children</h2>
                        </div>
                    </div>
                    {{-- Price Info --}}
                    <div class="mt-12 space-y-6 text-xs ">
                        <h1 class="font-bold">Price Summary</h1>
                        <div>
                            <div class="flex items-center justify-between">
                                <h2>Room</h2>
                                <h2 class="font-bold">P,300.00</h2>
                            </div>
                            <div class="flex items-center justify-between">
                                <h2>Nights: <span>5 nights</span> </h2>
                                <h2 class="font-bold">P15,000.00</h2>
                            </div>
                            <div class="flex items-center justify-between">
                                <h2>VAT: <span>12%</span> </h2>
                                <h2 class="font-bold">P1,800.00</h2>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <h2 class="text-[#4CAF50] font-bold">TOTAL AMOUNT</h2>
                            <h2 class="font-bold">P19,800.00</h2>
                        </div>
                    </div>
                    <button
                        class="bg-[#4CAF50] bottom-0 py-4 text-xs mb-0 mt-auto text-[#FFFFFF] hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear rounded-xl w-full">
                        Confirm Booking
                    </button>
                </div>
            </div>
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

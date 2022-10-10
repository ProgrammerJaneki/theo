@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="w-full px-5 py-3 ">
        <div class="px-5 bg-white rounded-md">
            {{-- Upper Part --}}
            <div class="flex items-center justify-between w-full pt-5 pb-7 gap-x-2">
                {{-- Booked --}}
                <a class="flex justify-center items-center gap-x-1 border-4 border-[#59C3FF] rounded-[20px] w-full max-w-[240px] h-[121px]"
                    href="{{ route('login-password') }}">
                    {{-- 1 --}}
                    <svg class="w-14 h-14" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.3333 4.83325V53.1666H9.66665V43.4999H4.83331V38.6666H9.66665V31.4166H4.83331V26.5833H9.66665V19.3333H4.83331V14.4999H9.66665V4.83325H19.3333ZM48.3454 4.83325C51.0086 4.83325 53.1666 7.00342 53.1666 9.64242V48.3574C53.1666 51.0133 51.0086 53.1666 48.3454 53.1666H24.1666V4.83325H48.3454Z"
                            fill="#59C3FF" />
                    </svg>
                    {{-- 2 --}}
                    <div class="flex flex-col whitespace-nowrap">
                        <h2>Total Booked</h2>
                        <h1 class="text-4xl font-bold">399</h1>
                        <span class="font-bold text-xs text-[#A7A7A7]">Last 7 days</span>
                    </div>
                </a>
                {{-- Checked in --}}
                <a class="flex justify-center items-center gap-x-1 border-4 border-[#4CAF50] rounded-[20px] w-full max-w-[240px] h-[121px]"
                    href="{{ route('login-password') }}">
                    {{-- 1 --}}
                    <svg class="w-14 h-14" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 28H3.5V21H21V14L31.5 24.5L21 35V28ZM56 0V45.5L35 56V45.5H14V31.5H17.5V42H35V10.5L49 3.5H17.5V17.5H14V0H56Z"
                            fill="#4CAF50" />
                    </svg>

                    {{-- 2 --}}
                    <div class="flex flex-col whitespace-nowrap">
                        <h2>Checked In</h2>
                        <h1 class="text-4xl font-bold">248</h1>
                        <span class="font-bold text-xs text-[#A7A7A7]">Last 7 days</span>
                    </div>
                </a>
                {{-- Checked Out --}}
                <a class="flex justify-center items-center gap-x-1 border-4 border-[#EC671C] rounded-[20px] w-full max-w-[240px] h-[121px]"
                    href="{{ route('login-password') }}">
                    {{-- 1 --}}
                    <svg class="w-14 h-14" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_296_2072)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M56 45.5V0H14V17.5H17.5V3.5H49L35 10.5V42H17.5V31.5H14V45.5H35V56L56 45.5Z"
                                fill="#EC671C" />
                            <path d="M10.5 14V21H28V28H10.5V35L0 24.5L10.5 14Z" fill="#EC671C" />
                        </g>
                        <defs>
                            <clipPath id="clip0_296_2072">
                                <rect width="56" height="56" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    {{-- 2 --}}
                    <div class="flex flex-col whitespace-nowrap">
                        <h2>Checked Out</h2>
                        <h1 class="text-4xl font-bold">33</h1>
                        <span class="font-bold text-xs text-[#A7A7A7]">Last 7 days</span>
                    </div>
                </a>
                {{-- Cancel --}}
                <a class="flex justify-center items-center gap-x-1 border-4 border-[#EC671C] rounded-[20px] w-full max-w-[240px] h-[121px]"
                    href="{{ route('login-password') }}">
                    {{-- 1 --}}
                    <svg class="w-14 h-14" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.75 49H21.8995C19.0494 45.5546 17.4932 41.2214 17.5 36.75C17.5 30.24 20.7305 24.4825 25.6795 21H7V40.25C7 42.5706 7.92187 44.7962 9.56282 46.4372C11.2038 48.0781 13.4294 49 15.75 49ZM49 17.5H7V15.75C7 13.4294 7.92187 11.2038 9.56282 9.56282C11.2038 7.92187 13.4294 7 15.75 7H40.25C42.5706 7 44.7962 7.92187 46.4372 9.56282C48.0781 11.2038 49 13.4294 49 15.75V17.5ZM52.5 36.75C52.5 38.8183 52.0926 40.8664 51.3011 42.7773C50.5096 44.6881 49.3495 46.4244 47.8869 47.8869C46.4244 49.3495 44.6881 50.5096 42.7773 51.3011C40.8664 52.0926 38.8183 52.5 36.75 52.5C34.6817 52.5 32.6336 52.0926 30.7227 51.3011C28.8119 50.5096 27.0756 49.3495 25.6131 47.8869C24.1505 46.4244 22.9904 44.6881 22.1989 42.7773C21.4074 40.8664 21 38.8183 21 36.75C21 32.5728 22.6594 28.5668 25.6131 25.6131C28.5668 22.6594 32.5728 21 36.75 21C40.9272 21 44.9332 22.6594 47.8869 25.6131C50.8406 28.5668 52.5 32.5728 52.5 36.75ZM43.239 32.739C43.4017 32.5763 43.5308 32.3831 43.6188 32.1705C43.7069 31.958 43.7522 31.7301 43.7522 31.5C43.7522 31.2699 43.7069 31.042 43.6188 30.8295C43.5308 30.6169 43.4017 30.4237 43.239 30.261C43.0763 30.0983 42.8831 29.9692 42.6705 29.8812C42.458 29.7931 42.2301 29.7478 42 29.7478C41.7699 29.7478 41.542 29.7931 41.3295 29.8812C41.1169 29.9692 40.9237 30.0983 40.761 30.261L36.75 34.2755L32.739 30.261C32.4104 29.9324 31.9647 29.7478 31.5 29.7478C31.0353 29.7478 30.5896 29.9324 30.261 30.261C29.9324 30.5896 29.7478 31.0353 29.7478 31.5C29.7478 31.9647 29.9324 32.4104 30.261 32.739L34.2755 36.75L30.261 40.761C29.9324 41.0896 29.7478 41.5353 29.7478 42C29.7478 42.4647 29.9324 42.9104 30.261 43.239C30.5896 43.5676 31.0353 43.7522 31.5 43.7522C31.9647 43.7522 32.4104 43.5676 32.739 43.239L36.75 39.2245L40.761 43.239C41.0896 43.5676 41.5353 43.7522 42 43.7522C42.4647 43.7522 42.9104 43.5676 43.239 43.239C43.5676 42.9104 43.7522 42.4647 43.7522 42C43.7522 41.5353 43.5676 41.0896 43.239 40.761L39.2245 36.75L43.239 32.739Z"
                            fill="#AF4C4C" />
                    </svg>

                    {{-- 2 --}}
                    <div class="flex flex-col whitespace-nowrap">
                        <h2>Cancelled</h2>
                        <h1 class="text-4xl font-bold">2</h1>
                        <span class="font-bold text-xs text-[#A7A7A7]">Last 7 days</span>
                    </div>
                </a>
            </div>
            {{-- Controls --}}
            <div class="flex items-center justify-between w-full ">
                {{-- Left --}}
                <div class="flex items-center transition-all duration-300 ease-linear gap-x-12 xl:gap-x-24">
                    <div class="flex items-center gap-x-2">
                        <button class="transition-all duration-300 ease-linear hover:text-[#4CAF50]" type="button">
                            <svg class="w-6 h-6" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="21" height="21" rx="4.5"
                                    fill="white" stroke="currentColor" />
                                <path d="M13.6667 5.66675L8.33332 11.0001L13.6667 16.3334" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <span class="font-bold">AUGUST</span>
                        <button class="transition-all duration-300 ease-linear hover:text-[#4CAF50]" type="button">
                            <svg class="w-6 h-6" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="21.5" y="21.5" width="21" height="21" rx="4.5"
                                    transform="rotate(180 21.5 21.5)" fill="white" stroke="currentColor" />
                                <path d="M8.33331 16.3333L13.6666 10.9999L8.33331 5.66658" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    {{-- 2 --}}
                    <div class="flex items-center gap-x-2">
                        <button class="transition-all duration-300 ease-linear hover:text-[#4CAF50]" type="button">
                            <svg class="w-6 h-6" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="21" height="21" rx="4.5"
                                    fill="white" stroke="currentColor" />
                                <path d="M13.6667 5.66675L8.33332 11.0001L13.6667 16.3334" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <span class="font-bold">AM</span>
                        <button class="transition-all duration-300 ease-linear hover:text-[#4CAF50]" type="button">
                            <svg class="w-6 h-6" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="21.5" y="21.5" width="21" height="21" rx="4.5"
                                    transform="rotate(180 21.5 21.5)" fill="white" stroke="currentColor" />
                                <path d="M8.33331 16.3333L13.6666 10.9999L8.33331 5.66658" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- Right --}}
                <div class="text-[#FFFFFF] flex items-center gap-x-1">
                    <button class="text-xs py-2 rounded-sm bg-[#AF4C4C] w-[88px] h-9 hover:ring-2 transition-all duration-300 ease-linear" type="button">VIP Guest</button>
                    <button class="text-xs py-2 rounded-sm bg-[#FFC702] w-[88px] h-9 hover:ring-2 transition-all duration-300 ease-linear" type="button">Loyalty
                        Guest</button>
                    <button class="flex items-center text-left px-4  text-xs h-9 rounded-sm bg-[#59C3FF] w-[88px] hover:ring-2 transition-all duration-300 ease-linear"
                        type="button">Checkout Guest
                    </button>
                    <button class="flex items-center text-left px-4  text-xs h-9 rounded-sm bg-[#4CAF50] w-[88px] hover:ring-2 transition-all duration-300 ease-linear"
                        type="button">In-House Guest
                    </button>
                    <button class="text-xs py-2 rounded-sm bg-[#EC671C] w-[88px] h-9 hover:ring-2 transition-all duration-300 ease-linear" type="button">Future Guest</button>
                </div>
            </div>
        </div>
    </div>
@endsection

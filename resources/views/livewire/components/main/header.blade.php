<div class="bg-[#FFFFFF] flex items-center sticky top-0 z-50 justify-between px-8  w-full h-[110px]">
    {{-- Header --}}
    <img class="pr-[260px]" src="{{ asset('images/profile-creation/main-logo.png') }}" alt="">
    {{-- Middle --}}
    <div class="flex items-center justify-between w-full gap-x-4">
        {{-- 1 --}}
        <div class="whitespace-nowrap">
            <h2 class="">Welcome, <span class="font-bold">Juancho Manolo!</span> </h2>
            <h4 class="text-xs text-[#6C6C6C]">You are logged in today
                <span class="font-bold">Aug 24, 2022</span> at
                <span class="font-bold">9:00am</span>
            </h4>
        </div>
        {{-- 2 | search Bar --}}
        <div class="flex items-center space-x-7 ">
            <div class="bg-[#E6E6E6] text-[#A7A7A7] flex items-center gap-x-4 rounded-xl py-3 px-4 w-full max-w-[380px]">
                <input class="text-[#333443] bg-transparent focus:outline-none w-full" type="text"
                    placeholder="What are you looking for?">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="m21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0a8.5 8.5 0 0 1 17 0Z" />
                </svg>
            </div>
            <button class="text-[#4CAF50] w-6 h-6" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                    <path fill="currentColor"
                        d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z"
                        class="clr-i-solid clr-i-solid-path-1" />
                    <path fill="currentColor" d="M15.32 32a2.65 2.65 0 0 0 5.25 0Z"
                        class="clr-i-solid clr-i-solid-path-2" />
                    <path fill="none" d="M0 0h36v36H0z" />
                </svg>
            </button>
        </div>
        {{-- 3 --}}
        <div class="flex items-center gap-x-2 ">
            <div class="flex flex-col text-right whitespace-nowrap">
                <h2 class="font-bold">Juancho Manolo</h2>
                <span class="text-[#4CAF50]">Admin</span>
            </div>
            <div>
                <button class="bg-[#D9D9D9] w-14 h-14 rounded-full" type="button"></button>
            </div>
            {{-- <button class="rounded-full w-14 h-14">
                <div class="bg-[#D9D9D9] rounded-full"></div>
                <img class="w-14 h-14" src="{{ asset('images/profile.png') }}" alt="">
            </button> --}}
        </div>
    </div>
    {{-- Right --}}
</div>

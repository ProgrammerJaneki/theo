@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="bg-white rounded-md px-9 pb-9">
            {{-- Top --}}
            <div class="flex items-center justify-between w-full py-4 ">
                <a class="flex items-center gap-x-2" href="{{ route('employe-list-section1') }}">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.25 16.5L2.25 13.5L5.25 10.5" stroke="currentColor" stroke-width="3.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 13.5H16.7812C19.5356 13.5 21.75 8.4375 21.75 8.4375V7.5" stroke="currentColor"
                            stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Back</span>
                </a>
                <div class="flex items-center space-x-3">
                    {{-- Edit --}}
                    <button>
                        <svg class="w-6 h-5" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.5123 3.41315L20.2117 7.11263C20.3676 7.26848 20.3676 7.52277 20.2117 7.67862L11.2543 16.6361L7.44816 17.0585C6.93959 17.116 6.50894 16.6853 6.56636 16.1767L6.9888 12.3706L15.9463 3.41315C16.1021 3.2573 16.3564 3.2573 16.5123 3.41315ZM23.1566 2.47393L21.1551 0.472444C20.5317 -0.150971 19.5186 -0.150971 18.8911 0.472444L17.4392 1.92434C17.2833 2.0802 17.2833 2.33448 17.4392 2.49034L21.1387 6.18981C21.2945 6.34566 21.5488 6.34566 21.7047 6.18981L23.1566 4.73791C23.78 4.11039 23.78 3.09735 23.1566 2.47393ZM15.7494 14.1999V18.3751H2.6249V5.25059H12.0499C12.1812 5.25059 12.3042 5.19727 12.3986 5.10704L14.0391 3.46647C14.3508 3.15477 14.1294 2.62568 13.6905 2.62568H1.96868C0.881803 2.62568 0 3.50749 0 4.59436V19.0313C0 20.1182 0.881803 21 1.96868 21H16.4056C17.4925 21 18.3743 20.1182 18.3743 19.0313V12.5593C18.3743 12.1204 17.8452 11.9031 17.5335 12.2107L15.893 13.8512C15.8027 13.9456 15.7494 14.0686 15.7494 14.1999Z"
                                fill="#333443" />
                        </svg>
                    </button>
                    {{-- Print --}}
                    <button>
                        <svg class="w-5 h-5" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.25 0C6.65326 0 6.08097 0.237053 5.65901 0.65901C5.23705 1.08097 5 1.65326 5 2.25V3H3.5C2.70435 3 1.94129 3.31607 1.37868 3.87868C0.816071 4.44129 0.5 5.20435 0.5 6V12.75C0.5 13.3467 0.737053 13.919 1.15901 14.341C1.58097 14.7629 2.15326 15 2.75 15H5V15.75C5 16.3467 5.23705 16.919 5.65901 17.341C6.08097 17.7629 6.65326 18 7.25 18H14.9C15.4967 18 16.069 17.7629 16.491 17.341C16.9129 16.919 17.15 16.3467 17.15 15.75V15H19.25C19.8467 15 20.419 14.7629 20.841 14.341C21.2629 13.919 21.5 13.3467 21.5 12.75V6C21.5 5.20435 21.1839 4.44129 20.6213 3.87868C20.0587 3.31607 19.2956 3 18.5 3H17V2.25C17 1.65326 16.7629 1.08097 16.341 0.65901C15.919 0.237053 15.3467 0 14.75 0H7.25ZM15.5 3H6.5V2.25C6.5 2.05109 6.57902 1.86032 6.71967 1.71967C6.86032 1.57902 7.05109 1.5 7.25 1.5H14.75C14.9489 1.5 15.1397 1.57902 15.2803 1.71967C15.421 1.86032 15.5 2.05109 15.5 2.25V3ZM7.25 12H14.9C15.0989 12 15.2897 12.079 15.4303 12.2197C15.571 12.3603 15.65 12.5511 15.65 12.75V15.75C15.65 15.9489 15.571 16.1397 15.4303 16.2803C15.2897 16.421 15.0989 16.5 14.9 16.5H7.25C7.05109 16.5 6.86032 16.421 6.71967 16.2803C6.57902 16.1397 6.5 15.9489 6.5 15.75V12.75C6.5 12.5511 6.57902 12.3603 6.71967 12.2197C6.86032 12.079 7.05109 12 7.25 12Z"
                                fill="#333443" />
                        </svg>
                    </button>
                    {{-- Bin --}}
                    <button>
                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1 16C1 17.1 1.9 18 3 18H11C12.1 18 13 17.1 13 16V4H1V16ZM14 1H10.5L9.5 0H4.5L3.5 1H0V3H14V1Z"
                                fill="#333443" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- Form --}}
            <form action="{{ route('new-employee-info') }}">
                {{-- Profile --}}
                <div class="flex py-8 border-y-2 border-[#CACACA]">
                    <div class="flex items-center w-full gap-x-10">
                        <img src="{{ asset('images/main/manpower/user-profile.png') }}" alt="user">
                        {{-- Top --}}
                        <div class="flex flex-col w-full text-xs gap-y-2">
                            <div class="flex items-center justify-between">
                                <h2 class="text-2xl font-bold">EMP000001</h2>
                                <div x-data="{ saveEmployee: false }" class="flex items-center gap-x-3">
                                    <button
                                        class="text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] text-center py-2 border-2 rounded-md border-[#4CAF50] w-[123px] transition-all duration-150 ease-linear">
                                        Save as draft
                                    </button>
                                    <button @click="saveEmployee = true"
                                        class="text-[#FFFFFF] bg-[#4CAF50] hover:bg-[#4CAF50]/80 cursor-pointer text-center py-2 border-2 border-[#4CAF50] rounded-md w-[123px]"
                                        type="button">
                                        Save
                                    </button>
                                    {{-- Modal --}}
                                    <template x-if="saveEmployee">
                                        <div
                                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto animate__animated animate__fadeIn animate__delay-1s bg-smoke-lighter">
                                            {{-- Saved --}}
                                            <div
                                                class="animate__animated animate__bounceInUp animate__delay-1s flex text-center flex-col items-center justify-center leading-none bg-white rounded-xl w-[550px] h-[377px]">
                                                <img class="mt-2" src="{{ asset('images/profile-creation/secure.png') }}"
                                                    alt="">
                                                <div class="space-y-5 leading-none">
                                                    <h1 class="font-bold text-2xl text-[#4CAF50]">Saved</h1>
                                                    <h2>Your profile has been updated</h2>
                                                </div>
                                                <input
                                                    class="cursor-pointer flex justify-center items-center py-3 text-[#FFFFFF] bg-[#4CAF50] gap-x-3 mt-11  rounded-xl w-80 hover:bg-[#4CAF50]/80"
                                                    type="submit" value="Close">
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            <div class="flex ">
                                {{-- Fname --}}
                                <div class="flex flex-col">
                                    <input class="border-b-2 pr-2 border-[#A7A7A7] focus:outline-none" type="text">
                                    <span>First Name</span>
                                </div>
                                {{-- MI --}}
                                <div class="flex flex-col">
                                    <input class="border-b-2 pr-2 border-[#A7A7A7] focus:outline-none" type="text">
                                    <span>M.I</span>
                                </div>
                                {{-- Lname --}}
                                <div class="flex flex-col">
                                    <input class="border-b-2 border-[#A7A7A7] focus:outline-none" type="text">
                                    <span>Last Names</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <h2 class="text-[#4CAF50]">N/A</h2>
                                <div class="inline-block">
                                    <h2>N/A, <span>N/A</span>, N/A</h2>
                                    {{-- <h2>Male, <span>24</span>, Single</h2> --}}
                                </div>
                                <div
                                    class="text-center font-bold bg-[#4CAF50]/25 text-[#4CAF50] rounded-lg py-1 px-4 max-w-[100px]">
                                    Processing</div>
                            </div>
                        </div>
                    </div>
                </div>
                <livewire:components.main.manpower.employe-list.add-employee-info />
            </form>
        </div>
    </div>
@endsection

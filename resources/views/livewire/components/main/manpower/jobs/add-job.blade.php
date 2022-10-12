@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="bg-white rounded-md px-9 pb-9">
            <form action="{{ route('jobs-section1') }}">
                {{-- Top --}}
                <div x-data="saveJob: false"
                    class="flex items-center justify-between border-b-2 border-[#A7A7A7] text-xs w-full py-5 pb-7 ">
                    <a class="flex items-center text-base font-bold gap-x-3" href="{{ route('jobs-section1') }}">
                        <svg class="w-3 h-3" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 13L1 7L7 1" stroke="#333443" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <span>Add New Job</span>
                    </a>
                    <div x-data="{ saveJob: false }" class="flex items-center gap-x-3">
                        <button
                            class="text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] text-center py-2 border-2 rounded-md border-[#4CAF50] w-[123px] transition-all duration-150 ease-linear"
                            type="button">
                            Save as draft
                        </button>
                        <button @click="saveJob = true"
                            class="text-[#FFFFFF] bg-[#4CAF50] hover:bg-[#4CAF50]/80 cursor-pointer text-center py-2 border-2 border-[#4CAF50] rounded-md w-[123px]"
                            type="button">
                            Save
                        </button>
                        {{-- Modal --}}
                        <template x-if="saveJob">
                            <div
                                class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-hidden  bg-smoke-lighter">
                                {{-- Saved --}}
                                <div
                                    class="animate__animated animate__bounceInUp animate__delay-1s flex text-center flex-col items-center justify-center leading-none bg-white rounded-xl w-[550px] h-[377px]">
                                    <img class="mt-2" src="{{ asset('images/profile-creation/secure.png') }}"
                                        alt="">
                                    <div class="space-y-5 leading-none">
                                        <h1 class="font-bold text-2xl text-[#4CAF50]">Saved</h1>
                                        <h2>Employee data has been saved successfully</h2>
                                    </div>
                                    <input
                                        class="cursor-pointer flex justify-center items-center py-3 text-[#FFFFFF] bg-[#4CAF50] gap-x-3 mt-11  rounded-xl w-80 hover:bg-[#4CAF50]/80"
                                        type="submit" value="Close">
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                {{-- Middle --}}
                <div class="flex gap-x-36 mt-5 w-full h-[737px]">
                    {{-- Left --}}
                    <div class="flex flex-col text-xs gap-y-5 h-full ">
                        {{-- Department --}}
                        <div x-data="{ selectDepartment: false, selectPosition: false }" class="flex items-center justify-between w-[516px]">
                            <label class="" for="department">Department:</label>
                            {{-- <h2 class="text-[#000000]">Department:</h2> --}}
                            <div class="flex items-center gap-x-4">
                                <div class="relative font-bold">
                                    <button @click="selectDepartment = !selectDepartment"
                                        @click.outside="selectDepartment = false"
                                        class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-2 px-2 w-[248px] gap-x-1"
                                        type="button">
                                        <span class="">House Keeping</span>
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                    {{-- dropdown --}}
                                    <template x-if="selectDepartment">
                                        <div
                                            class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[248px]">
                                            <ul class="text-left ">
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Kitchen</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Electrician</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Receptionist</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Purchasing</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Sales & Marketing</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">IT</li>
                                            </ul>
                                        </div>
                                    </template>
                                </div>
                                {{-- Create New  --}}
                                <button
                                    class="text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] text-center py-2 border-2 rounded-md border-[#4CAF50] w-[123px] transition-all duration-150 ease-linear"
                                    type="button">
                                    Create New
                                </button>
                            </div>
                        </div>
                        {{-- Position --}}
                        <div x-data="{ selectPosition: false }" class="flex items-center justify-between w-[516px] ">
                            <label for="position">Position:</label>
                            <div class="flex items-center gap-x-4">
                                <div class="relative font-bold ml ">
                                    <button @click="selectPosition = !selectPosition"
                                        @click.outside="selectPosition = false"
                                        class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-2 px-2 w-[248px] gap-x-1"
                                        type="button">
                                        <span class="">Room Attendant</span>
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                    {{-- dropdown --}}
                                    <template x-if="selectPosition">
                                        <div
                                            class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[248px]">
                                            <ul class="text-left ">
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Line Cook</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Electrician</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Receptionist</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Purchasing Associate</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Director of Sales &
                                                    Marketing</li>
                                                <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Network Administrator</li>
                                            </ul>
                                        </div>
                                    </template>
                                </div>
                                {{-- Create New  --}}
                                <button
                                    class="text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] text-center py-2 border-2 rounded-md border-[#4CAF50] w-[123px] transition-all duration-150 ease-linear"
                                    type="button">
                                    Create New
                                </button>
                            </div>
                        </div>
                        {{-- Text --}}
                        <div class="flex flex-col gap-y-10 mt-auto">
                            {{-- 1 --}}
                            <div class="space-y-2">
                                <label class="font-bold " for="jobDescription">Job Description</label>
                                <textarea class="bg-[#EFEFEF] block p-4 focus:outline-none resize-none rounded-md w-full h-[202px]"
                                    name="jobDescription" id="jobDescription" rows="4">
                                </textarea>
                            </div>
                            {{-- 2 --}}
                            <div class="space-y-2">
                                <label class="font-bold " for="requirements">Requirements</label>
                                <textarea class="bg-[#EFEFEF] block p-4 focus:outline-none resize-none rounded-md w-full h-[275px]"
                                    name="requirements" id="requirements" rows="4">
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- Right --}}
                    <div class="flex flex-col border-2 border-[#AAAAAA] text-xs py-8 px-9 rounded-xl w-[356px] h-full">
                        {{-- 1 --}}
                        <div class="flex flex-col gap-y-10">
                            <h2 class="font-bold text-base">Job Details</h2>
                            <div class="space-y-2">
                                <h2>Publish Date</h2>
                                <h2 class="font-bold">Unpublished</h2>
                            </div>
                            <div class="space-y-2">
                                <h2>Recruitment Period</h2>
                                <div class="flex items-center gap-x-4">
                                    <button class="w-4 h-4" type="button">
                                        <svg viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 18C0 18.4148 0.335156 18.75 0.75 18.75H18C18.4148 18.75 18.75 18.4148 18.75 18V8.15625H0V18ZM18 1.6875H14.0625V0.1875C14.0625 0.084375 13.9781 0 13.875 0H12.5625C12.4594 0 12.375 0.084375 12.375 0.1875V1.6875H6.375V0.1875C6.375 0.084375 6.29063 0 6.1875 0H4.875C4.77187 0 4.6875 0.084375 4.6875 0.1875V1.6875H0.75C0.335156 1.6875 0 2.02266 0 2.4375V6.5625H18.75V2.4375C18.75 2.02266 18.4148 1.6875 18 1.6875Z"
                                                fill="#333443" />
                                        </svg>
                                    </button>
                                    <label for="selectDate">Select Date</label>
                                </div>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="flex flex-col gap-y-10">
                            <div>
                                <label for="numHires">Number of Hires for this role</label>
                                <div class="flex items-center">
                                    <button class="font-bold bg-red-200 p-0 leading-none text-xl" type="button">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

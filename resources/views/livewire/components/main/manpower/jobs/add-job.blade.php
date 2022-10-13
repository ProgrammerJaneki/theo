@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="bg-white rounded-md px-9 pb-9">
            <form action="{{ route('job-info') }}">
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
                            class="text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] text-center py-2 border rounded-md border-[#4CAF50] w-[123px] transition-all duration-150 ease-linear"
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
                                    class="animate__animated animate__bounceInUp flex text-center flex-col items-center justify-center leading-none bg-white rounded-xl w-[550px] h-[377px]">
                                    <img class="mt-2" src="{{ asset('images/profile-creation/secure.png') }}"
                                        alt="">
                                    <div class="space-y-5 leading-none">
                                        <h1 class="font-bold text-2xl text-[#4CAF50]">Saved</h1>
                                        <h2>Job has been added succcessfully</h2>
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
                                    class="text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] text-center py-2 border rounded-md border-[#4CAF50] w-[123px] transition-all duration-150 ease-linear"
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
                                    class="text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] text-center py-2 border rounded-md border-[#4CAF50] w-[123px] transition-all duration-150 ease-linear"
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
                                        <svg viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <div class="flex flex-col mt-7 gap-y-10">
                            {{-- A --}}
                            <div class="space-y-3">
                                <label for="hiringManager">Hiring Manager</label>
                                <button
                                    class="border border-[#4CAF50] hover:text-[#FFFFFF] text-[#4CAF50] flex items-center py-2 px-7 gap-x-2 rounded-md text-xs hover:bg-[#4CAF50] transition-all duration-150 ease-linear"
                                    type="button">
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z"
                                            fill="currentColor" />
                                        <path
                                            d="M8 4C8.13261 4 8.25979 4.05268 8.35355 4.14645C8.44732 4.24021 8.5 4.36739 8.5 4.5V7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H8.5V11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H7.5V4.5C7.5 4.36739 7.55268 4.24021 7.64645 4.14645C7.74021 4.05268 7.86739 4 8 4Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span>Add</span>
                                </button>
                            </div>
                            {{-- B --}}
                            <div>
                                <label for="numHires">Number of Hires for this role</label>
                                <div class="flex items-center gap-x-2">
                                    <button class="font-bold leading-none px-2 text-xl" type="button">-</button>
                                    <h2 class="font-bold">1</h2>
                                    <button class="font-bold leading-none px-2 text-xl" type="button">+</button>
                                </div>
                            </div>
                            {{-- C --}}
                            <div x-data="{ selectEmployment: false }" class="space-y-1">
                                <label for="employmentType">Employment Type</label>
                                <div class="flex items-center gap-x-4">
                                    <div class="relative font-bold ml ">
                                        <button @click="selectEmployment = !selectEmployment"
                                            @click.outside="selectEmployment = false"
                                            class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-2 px-2 w-[206px] gap-x-1"
                                            type="button">
                                            <span class="">Full Time</span>
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                        {{-- dropdown --}}
                                        <template x-if="selectEmployment">
                                            <div
                                                class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[206px]">
                                                <ul class="text-left ">
                                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Project Base</li>
                                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Part Time</li>
                                                </ul>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- 1 --}}
                        <div class="mt-14 space-y-5">
                            <label for="range">Salary Range</label>
                            <div class="space-y-3">
                            <div class="flex items-center gap-x-5">
                                <label class="w-7 for="minRange">Min:</label>
                                <div
                                    class="bg-[#EFEFEF] rounded-md space-x-3 border border-[#CACACA] py-1 px-3 flex w-[143px]">
                                    <span class="font-bold">P</span>
                                    <input class="bg-transparent focus:outline-none" type="text" placeholder="0">
                                </div>
                            </div>
                            <div class="flex items-center gap-x-5">
                                <label class="w-7" for="maxRange">Max:</label>
                                <div
                                    class="bg-[#EFEFEF] rounded-md space-x-3 border border-[#CACACA] py-1 px-3 flex w-[143px]">
                                    <span class="font-bold">P</span>
                                    <input class="bg-transparent focus:outline-none" type="text" placeholder="0">
                                </div>
                            </div>
                                                        </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection

@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="bg-white rounded-md px-9 pb-9">
            {{-- Top --}}
            <div x-data="{ edit: true, save: false, saveEdit: false, publish: false }" class="flex justify-between text-xs w-full pt-6 ">
                <a class="flex items-center text-base font-bold gap-x-3" href="{{ route('jobs-section1') }}">
                    <svg class="w-3 h-3" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#333443" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span>House Keeping</span>
                </a>

                <div class="text-xs flex items-center gap-x-3">
                    {{-- Toggle from Edit button to Save and vice versa --}}
                    <div>
                        <template x-if="edit">
                            <button @click="edit = false, save = true"
                                class="flex justify-center gap-x-2 text-[#FFFFFF] bg-[#4CAF50] hover:bg-[#4CAF50]/80 py-2 border-2 border-[#4CAF50] rounded-md w-[123px]"
                                type="button">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m7 17.013l4.413-.015l9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583l-1.597 1.582l-1.586-1.585l1.594-1.58zM9 13.417l6.03-5.973l1.586 1.586l-6.029 5.971L9 15.006v-1.589z" />
                                    <path fill="currentColor"
                                        d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z" />
                                </svg>
                                <span>Edit</span>
                            </button>
                        </template>
                        <template x-if="save">
                            <button @click="save = true, edit = false, saveEdit = true"
                                class="text-[#FFFFFF] bg-[#4CAF50] hover:bg-[#4CAF50]/80 cursor-pointer text-center py-2 border-2 border-[#4CAF50] rounded-md w-[123px]"
                                type="button">
                                <span>Save</span>
                            </button>
                        </template>
                    </div>
                    {{-- Save Edit --}}
                    <template x-if="saveEdit">
                        <div
                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-hidden  bg-smoke-lighter">
                            {{-- Saved --}}
                            <div
                                class="animate__animated animate__bounceInUp flex text-center flex-col items-center justify-center leading-none bg-white rounded-xl w-[550px] h-[377px]">
                                <img class="mt-2 w-[88px] h-[88px]" src="{{ asset('images/profile-creation/secure.png') }}"
                                    alt="">
                                <div class="space-y-5 leading-none">
                                    <h1 class="font-bold text-2xl text-[#4CAF50]">Saved</h1>
                                    <h2>Job has been added succcessfully</h2>
                                </div>
                                <a @click="save = false, edit = true"
                                    class="cursor-pointer flex justify-center items-center py-4 text-[#FFFFFF] bg-[#4CAF50] gap-x-3 mt-11  rounded-xl w-80 hover:bg-[#4CAF50]/80"
                                    href="{{ route('job-info') }}">Close</a>
                            </div>
                        </div>
                    </template>
                    {{-- Publish Button --}}
                    <button @click="publish = true"
                        class="text-[#FFFFFF] bg-[#4CAF50] hover:bg-[#4CAF50]/80 cursor-pointer text-center py-2 border-2 border-[#4CAF50] rounded-md w-[123px]"
                        type="button">
                        <span>Publish</span>
                    </button>
                    {{-- Publish Modal --}}
                    <template x-if="publish">
                        <div
                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-hidden  bg-smoke-lighter">
                            {{-- Saved --}}
                            <div
                                class="animate__animated animate__bounceInUp flex text-center flex-col items-center justify-center leading-none bg-white rounded-xl w-[550px] h-[377px]">
                                <img class="mt-2" src="{{ asset('images/main/manpower/questionMark.png') }}"
                                    alt="">
                                <div class="space-y-5 leading-none">
                                    <h1 class="font-bold text-2xl text-[#4CAF50]">Publish Post</h1>
                                    <h2>Are you sure you want to publish this job post now?</h2>
                                </div>
                                <div class="flex items-center gap-x-7">
                                    <button @click="publish = false"
                                        class="cursor-pointer flex justify-center items-center border border-[#AF4C4C] py-4 text-[#AF4C4C] hover:text-[#FFFFFF] 
                                            bg-[#FFFFFF] hover:bg-[#AF4C4C] gap-x-3 mt-11  rounded-xl w-36 transition-all duration-150 ease-linear">
                                        Cancel</button>
                                    <a @click="save = false, edit = true"
                                        class="cursor-pointer flex justify-center items-center py-4 text-[#FFFFFF] bg-[#4CAF50] gap-x-3 mt-11  rounded-xl w-36 hover:bg-[#4CAF50]/80"
                                        href="{{ route('job-info') }}">Publish</a>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

            </div>
            {{-- Job Name --}}
            <div class="pb-6 border-b-2 border-[#A7A7A7]">
                <h2 class="font-bold text-2xl mt-2 ml-6">Room Attendant</h2>
            </div>
            {{-- Details --}}
            <div x-data="{ showJob: true, showApplicants: false }" class="flex items-center gap-x-36 mt-4 w-full h-full">
                {{-- Left --}}
                <div class="flex flex-col max-w-[438px]">
                    {{-- Top --}}
                    <div class="flex">
                        <button x-cloak @click="showJob = true, showApplicants = false"
                            :class="showJob ? 'border-[#3CAF50]' : 'border-transparent'"
                            class="text-left py-2 font-bold border-b-4 hover:border-[#4CAF50] w-[110px] transition-all duration-150 ease-linear"
                            type="button">Job Details</button>
                        <button x-cloak @click="showApplicants = true, showJob = false"
                            :class="showApplicants ? 'border-[#4CAF50]' : 'border-transparent'"
                            class="text-center py-2 font-bold border-b-4 hover:border-[#4CAF50] w-[110px] transition-all duration-150 ease-linear"
                            type="button"> Contract
                        </button>
                    </div>
                    <div class="flex flex-col">
                        <div class="mt-10">
                            <h2 class="font-bold ">Job Title</h2>
                            <span class="text-xs">Room Attendant</span>
                        </div>
                        {{-- Job Description --}}
                        <div class="mt-8">
                            <h2 class="font-bold">Job Description</h2>
                            <div class="flex flex-col text-xs">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac ultricies dolor volutpat
                                    fringilla placerat. Volutpat sed accumsan risus nec. Eleifend ipsum id posuere etiam
                                    quis convallis dolor, malesuada. Vulputate convallis amet placerat sit odio nibh sed.
                                    <br><br>
                                    Neque mi in eu nulla elit urna sit amet. Porttitor ac, massa in vitae eget ullamcorper
                                    pulvinar. Pharetra vivamus turpis sodales a vitae sit amet magna. Laoreet quis aliquam
                                    et tempus dignissim nisl ac, metus placerat.
                                </p>
                            </div>
                        </div>
                        {{-- Requirements --}}
                        <div class="space-y-4 mt-10">
                            <h2 class="font-bold">Requirements</h2>
                            <ul class="text-xs space-y-1 pl-4 max-w-md list-disc list-outside ">
                                <li>
                                    High school diploma, preferred.
                                </li>
                                <li>
                                    Previous guest service and/or housekeeping experience.
                                </li>
                                <li>
                                    Experience using industrial cleaning equipment and products.
                                </li>
                                <li>
                                    Flexible working hours.
                                </li>
                                <li>
                                    Ability to work with little or no supervision while meeting high-performance
                                    standards.
                                </li>
                                <li>
                                    Experience using industrial cleaning equipment and products.
                                </li>
                                <li>
                                    Physical mobility and stamina.
                                </li>
                                <li>
                                    Ability to follow instructions.
                                </li>
                                <li>
                                    Professional and polite.
                                </li>
                            </ul>
                        </div>
                        {{-- Salary Range --}}
                        <div class="space-y-4 mt-10">
                            <h2 class="font-bold">Salary Range</h2>
                            <div class="flex">
                                <span>P18,000</span>-
                                <span>P25,000</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Right --}}
                <div class="flex flex-col text-xs border-2 border-[#A7A7A7] py-5 px-9 rounded-xl w-[356px] h-[716px]">
                    {{-- Top --}}
                    <div class="flex flex-col gap-y-10">
                        <h1 class="text-base font-bold">Job Details</h1>
                        <div class="space-y-2">
                            <h2>Publish Date</h2>
                            <h2 class="font-bold">10 August, 2022</h2>
                        </div>
                        <div class="space-y-2">
                            <h2>Recruitment Period</h2>
                            <div class="flex">
                                <h2 class="font-bold">10 August, 2022</h2>
                                &nbsp;-&nbsp;
                                <h2 class="font-bold">10 October, 2022</h2>
                            </div>
                        </div>
                    </div>
                    {{-- Middle --}}
                    <div class="flex flex-col gap-y-12">
                        <div class="">
                            <h2>Recruitment Period</h2>
                            <h2 class="font-bold mt-2">Rashed Evans</h2>
                            <img class="w-9 h-9" src="{{ asset('images/main/manpower/gray.png') }}" alt="">
                        </div>
                        <div class="space-y-2">
                            <h2>Number of Hires for this role</h2>
                            <h2 class="font-bold">12</h2>
                        </div>
                        <div class="space-y-2">
                            <h2>Employment Type</h2>
                            <h2 class="font-bold">Full Time</h2>
                        </div>
                        <div class="space-y-2">
                            <h2>Employment Type</h2>
                            <h2>Min: <span class="font-bold">P18, 000.00</span> </h2>
                            <h2>Max: <span class="font-bold">P30, 000.00</span> </h2>
                        </div>
                    </div>
                    <div class="space-y-2 mt-auto">
                        <h2>Last Update</h2>
                        <h2 class="font-bold">16 Minutes ago</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

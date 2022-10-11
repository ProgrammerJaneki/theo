<div x-data="{ showPersonal: true, showContract: false, showLeaves: false }" class="flex flex-col gap-y-5">
    <div class="flex">
        <button @click="showPersonal = true, showContract = false, showLeaves = false"  :class="showPersonal ? 'border-[#3CAF50]' : 'border-transparent' " 
            class="text-left py-2 font-bold border-b-4 hover:border-[#4CAF50] w-[110px] transition-all duration-150 ease-linear" type="button">Personal</button>
        <button @click="showPersonal = false, showContract = true, showLeaves = false" :class="showContract ? 'border-[#4CAF50]' : 'border-transparent' " 
            class="text-center py-2 font-bold border-b-4 hover:border-[#4CAF50] w-[110px] transition-all duration-150 ease-linear" type="button"> Contract
        </button>
        <button @click="showLeaves = true, showPersonal = false, showContract = false" :class="showLeaves ? 'border-[#3CAF50]' : 'border-transparent' " 
            class="text-center py-2 font-bold border-b-4 hover:border-[#4CAF50] w-[110px] transition-all duration-150 ease-linear" type="button"> Leaves
        </button>
    </div>
    {{-- Personal --}}
    <template x-if="showPersonal">
        <div class="flex justify-between gap-x-24">
            {{-- Left --}}
            <div class="flex flex-col w-[448px] ">
                <div class="w-full space-y-2">
                    <h2 class="font-bold">Address</h2>
                    <input class="p-2 focus:outline-none rounded-md bg-[#E6E6E6] w-full" type="text">
                    <input class="p-2 focus:outline-none rounded-md bg-[#E6E6E6] w-full" type="text">
                </div>
                {{-- Middle --}}
                <div class="flex flex-col w-[448px] mt-11">
                    <div class="flex flex-wrap items-center gap-x-2 gap-y-5">
                        <div class="flex flex-col w-[219px]">
                            <h2 class="font-bold">Email</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-[219px]">
                            <h2 class="font-bold">Alternate Email</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-[219px]">
                            <h2 class="font-bold">Mobile Number</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-[219px]">
                            <h2 class="font-bold">Telephone Number</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                    </div>
                </div>
                {{-- Bottom --}}
                <div x-data="{ gender: false, status: false, nationality: false }" class="flex flex-col mt-11">
                    <div class="flex flex-wrap items-center gap-x-2 gap-y-5 w-[448px]">
                        {{-- Gender --}}
                        <div class="flex flex-col w-[219px]">
                            <h2 class="font-bold">Birthdate</h2>
                            <div class="flex items-center gap-x-2">
                                <div class="flex p-2 rounded-md gap-x-2 bg-[#E6E6E6] w-[174px] h-9">
                                    <input class="w-full bg-transparent focus:outline-none"
                                        placeholder="MM/DD/YYYY"type="text">
                                    <button type="button">
                                        <svg class="w-5 h-5" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 18C0 18.4148 0.335156 18.75 0.75 18.75H18C18.4148 18.75 18.75 18.4148 18.75 18V8.15625H0V18ZM18 1.6875H14.0625V0.1875C14.0625 0.084375 13.9781 0 13.875 0H12.5625C12.4594 0 12.375 0.084375 12.375 0.1875V1.6875H6.375V0.1875C6.375 0.084375 6.29063 0 6.1875 0H4.875C4.77187 0 4.6875 0.084375 4.6875 0.1875V1.6875H0.75C0.335156 1.6875 0 2.02266 0 2.4375V6.5625H18.75V2.4375C18.75 2.02266 18.4148 1.6875 18 1.6875Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="bg-[#E6E6E6] flex justify-center items-center rounded-md w-9 h-9">0</div>
                            </div>
                        </div>
                        <div class="flex flex-col w-[219px]">
                            <h2 class="font-bold">Gender</h2>
                            <div class="relative font-bold">
                                <button @click="gender = !gender" @click.outside="gender = false"
                                    class="flex justify-between items-center border-2 border-[#CACACA] rounded-md py-1 px-3 w-[219px] gap-x-1"
                                    type="button">
                                    <span class="">Male</span>
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                                {{-- dropdown --}}
                                <template x-if="gender">
                                    <div class="absolute right-0 z-50 mt-1 bg-white border-2 rounded-md w-[219px]">
                                        <ul class="text-left ">
                                            <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Female</li>
                                            <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Prefer not to</li>
                                        </ul>
                                    </div>
                                </template>
                            </div>
                        </div>
                        {{-- Marital Status --}}
                        <div class="flex flex-col w-[219px]">
                            <h2 class="font-bold">Martial Status</h2>
                            <div class="relative font-bold">
                                <button @click="status = !status" @click.outside="status = false"
                                    class="flex justify-between items-center border-2 border-[#CACACA] rounded-md py-1 px-3 w-[219px] gap-x-1"
                                    type="button">
                                    <span class="">Single</span>
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                                {{-- dropdown --}}
                                <template x-if="status">
                                    <div
                                        class="absolute bottom-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[219px]">
                                        <ul class="text-left ">
                                            <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Married</li>
                                            <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Separated</li>
                                        </ul>
                                    </div>
                                </template>
                            </div>
                        </div>
                        {{-- Nationality --}}
                        <div class="flex flex-col w-[219px]">
                            <h2 class="font-bold">Nationality</h2>
                            <div class="relative font-bold">
                                <button @click="nationality = !nationality" @click.outside="nationality = false"
                                    class="flex justify-between items-center border-2 border-[#CACACA] rounded-md py-1 px-3 w-[219px] gap-x-1"
                                    type="button">
                                    <span class="">Filipino</span>
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                                {{-- dropdown --}}
                                <template x-if="nationality">
                                    <div
                                        class="absolute bottom-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[219px]">
                                        <ul class="text-left ">
                                            <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">American</li>
                                            <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Korean</li>
                                        </ul>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right --}}
            <div class="flex flex-col w-[456px] ">
                {{-- Top --}}
                <div class="flex flex-col w-full ">
                    <div class="flex flex-wrap items-center justify-between w-full gap-y-5">
                        <div class="flex flex-col w-full max-w-[200px]">
                            <h2 class="font-bold">SSS ID / UMID</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-full max-w-[200px]">
                            <h2 class="font-bold">Pag Ibig</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-full max-w-[200px]">
                            <h2 class="font-bold">Philhealth</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-full max-w-[200px]">
                            <h2 class="font-bold">TIN No.</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                    </div>
                </div>
                {{-- Middle --}}
                <div x-data="{ idOption: false }" class="flex flex-wrap items-center justify-between w-full mt-12">
                    <div class="flex flex-col w-full max-w-[200px]">
                        <h2 class="font-bold">Other Valid I.D (Optional)</h2>
                        <div class="relative font-bold">
                            <button @click="idOption = !idOption" @click.outside="idOption = false"
                                class="flex justify-between items-center border-2 border-[#CACACA] rounded-md py-1 px-3 w-[200px] gap-x-1"
                                type="button">
                                <span class="">Filipino</span>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                            {{-- dropdown --}}
                            <template x-if="idOption">
                                <div class="absolute right-0 z-50 mt-1 bg-white border-2 rounded-md w-[200px]">
                                    <ul class="text-left ">
                                        <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">American</li>
                                        <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Korean</li>
                                    </ul>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[200px]">
                        <h2 class="font-bold">Serial Number</h2>
                        <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                    </div>
                </div>
                {{-- Bottom --}}
                <div class="flex flex-col w-full mt-auto">
                    <div class="flex flex-wrap items-center justify-between w-full gap-y-5">
                        <div class="flex flex-col w-full max-w-[200px]">
                            <h2 class="font-bold">SSS ID / UMID</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-full max-w-[200px]">
                            <h2 class="font-bold">Pag Ibig</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-full max-w-[200px]">
                            <h2 class="font-bold">Philhealth</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-full max-w-[200px]">
                            <h2 class="font-bold">TIN No.</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>

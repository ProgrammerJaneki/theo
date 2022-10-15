<div x-data="{ showPersonal: true, showContract: false, showLeaves: false }" class="flex flex-col gap-y-5">
    <div class="flex">
        <button @click="showPersonal = true, showContract = false, showLeaves = false"
            :class="showPersonal ? 'border-[#3CAF50]' : 'border-transparent'"
            class="text-left py-2 font-bold border-b-4 hover:border-[#4CAF50] w-[110px] transition-all duration-150 ease-linear"
            type="button">Personal</button>
        <button @click="showPersonal = false, showContract = true, showLeaves = false"
            :class="showContract ? 'border-[#4CAF50]' : 'border-transparent'"
            class="text-center py-2 font-bold border-b-4 hover:border-[#4CAF50] w-[110px] transition-all duration-150 ease-linear"
            type="button"> Contract
        </button>
        <button @click="showLeaves = true, showPersonal = false, showContract = false"
            :class="showLeaves ? 'border-[#3CAF50]' : 'border-transparent'"
            class="text-center py-2 font-bold border-b-4 hover:border-[#4CAF50] w-[110px] transition-all duration-150 ease-linear"
            type="button"> Leaves
        </button>
    </div>
    {{-- Personal --}}
    <template x-if="showPersonal">
        <div class="flex gap-x-12 xl:gap-x-24">
            {{-- Left --}}
            <div class="flex flex-col w-full max-w-[448px] ">
                <div class="w-full space-y-2">
                    <label for="address" class="font-bold"></label>
                    <input class="p-2 focus:outline-none rounded-md bg-[#E6E6E6] w-full max-w-[28rem]" type="text">
                    <input class="p-2 focus:outline-none rounded-md bg-[#E6E6E6] w-full max-w-[28rem]" type="text">
                </div>
                {{-- Middle --}}
                <div class="flex flex-col w-[448px] mt-11">
                    <div class="flex flex-wrap items-center gap-x-2 gap-y-5">
                        <div class="flex flex-col w-[219px]">
                            <label for="email" class="font-bold">Email</label>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-[219px]">
                            <label class="font-bold" for="altEmail">Alternate Email</label>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-[219px]">
                            <label for="mobile" class="font-bold">Mobile Number</label>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col w-[219px]">
                            <label for="telNumber" class="font-bold">Telephone Number</label>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                    </div>
                </div>
                {{-- Bottom --}}
                <div x-data="{ gender: false, status: false, nationality: false }" class="flex flex-col mt-11">
                    <div class="flex flex-wrap items-center gap-x-2 gap-y-5 w-[448px]">
                        {{-- Birthdate --}}
                        <div class="flex flex-col w-[219px]">
                            <label for="birthdate" class="font-bold">Birthdate</label>
                            <div class="flex items-center gap-x-2">
                                <div class="flex items-center justify-between bg-[#E6E6E6] p-2 rounded-md">
                                    <input class="block w-full bg-transparent focus:outline-none" type="text"
                                        id="datepicker" placeholder="MM/DD/YYYY">
                                    <svg aria-hidden="true" class="w-5 h-5 fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="bg-[#E6E6E6] flex justify-center items-center rounded-md w-9 h-9">0</div>
                            </div>
                        </div>
                        {{-- Gender --}}
                        <div class="flex flex-col w-[219px]">
                            <label for="gender" class="font-bold">Gender</label>
                            <div x-data="select" class="relative w-[219px] h-9" @click.outside="open = false">
                                <button type="button" @click="toggle"
                                    class="flex items-center justify-between font-medium py-1 px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                    <span x-text="(option == '') ? '' : option"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                </button>
                                <template x-if="open">
                                    <ul
                                        class="absolute w-full bottom-0 mb-10 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Male')">
                                            Male
                                        </li>
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Female')">
                                            Female
                                        </li>
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Prefer Not to')">
                                            Prefer not to
                                        </li>
                                    </ul>
                                </template>
                            </div>
                        </div>
                        {{-- Marital Status --}}
                        <div class="flex flex-col w-[219px]">
                            <label for="martialStatus" class="font-bold">Martial Status</label>
                            <div x-data="select" class="relative w-[219px] h-9" @click.outside="open = false">
                                <button type="button" @click="toggle"
                                    class="flex items-center justify-between font-medium py-1 px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                    <span x-text="(option == '') ? '' : option"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                </button>
                                <template x-if="open">
                                    <ul
                                        class="absolute w-full bottom-0 mb-10 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Single')">
                                            Single
                                        </li>
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Married')">
                                            Married
                                        </li>
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Widowed')">
                                            Widowed
                                        </li>
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Divorced')">
                                            Divorced
                                        </li>
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Separated')">
                                            Separated
                                        </li>
                                    </ul>
                                </template>
                            </div>
                        </div>
                        {{-- Nationality --}}
                        <div class="flex flex-col w-[219px]">
                            <label for="nationality" class="font-bold">Nationality</label>
                            <div x-data="select" class="relative w-[219px] h-9"
                                @click.outside="open = false">
                                <button type="button" @click="toggle"
                                    class="flex items-center justify-between font-medium py-1 px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                    <span x-text="(option == '') ? '' : option"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                </button>
                                <template x-if="open">
                                    <ul
                                        class="absolute w-full bottom-0 mb-10 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Filipino')">
                                            Filipino
                                        </li>
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('American')">
                                            American
                                        </li>
                                        <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                            @click="setOption('Korean')">
                                            Korean
                                        </li>
                                    </ul>
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
                    <div class="grid grid-cols-2 gap-x-10 gap-y-5">
                        <div class="flex flex-col max-w-[200px]">
                            <h2 class="font-bold">SSS ID / UMID</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col max-w-[200px]">
                            <h2 class="font-bold">Pag Ibig</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col max-w-[200px]">
                            <h2 class="font-bold">Philhealth</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                        <div class="flex flex-col max-w-[200px]">
                            <h2 class="font-bold">TIN No.</h2>
                            <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                        </div>
                    </div>
                </div>
                {{-- Middle --}}
                <div x-data="{ idOption: false }" class="grid w-full grid-cols-2 mt-12 gap-x-10">
                    {{-- Id --}}
                    <div class="flex flex-col w-full max-w-[200px]">
                        <label for="id" class="font-bold">Other Valid I.D (Optional)</label>
                        <div x-data="select" class="relative max-w-[200px] h-9" @click.outside="open = false">
                            <button type="button" @click="toggle"
                                class="flex items-center justify-between font-medium py-1 px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                <span x-text="(option == '') ? '' : option"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </button>
                            <template x-if="open">
                                <ul
                                    class="absolute w-full top-0 mt-10 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('Passport')">
                                        Passport
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('Senior Citizen ID')">
                                        Senior Citizen ID
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('Pag-ibig ID')">
                                        Pag-ibig ID
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('Philhealth ID')">
                                        Philhealth ID
                                    </li>
                                </ul>
                            </template>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[200px]">
                        <h2 class="font-bold">Serial Number</h2>
                        <input class=" p-2 focus:outline-none rounded-md bg-[#E6E6E6]" type="text">
                    </div>
                </div>
                {{-- Bottom --}}
                <div class="grid w-full grid-cols-2 mt-auto gap-x-10 gap-y-5">
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
    </template>
</div>


@push('scripts')
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
    {{-- <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script> --}}
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
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

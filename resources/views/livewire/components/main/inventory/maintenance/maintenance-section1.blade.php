@extends('livewire.layouts.theo-base')
@section('main-theo')
    {{-- <div class="px-5 py-3 ml-[320px]">
        <div class="min-h-screen text-xs bg-white rounded-md px-7 pb-9"> --}}
            {{-- Top --}}
            <div class="flex items-center justify-between w-full pt-5 pb-0 text-xs ">
                <h1 class="text-base font-bold">Monday, 23 August, 2022</h1>
                <a class="bg-[#4CAF50] text-[#FFFFFF] flex items-center py-3 px-6 gap-x-2 rounded-md hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                    href="{{ route('maintenance-section1') }}">
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z"
                            fill="currentColor" />
                        <path
                            d="M8 4C8.13261 4 8.25979 4.05268 8.35355 4.14645C8.44732 4.24021 8.5 4.36739 8.5 4.5V7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H8.5V11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H7.5V4.5C7.5 4.36739 7.55268 4.24021 7.64645 4.14645C7.74021 4.05268 7.86739 4 8 4Z"
                            fill="currentColor" />
                    </svg>
                    <span>Add Walk-In</span>
                </a>
            </div>
            {{-- Drop Downs --}}
            <div x-data="{ pickRoom: false, pickStatus: false, pickSeverity: false, pickOrder: false }" class="flex items-center justify-between pb-4 text-xs mt-9 ">
                {{-- Asset --}}
                <div class="flex items-center gap-x-2 ">
                    <h2>Asset:</h2>
                    <div x-data="select" class="relative h-6 leading-none w-36" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                            <span class="font-bold" x-text="(option == '') ? 'Rooms' : option"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul
                                class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Bedroom')">
                                    Bedroom
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Kitchen')">
                                    Kitchen
                                </li>
                            </ul>
                        </template>
                    </div>
                </div>
                {{-- Status --}}
                <div class="flex items-center gap-x-2">
                    <h2>Status:</h2>
                    <div x-data="select" class="relative h-6 leading-none w-36" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                            <span class="font-bold" x-text="(option == '') ? 'Repair' : option"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul
                                class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Working')">
                                    Working
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Maintenance')">
                                    Maintenance
                                </li>
                            </ul>
                        </template>
                    </div>
                </div>
                {{-- Severity --}}
                <div class="flex items-center gap-x-2 ">
                    <h2>Severity:</h2>
                    <div x-data="select" class="relative h-6 leading-none w-36" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                            <span class="font-bold" x-text="(option == '') ? 'Major' : option"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul
                                class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Minor')">
                                    Minor
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Normal')">
                                    Normal
                                </li>
                            </ul>
                        </template>
                    </div>
                </div>
                {{-- Order --}}
                <div class="flex items-center gap-x-2 ">
                    <h2>Order:</h2>
                    <div x-data="select" class="relative h-6 leading-none w-36" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                            <span class="font-bold" x-text="(option == '') ? 'Newest - Oldest' : option"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul
                                class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Newest - Oldest')">
                                    Newest - Oldest
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Oldest - Newest')">
                                    Oldest - Newest
                                </li>
                            </ul>
                        </template>
                    </div>
                </div>
            </div>

            {{-- Table --}}
            <livewire:components.main.inventory.maintenance.maintenance-table />
            {{-- Pagination --}}
            <nav class="flex mt-0" aria-label="Page navigation example">
                <ul class="inline-flex items-center ml-auto -space-x-px text-xs">
                    <li>
                        <a href="" class="block py-2 pr-4 ml-0 leading-tight bg-white hover:text-[#4CAF50]">
                            <span class="sr-only">Previous</span>
                            <svg class="w-4 h-4" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="" class="py-2 px-2 leading-tight bg-white text-[#4CAF50]">1</a>
                    </li>
                    <li>
                        <a href=""
                            class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">2</a>
                    </li>
                    <li>
                        <a href=""
                            class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">3</a>
                    </li>
                    <li>
                        <a href=""
                            class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">4</a>
                    </li>
                    <li>
                        <a href=""
                            class="py-2 px-2 leading-tight text-[#6C6C6C]  bg-white hover:text-[#4CAF50]">5</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 pl-4 leading-tight bg-white hover:text-[#4CAF50]">
                            <span class="sr-only">Next</span>
                            <svg class="w-4 h-4" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        {{-- </div>
    </div> --}}
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

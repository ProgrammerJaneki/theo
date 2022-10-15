@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        {{-- Main Section --}}
        <div class="bg-white rounded-md px-9 pb-9">
            {{-- Upper Part --}}
            <div class="flex items-center justify-between w-full pt-5 pb-0 ">
                <a class="bg-[#4CAF50] text-[#FFFFFF] flex items-center py-3 px-6 gap-x-2 rounded-md text-xs hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                    href="{{ route('add-employee') }}">
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z"
                            fill="currentColor" />
                        <path
                            d="M8 4C8.13261 4 8.25979 4.05268 8.35355 4.14645C8.44732 4.24021 8.5 4.36739 8.5 4.5V7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H8.5V11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H7.5V4.5C7.5 4.36739 7.55268 4.24021 7.64645 4.14645C7.74021 4.05268 7.86739 4 8 4Z"
                            fill="currentColor" />
                    </svg>
                    <span>Add New</span>
                </a>
                <div class="flex items-center space-x-3">
                    {{-- Edit --}}
                    <button>
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.5123 3.41315L20.2117 7.11263C20.3676 7.26848 20.3676 7.52277 20.2117 7.67862L11.2543 16.6361L7.44816 17.0585C6.93959 17.116 6.50894 16.6853 6.56636 16.1767L6.9888 12.3706L15.9463 3.41315C16.1021 3.2573 16.3564 3.2573 16.5123 3.41315ZM23.1566 2.47393L21.1551 0.472444C20.5317 -0.150971 19.5186 -0.150971 18.8911 0.472444L17.4392 1.92434C17.2833 2.0802 17.2833 2.33448 17.4392 2.49034L21.1387 6.18981C21.2945 6.34566 21.5488 6.34566 21.7047 6.18981L23.1566 4.73791C23.78 4.11039 23.78 3.09735 23.1566 2.47393ZM15.7494 14.1999V18.3751H2.6249V5.25059H12.0499C12.1812 5.25059 12.3042 5.19727 12.3986 5.10704L14.0391 3.46647C14.3508 3.15477 14.1294 2.62568 13.6905 2.62568H1.96868C0.881803 2.62568 0 3.50749 0 4.59436V19.0313C0 20.1182 0.881803 21 1.96868 21H16.4056C17.4925 21 18.3743 20.1182 18.3743 19.0313V12.5593C18.3743 12.1204 17.8452 11.9031 17.5335 12.2107L15.893 13.8512C15.8027 13.9456 15.7494 14.0686 15.7494 14.1999Z"
                                fill="#333443" />
                        </svg>
                    </button>
                    {{-- Print --}}
                    <button>
                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.25 0C6.65326 0 6.08097 0.237053 5.65901 0.65901C5.23705 1.08097 5 1.65326 5 2.25V3H3.5C2.70435 3 1.94129 3.31607 1.37868 3.87868C0.816071 4.44129 0.5 5.20435 0.5 6V12.75C0.5 13.3467 0.737053 13.919 1.15901 14.341C1.58097 14.7629 2.15326 15 2.75 15H5V15.75C5 16.3467 5.23705 16.919 5.65901 17.341C6.08097 17.7629 6.65326 18 7.25 18H14.9C15.4967 18 16.069 17.7629 16.491 17.341C16.9129 16.919 17.15 16.3467 17.15 15.75V15H19.25C19.8467 15 20.419 14.7629 20.841 14.341C21.2629 13.919 21.5 13.3467 21.5 12.75V6C21.5 5.20435 21.1839 4.44129 20.6213 3.87868C20.0587 3.31607 19.2956 3 18.5 3H17V2.25C17 1.65326 16.7629 1.08097 16.341 0.65901C15.919 0.237053 15.3467 0 14.75 0H7.25ZM15.5 3H6.5V2.25C6.5 2.05109 6.57902 1.86032 6.71967 1.71967C6.86032 1.57902 7.05109 1.5 7.25 1.5H14.75C14.9489 1.5 15.1397 1.57902 15.2803 1.71967C15.421 1.86032 15.5 2.05109 15.5 2.25V3ZM7.25 12H14.9C15.0989 12 15.2897 12.079 15.4303 12.2197C15.571 12.3603 15.65 12.5511 15.65 12.75V15.75C15.65 15.9489 15.571 16.1397 15.4303 16.2803C15.2897 16.421 15.0989 16.5 14.9 16.5H7.25C7.05109 16.5 6.86032 16.421 6.71967 16.2803C6.57902 16.1397 6.5 15.9489 6.5 15.75V12.75C6.5 12.5511 6.57902 12.3603 6.71967 12.2197C6.86032 12.079 7.05109 12 7.25 12Z"
                                fill="#333443" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- Controls --}}
            <div x-data="{ filterBy: false, showOnly: false, orderBy: false }" class="flex items-center pl-3 mt-10 text-xs gap-x-8">
                {{-- Filter --}}
                <div class="flex items-center gap-x-2">
                    <label for="filter">Filter by:</label>
                    <div x-data="select" class="relative w-24 h-6 leading-none" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                            <span class="font-bold" x-text="(option == '') ? 'Status' : option"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Status')">
                                    Status
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Age')">
                                    Age
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Department')">
                                    Department
                                </li>
                            </ul>
                        </template>
                    </div>
                </div>
                {{-- Show only --}}
                <div class="flex items-center gap-x-2">
                    <h2>Show only:</h2>
                    <div x-data="select" class="relative w-24 h-6 leading-none" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                            <span class="font-bold" x-text="(option == '') ? 'Active' : option"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Status')">
                                    Status
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Active')">
                                    Active
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Inactive')">
                                    Inactive
                                </li>
                            </ul>
                        </template>
                    </div>
                </div>
                {{-- Order --}}
                <div class="flex items-center gap-x-2">
                    <label for="order">Order:</label>
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
                            <ul class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Newest - Oldest')">
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
            <livewire:components.main.manpower.employe-list.employee-info>
                {{-- Bottom --}}
                <div class="flex items-center justify-between pl-3 mt-8 text-xs">
                    <div class="flex space-x-1">
                        <h2>Showing</h2>
                        <div>
                            <span>12</span>/<span>303</span>
                        </div>
                    </div>
                    {{-- Page nav --}}
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="" class="block py-2 pr-4 ml-0 leading-tight bg-white hover:text-[#4CAF50]">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-4 h-4" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="" class="py-2 px-2 leading-tight bg-white text-[#4CAF50] ">1</a>
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
                                    <svg class="w-4 h-4" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
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

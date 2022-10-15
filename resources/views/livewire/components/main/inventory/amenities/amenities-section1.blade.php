@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="min-h-screen px-8 pb-5 bg-white rounded-md">
            {{-- Top --}}
            <div x-data="{ showAll: true, showElectronics: false, showFurnitures: false, showFoodBeve: false }" class="w-full pt-5 pb-0 space-y-11 ">
                <h2 class="font-bold">Amenities</h2>
                <div class="flex items-center justify-between text-xs">
                    {{-- Left --}}
                    <div class="flex gap-x-6">
                        <div class="flex">
                            <button
                                @click="showAll = true, showElectronics = false, showFurnitures = false, showFoodBeve = false"
                                :class=" showAll ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                                class="rounded-l-md py-3 px-7 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                                type="button">All</button>
                            <button
                                @click="showElectronics = true, showAll = false, showFurnitures = false, showFoodBeve = false"
                                :class=" showElectronics ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                                class="py-3 px-8 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                                type="button">Electronics</button>
                            <button
                                @click="showFurnitures = true, showAll = false, showElectronics = false, showFoodBeve = false"
                                :class=" showFurnitures ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                                class="py-3 px-8 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                                type="button">Furnitures</button>
                            <button
                                @click="showFoodBeve = true, showAll = false, showElectronics = false, showFurnitures = false"
                                :class=" showFoodBeve ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                                class="px-5 py-3 transition-all duration-150 ease-linear rounded-r-md" type="button">Food &
                                Beverage</button>
                        </div>
                    </div>
                    {{-- Right --}}
                    <div class="flex items-center gap-x-6">
                        <button
                            class="border border-[#AF4C4C] hover:bg-[#AF4C4C] text-[#AF4C4C] hover:text-[#FFFFFF] flex items-center justify-center py-3 gap-x-2 w-40 rounded-md text-xs hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear">
                            <svg class="w-4 h-4" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.33333 13.6663H2.66667C2.31304 13.6663 1.97391 13.5259 1.72386 13.2758C1.47381 13.0258 1.33333 12.6866 1.33333 12.333V3.66634H0V2.33301H2.66667V1.66634C2.66667 1.31272 2.80714 0.97358 3.05719 0.723532C3.30724 0.473484 3.64638 0.333008 4 0.333008H8C8.35362 0.333008 8.69276 0.473484 8.94281 0.723532C9.19286 0.97358 9.33333 1.31272 9.33333 1.66634V2.33301H12V3.66634H10.6667V12.333C10.6667 12.6866 10.5262 13.0258 10.2761 13.2758C10.0261 13.5259 9.68696 13.6663 9.33333 13.6663ZM2.66667 3.66634V12.333H9.33333V3.66634H2.66667ZM4 1.66634V2.33301H8V1.66634H4Z"
                                    fill="currentColor" />
                            </svg>

                            <span>Delete Asset</span>
                        </button>
                        <a class="bg-[#4CAF50] border text-[#FFFFFF] flex items-center justify-center py-3 gap-x-2 w-40 rounded-md text-xs hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                            href="">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z"
                                    fill="currentColor" />
                                <path
                                    d="M8 4C8.13261 4 8.25979 4.05268 8.35355 4.14645C8.44732 4.24021 8.5 4.36739 8.5 4.5V7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H8.5V11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H7.5V4.5C7.5 4.36739 7.55268 4.24021 7.64645 4.14645C7.74021 4.05268 7.86739 4 8 4Z"
                                    fill="currentColor" />
                            </svg>
                            <span>Create New</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Body --}}
            <div class="flex w-full h-full gap-x-20 mt-9">
                {{-- Left --}}
                <div class="flex flex-wrap h-full gap-x-10 gap-y-9">
                    @for ($i = 0; $i < 12; $i++)
                        <button
                            class="group flex flex-col py-3 focus:ring-4 ring-[#4CAF50] px-2 rounded-xl mt-auto gap-y-3 border border-[#AAAAAA] w-40 h-40"
                            type="button">
                            <img class="object-cover rounded-md w-44 h-28"
                                src="{{ asset('images/main/dashboard/bed.png') }}" alt="">
                            <h2 class="text-xs font-bold">Smart TV</h2>
                        </button>
                    @endfor
                </div>
                {{-- Right --}}
                <div class="border border-[#A7A7A7] py-6 px-4 rounded-xl min-w-[22rem] ">
                    <h2 class="font-bold ">ID: <span>EA001212</span></h2>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

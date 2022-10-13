@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="bg-white rounded-md px-7 pb-9">
            {{-- Top --}}
            <div x-data="{ showAll: true, showPublished: false, showDraft: false, showSaved: false }" class="flex items-center justify-between w-full pt-5 pb-0 text-xs ">
                {{-- Left --}}
                <div class="flex">
                    <button @click="showAll = true, showPublished = false, showDraft = false, showSaved = false"
                        :class=" showAll ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                        class="rounded-l-md py-3 px-5 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                        type="button">All</button>
                    <button @click="showPublished = true, showAll = false, showDraft = false, showSaved = false"
                        :class=" showPublished ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                        class="py-3 px-8 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                        type="button">Published</button>
                    <button @click="showDraft = true, showAll = false, showPublished = false, showSaved = false"
                        :class=" showDraft ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                        class="py-3 px-11 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                        type="button">Draft</button>
                    <button @click="showSaved = true, showAll = false, showPublished = false, showDraft = false"
                        :class=" showSaved ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                        class="px-8 py-3 transition-all duration-150 ease-linear rounded-r-md" type="button">Saved</button>
                </div>
                {{-- Right --}}
                <a class="bg-[#4CAF50] text-[#FFFFFF] flex items-center py-3 px-6 gap-x-2 rounded-md text-xs hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                    href="{{ route('add-job') }}">
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
            </div>
            {{-- Controls --}}
            <div x-data="{ showDepartment: false, showPosition: false }" class="flex items-center mt-10 gap-x-10">
                {{-- Department --}}
                <div class="flex items-center gap-x-4">
                    <h2>Department</h2>
                    <div class="relative font-bold">
                        <button @click="showDepartment = !showDepartment" @click.outside="showDepartment = false"
                            class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-2 px-2 w-[248px] gap-x-1"
                            type="button">
                            <span class="">All</span>
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        {{-- dropdown --}}
                        <template x-if="showDepartment">
                            <div class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[248px]">
                                <ul class="text-left ">
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">House Keeping</li>
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
                </div>
                {{-- Position --}}
                <div class="flex items-center gap-x-4">
                    <h2>Position</h2>
                    <div class="relative font-bold">
                        <button @click="showPosition = !showPosition" @click.outside="showPosition = false"
                            class="flex justify-between items-center border border-[#D9D9D9] rounded-md py-2 px-2 w-[248px] gap-x-1"
                            type="button">
                            <span class="">All</span>
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.24701 7.14L0.451011 1.658C-0.114989 1.013 0.345011 3.67706e-07 1.20401 3.67706e-07H10.796C10.9883 -0.000164459 11.1765 0.0550878 11.3381 0.159141C11.4998 0.263194 11.628 0.411637 11.7075 0.586693C11.7869 0.761749 11.8142 0.955998 11.7861 1.14618C11.758 1.33636 11.6757 1.51441 11.549 1.659L6.75301 7.139C6.65915 7.24641 6.5434 7.3325 6.41352 7.39148C6.28364 7.45046 6.14265 7.48098 6.00001 7.48098C5.85737 7.48098 5.71638 7.45046 5.5865 7.39148C5.45663 7.3325 5.34087 7.24641 5.24701 7.139V7.14Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        {{-- dropdown --}}
                        <template x-if="showPosition">
                            <div class="absolute right-0 mb-10 z-50 mt-1 bg-white border-2 rounded-md w-[248px]">
                                <ul class="text-left ">
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Room Attendant</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Line Cook</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Electrician</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Receptionist</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Purchasing Associate</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Director of Sales & Marketing</li>
                                    <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Network Administrator</li>
                                </ul>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            {{-- Job Info --}}
            <div class="flex flex-wrap w-full gap-x-4 gap-y-9 mt-9">
                {{-- 1 --}}
                <div class="flex flex-col py-5 px-6 border-y-4 border-[#4CAF50] rounded-md w-[238px] h-[296px] shadow-lg">
                    {{-- top --}}
                    <div class="space-y-4 leading-none">
                        <h2>House Keeping</h2>
                        <h2 class="font-bold">Room Attendant</h2>
                    </div>
                    <div class="mt-12 space-y-5 leading-none">
                        <h2>Applications</h2>
                        <div class="flex gap-x-7">
                            <h2>Total:</h2>
                            <h2 class="font-bold">28</h2>
                        </div>
                        <div class="flex gap-x-8">
                            <h2>New:</h2>
                            <h2 class="font-bold">16</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-2 mt-auto font-bold text-[#4CAF50]">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM17.1489 5.6206L19.6421 8.11376L11.855 15.9024L9.37646 18.3794L6.8833 15.8862L4.3579 13.3594L6.83496 10.8823L9.36036 13.4092L17.1489 5.6206Z"
                                fill="currentColor" />
                        </svg>
                        <h2>Published</h2>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="flex flex-col py-5 px-6 border-y-4 border-[#4CAF50] rounded-md w-[238px] h-[296px] shadow-lg">
                    {{-- top --}}
                    <div class="space-y-4 leading-none">
                        <h2>Kitchen</h2>
                        <h2 class="font-bold">Line Cook</h2>
                    </div>
                    <div class="mt-12 space-y-5 leading-none">
                        <h2>Applications</h2>
                        <div class="flex gap-x-7">
                            <h2>Total:</h2>
                            <h2 class="font-bold">33</h2>
                        </div>
                        <div class="flex gap-x-8">
                            <h2>New:</h2>
                            <h2 class="font-bold">12</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-2 mt-auto font-bold text-[#4CAF50]">
                        <svg class="w-6 h-6" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.2076 0.399902H2.80002C1.47882 0.399902 0.400024 1.4799 0.400024 2.7999V17.1999C0.400024 18.5199 1.47882 19.5999 2.80002 19.5999H17.2C18.5212 19.5999 19.6 18.5199 19.6 17.1999V4.1523L16.2076 0.399902ZM14.8 7.5999C14.8 8.2587 14.26 8.7999 13.6 8.7999H6.40002C5.74002 8.7999 5.20002 8.2587 5.20002 7.5999V1.5999H14.8V7.5999ZM13.6 2.7999H11.2V7.5999H13.6V2.7999Z"
                                fill="currentColor" />
                        </svg>
                        <h2>Saved</h2>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="flex flex-col py-5 px-6 border-y-4 border-[#333443] rounded-md w-[238px] h-[296px] shadow-lg">
                    {{-- top --}}
                    <div class="space-y-4 leading-none">
                        <h2>Maintenance</h2>
                        <h2 class="font-bold">Electrician</h2>
                    </div>
                    <div class="mx-auto space-y-5 mt-9">
                        <svg width="112" height="112" viewBox="0 0 112 112" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M28 21H70V28H28V21ZM28 35H70V42H28V35ZM28 49H49V56H28V49ZM28 84H42V91H28V84Z"
                                fill="#D9D9D9" />
                            <path
                                d="M103.975 67.5255L93.4745 57.0255C92.8182 56.3694 91.9281 56.0007 91 56.0007C90.0719 56.0007 89.1818 56.3694 88.5255 57.0255L56 89.551V105H71.449L103.975 72.4745C104.631 71.8182 104.999 70.9281 104.999 70C104.999 69.0719 104.631 68.1818 103.975 67.5255ZM68.551 98H63V92.449L80.5 74.949L86.051 80.5L68.551 98ZM91 75.551L85.449 70L91 64.449L96.551 70L91 75.551ZM42 105H21C19.1441 104.998 17.3647 104.26 16.0523 102.948C14.7399 101.635 14.0019 99.8559 14 98V14C14.0019 12.1441 14.7399 10.3647 16.0523 9.0523C17.3647 7.73995 19.1441 7.00185 21 7H77C78.8559 7.00185 80.6354 7.73995 81.9477 9.0523C83.2601 10.3647 83.9981 12.1441 84 14V49H77V14H21V98H42V105Z"
                                fill="#D9D9D9" />
                        </svg>
                    </div>
                    <div class="flex items-center gap-x-2 mt-auto font-bold text-[#D9D9D9]">
                        <h2>Draft</h2>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="flex flex-col py-5 px-6 border-y-4 border-[#4CAF50] rounded-md w-[238px] h-[296px] shadow-lg">
                    {{-- top --}}
                    <div class="space-y-4 leading-none">
                        <h2>Front Office</h2>
                        <h2 class="font-bold">Receptionist</h2>
                    </div>
                    <div class="mt-12 space-y-5 leading-none">
                        <h2>Applications</h2>
                        <div class="flex gap-x-7">
                            <h2>Total:</h2>
                            <h2 class="font-bold">78</h2>
                        </div>
                        <div class="flex gap-x-8">
                            <h2>New:</h2>
                            <h2 class="font-bold">21</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-2 mt-auto font-bold text-[#4CAF50]">
                        <svg class="w-6 h-6" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.2076 0.399902H2.80002C1.47882 0.399902 0.400024 1.4799 0.400024 2.7999V17.1999C0.400024 18.5199 1.47882 19.5999 2.80002 19.5999H17.2C18.5212 19.5999 19.6 18.5199 19.6 17.1999V4.1523L16.2076 0.399902ZM14.8 7.5999C14.8 8.2587 14.26 8.7999 13.6 8.7999H6.40002C5.74002 8.7999 5.20002 8.2587 5.20002 7.5999V1.5999H14.8V7.5999ZM13.6 2.7999H11.2V7.5999H13.6V2.7999Z"
                                fill="currentColor" />
                        </svg>
                        <h2>Published</h2>
                    </div>
                </div>
                {{-- 5 --}}
                <div class="flex flex-col py-5 px-6 border-y-4 border-[#333443] rounded-md w-[238px] h-[296px] shadow-lg">
                    {{-- top --}}
                    <div class="space-y-4 leading-none">
                        <h2>Purchasing</h2>
                        <h2 class="font-bold">Purchasing Associate</h2>
                    </div>
                    <div class="mx-auto space-y-5 mt-9">
                        <svg width="112" height="112" viewBox="0 0 112 112" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M28 21H70V28H28V21ZM28 35H70V42H28V35ZM28 49H49V56H28V49ZM28 84H42V91H28V84Z"
                                fill="#D9D9D9" />
                            <path
                                d="M103.975 67.5255L93.4745 57.0255C92.8182 56.3694 91.9281 56.0007 91 56.0007C90.0719 56.0007 89.1818 56.3694 88.5255 57.0255L56 89.551V105H71.449L103.975 72.4745C104.631 71.8182 104.999 70.9281 104.999 70C104.999 69.0719 104.631 68.1818 103.975 67.5255ZM68.551 98H63V92.449L80.5 74.949L86.051 80.5L68.551 98ZM91 75.551L85.449 70L91 64.449L96.551 70L91 75.551ZM42 105H21C19.1441 104.998 17.3647 104.26 16.0523 102.948C14.7399 101.635 14.0019 99.8559 14 98V14C14.0019 12.1441 14.7399 10.3647 16.0523 9.0523C17.3647 7.73995 19.1441 7.00185 21 7H77C78.8559 7.00185 80.6354 7.73995 81.9477 9.0523C83.2601 10.3647 83.9981 12.1441 84 14V49H77V14H21V98H42V105Z"
                                fill="#D9D9D9" />
                        </svg>
                    </div>
                    <div class="flex items-center gap-x-2 mt-auto font-bold text-[#D9D9D9]">
                        <h2>Draft</h2>
                    </div>
                </div>
                {{-- 6 --}}
                <div class="flex flex-col py-5 px-6 border-y-4 border-[#4CAF50] rounded-md w-[238px] h-[296px] shadow-lg">
                    {{-- top --}}
                    <div class="space-y-4 leading-none">
                        <h2>Sales & Marketing</h2>
                        <h2 class="font-bold">Director of Sales & Marketing</h2>
                    </div>
                    <div class="mt-12 space-y-5 leading-none">
                        <h2>Applications</h2>
                        <div class="flex gap-x-7">
                            <h2>Total:</h2>
                            <h2 class="font-bold">6</h2>
                        </div>
                        <div class="flex gap-x-8">
                            <h2>New:</h2>
                            <h2 class="font-bold">1</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-2 mt-auto font-bold text-[#4CAF50]">
                        <svg class="w-6 h-6" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.2076 0.399902H2.80002C1.47882 0.399902 0.400024 1.4799 0.400024 2.7999V17.1999C0.400024 18.5199 1.47882 19.5999 2.80002 19.5999H17.2C18.5212 19.5999 19.6 18.5199 19.6 17.1999V4.1523L16.2076 0.399902ZM14.8 7.5999C14.8 8.2587 14.26 8.7999 13.6 8.7999H6.40002C5.74002 8.7999 5.20002 8.2587 5.20002 7.5999V1.5999H14.8V7.5999ZM13.6 2.7999H11.2V7.5999H13.6V2.7999Z"
                                fill="currentColor" />
                        </svg>
                        <h2>Published</h2>
                    </div>
                </div>
                {{-- 7 --}}
                <div class="flex flex-col py-5 px-6 border-y-4 border-[#4CAF50] rounded-md w-[238px] h-[296px] shadow-lg">
                    {{-- top --}}
                    <div class="space-y-4 leading-none">
                        <h2>IT</h2>
                        <h2 class="font-bold">Network Administrator</h2>
                    </div>
                    <div class="mt-12 space-y-5 leading-none">
                        <h2>Applications</h2>
                        <div class="flex gap-x-7">
                            <h2>Total:</h2>
                            <h2 class="font-bold">8</h2>
                        </div>
                        <div class="flex gap-x-8">
                            <h2>New:</h2>
                            <h2 class="font-bold">3</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-2 mt-auto font-bold text-[#4CAF50]">
                        <svg class="w-6 h-6" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.2076 0.399902H2.80002C1.47882 0.399902 0.400024 1.4799 0.400024 2.7999V17.1999C0.400024 18.5199 1.47882 19.5999 2.80002 19.5999H17.2C18.5212 19.5999 19.6 18.5199 19.6 17.1999V4.1523L16.2076 0.399902ZM14.8 7.5999C14.8 8.2587 14.26 8.7999 13.6 8.7999H6.40002C5.74002 8.7999 5.20002 8.2587 5.20002 7.5999V1.5999H14.8V7.5999ZM13.6 2.7999H11.2V7.5999H13.6V2.7999Z"
                                fill="currentColor" />
                        </svg>
                        <h2>Published</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

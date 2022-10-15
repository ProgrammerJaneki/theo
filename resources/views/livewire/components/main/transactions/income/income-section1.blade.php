@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="text-xs bg-white rounded-md px-7 pb-9">
            {{-- Top --}}
            <div class="flex justify-between w-full pt-5 pb-0 ">
                <h1 class="text-base font-bold">Monday, 23 August, 2022</h1>
                <a class="bg-[#4CAF50] text-[#FFFFFF] flex items-center py-3 px-6 gap-x-2 rounded-md hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                    href="{{ route('add-job') }}">
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
            {{-- Buttons --}}
            <div x-data="{ pickShow: true, pickFacilities: false, pickWalkIns: false, pickEvents: false }" class="flex items-center text-xs gap-x-8">
                <div class="flex">
                    <button @click="pickShow = true, pickFacilities = false, pickWalkIns = false, pickEvents = false"
                        :class=" pickShow ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                        class="rounded-l-md py-3 px-7 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                        type="button">All</button>
                    <button @click="pickFacilities = true, pickShow = false, pickWalkIns = false, pickEvents = false"
                        :class=" pickFacilities ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                        class="py-3 px-9 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                        type="button">Facilities</button>
                    <button @click="pickWalkIns = true, pickShow = false, pickFacilities = false, pickEvents = false"
                        :class=" pickWalkIns ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                        class="py-3 px-9 border-r border-[#C8C8C8] transition-all duration-150 ease-linear"
                        type="button">Walk-Ins</button>
                    <button @click="pickEvents = true, pickShow = false, pickFacilities = false, pickWalkIns = false"
                        :class=" pickEvents ? 'text-[#FFFFFF] bg-[#4CAF50]' : 'text-[#333443] bg-[#D9D9D9]'"
                        class="px-10 py-3 transition-all duration-150 ease-linear rounded-r-md"
                        type="button">Events</button>
                </div>
                <button
                    class="flex justify-center gap-x-2 text-[#4CAF50] hover:text-[#FFFFFF] hover:bg-[#4CAF50] border-[#4CAF50] px-3 py-3 border rounded-md"
                    type="button">
                    <svg class="w-4 h-4" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.71429 1.15625V2.3125H10.2857V1.15625C10.2857 0.517783 10.7964 0 11.4286 0C12.0607 0 12.5714 0.517783 12.5714 1.15625V2.3125H14.2857C15.2321 2.3125 16 3.08899 16 4.04688V5.78125H0V4.04688C0 3.08899 0.7675 2.3125 1.71429 2.3125H3.42857V1.15625C3.42857 0.517783 3.93929 0 4.57143 0C5.20357 0 5.71429 0.517783 5.71429 1.15625ZM0 6.9375H16V16.7656C16 17.7231 15.2321 18.5 14.2857 18.5H1.71429C0.7675 18.5 0 17.7231 0 16.7656V6.9375ZM2.28571 10.9844C2.28571 11.3023 2.54143 11.5625 2.85714 11.5625H4C4.31429 11.5625 4.57143 11.3023 4.57143 10.9844V9.82812C4.57143 9.51016 4.31429 9.25 4 9.25H2.85714C2.54143 9.25 2.28571 9.51016 2.28571 9.82812V10.9844ZM6.85714 10.9844C6.85714 11.3023 7.11429 11.5625 7.42857 11.5625H8.57143C8.88571 11.5625 9.14286 11.3023 9.14286 10.9844V9.82812C9.14286 9.51016 8.88571 9.25 8.57143 9.25H7.42857C7.11429 9.25 6.85714 9.51016 6.85714 9.82812V10.9844ZM12 9.25C11.6857 9.25 11.4286 9.51016 11.4286 9.82812V10.9844C11.4286 11.3023 11.6857 11.5625 12 11.5625H13.1429C13.4571 11.5625 13.7143 11.3023 13.7143 10.9844V9.82812C13.7143 9.51016 13.4571 9.25 13.1429 9.25H12ZM2.28571 15.6094C2.28571 15.9273 2.54143 16.1875 2.85714 16.1875H4C4.31429 16.1875 4.57143 15.9273 4.57143 15.6094V14.4531C4.57143 14.1352 4.31429 13.875 4 13.875H2.85714C2.54143 13.875 2.28571 14.1352 2.28571 14.4531V15.6094ZM7.42857 13.875C7.11429 13.875 6.85714 14.1352 6.85714 14.4531V15.6094C6.85714 15.9273 7.11429 16.1875 7.42857 16.1875H8.57143C8.88571 16.1875 9.14286 15.9273 9.14286 15.6094V14.4531C9.14286 14.1352 8.88571 13.875 8.57143 13.875H7.42857ZM11.4286 15.6094C11.4286 15.9273 11.6857 16.1875 12 16.1875H13.1429C13.4571 16.1875 13.7143 15.9273 13.7143 15.6094V14.4531C13.7143 14.1352 13.4571 13.875 13.1429 13.875H12C11.6857 13.875 11.4286 14.1352 11.4286 14.4531V15.6094Z"
                            fill="currentColor" />
                    </svg>
                    <span>Calendar View</span>
                </button>
            </div>
            {{-- Monitoring --}}
            <div class="flex w-full mt-6 gap-x-6">
                {{-- 1 --}}
                <div class="border-2 border-[#AAAAAA] p-4 space-y-4 rounded-xl w-[240px] h-[110px]">
                    <h2 class="font-bold">Current Occupancy</h2>
                    <div class="flex items-center justify-center w-full gap-x-2">
                        <svg width="20" height="32" viewBox="0 0 20 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 7.29174C9.22417 7.29174 8.537 7.65907 8.09842 8.24332C7.53089 8.99898 6.68642 9.49824 5.75078 9.63126C4.81515 9.76429 3.86499 9.52019 3.10933 8.95266C2.35368 8.38513 1.85442 7.54066 1.72139 6.60502C1.58837 5.66939 1.83247 4.71923 2.4 3.96357C3.59649 2.36825 5.26467 1.18989 7.16816 0.59546C9.07166 0.00102626 11.114 0.0206615 13.0057 0.651584C14.8974 1.28251 16.5426 2.49272 17.7082 4.11075C18.8738 5.72879 19.5007 7.67259 19.5 9.66674V28.6667C19.5 29.5066 19.1664 30.312 18.5725 30.9059C17.9786 31.4998 17.1732 31.8334 16.3333 31.8334H3.66667C2.82681 31.8334 2.02136 31.4998 1.4275 30.9059C0.83363 30.312 0.5 29.5066 0.5 28.6667V15.2084C0.5 14.3686 0.83363 13.5631 1.4275 12.9692C2.02136 12.3754 2.82681 12.0417 3.66667 12.0417H10C10.6299 12.0417 11.234 11.7915 11.6794 11.3461C12.1248 10.9007 12.375 10.2966 12.375 9.66674C12.375 9.03685 12.1248 8.43276 11.6794 7.98736C11.234 7.54196 10.6299 7.29174 10 7.29174ZM6.4375 24.7084C6.12256 24.7084 5.82051 24.8335 5.59781 25.0562C5.37511 25.2789 5.25 25.581 5.25 25.8959C5.25 26.2109 5.37511 26.5129 5.59781 26.7356C5.82051 26.9583 6.12256 27.0834 6.4375 27.0834H13.5625C13.8774 27.0834 14.1795 26.9583 14.4022 26.7356C14.6249 26.5129 14.75 26.2109 14.75 25.8959C14.75 25.581 14.6249 25.2789 14.4022 25.0562C14.1795 24.8335 13.8774 24.7084 13.5625 24.7084H6.4375Z"
                                fill="#59C3FF" />
                        </svg>

                        <h2 class="text-2xl font-bold">190/<span class="text-xs font-normal">303</span></h2>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="border-2 border-[#AAAAAA] p-4 space-y-4 rounded-xl w-[240px] h-[110px]">
                    <h2 class="font-bold">Vacant Rooms</h2>
                    <div class="flex items-center justify-center w-full gap-x-2">
                        <svg width="32" height="28" viewBox="0 0 32 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.4792 11.4166C28.588 11.4165 29.655 11.8395 30.4627 12.5992C31.2703 13.3588 31.7577 14.398 31.8254 15.5048L31.8334 15.7708V26.0624C31.8333 26.3633 31.719 26.6529 31.5136 26.8728C31.3082 27.0926 31.027 27.2263 30.7268 27.2468C30.4266 27.2673 30.1299 27.1731 29.8965 26.9832C29.6631 26.7934 29.5104 26.522 29.4694 26.2239L29.4584 26.0624V22.4999H2.54169V26.0624C2.54167 26.3494 2.43775 26.6266 2.24914 26.8429C2.06053 27.0592 1.79998 27.1998 1.51569 27.2388L1.35419 27.2499C1.06723 27.2499 0.789979 27.146 0.573713 26.9574C0.357448 26.7688 0.216797 26.5082 0.17777 26.2239L0.166687 26.0624V15.7708C0.166632 14.662 0.589583 13.5949 1.34927 12.7873C2.10895 11.9796 3.14814 11.4922 4.25485 11.4245L4.52085 11.4166H27.4792ZM7.68752 0.333252H24.3125C25.4213 0.333197 26.4883 0.756148 27.296 1.51583C28.1036 2.27552 28.591 3.3147 28.6588 4.42142L28.6667 4.68742V9.83325H23.9167L23.9056 9.648C23.8639 9.29458 23.7044 8.9655 23.4528 8.71385C23.2011 8.46221 22.872 8.30268 22.5186 8.261L22.3334 8.24992H19.1667C18.7789 8.24997 18.4046 8.39235 18.1148 8.65005C17.825 8.90775 17.6398 9.26285 17.5944 9.648L17.5834 9.83325H14.4167L14.4056 9.648C14.3639 9.29458 14.2044 8.9655 13.9528 8.71385C13.7011 8.46221 13.372 8.30268 13.0186 8.261L12.8334 8.24992H9.66669C9.27888 8.24997 8.90457 8.39235 8.61476 8.65005C8.32496 8.90775 8.13981 9.26285 8.09444 9.648L8.08335 9.83325H3.33335V4.68742C3.3333 3.57863 3.75625 2.51159 4.51593 1.70395C5.27562 0.896305 6.3148 0.408906 7.42152 0.341169L7.68752 0.333252Z"
                                fill="#6C6C6C" />
                        </svg>
                        <h2 class="text-2xl font-bold">100</h2>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="border-2 border-[#AAAAAA] p-4 space-y-4 rounded-xl w-[240px] h-[110px]">
                    <h2 class="font-bold">Expected Arrivals</h2>
                    <div class="flex items-center justify-center w-full gap-x-2">
                        <svg width="32" height="34" viewBox="0 0 32 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.9482 0.873645C18.239 0.660898 17.4899 0.616888 16.7607 0.745128C16.0315 0.873367 15.3423 1.1703 14.7482 1.61224C14.1542 2.05417 13.6716 2.62886 13.3392 3.29043C13.0067 3.95201 12.8335 4.68214 12.8334 5.42256V28.5772C12.8335 29.3176 13.0067 30.0478 13.3392 30.7094C13.6716 31.3709 14.1542 31.9456 14.7482 32.3876C15.3423 32.8295 16.0315 33.1264 16.7607 33.2547C17.4899 33.3829 18.239 33.3389 18.9482 33.1261L28.4482 30.2761C29.4265 29.9827 30.2842 29.3816 30.894 28.5622C31.5038 27.7428 31.8332 26.7486 31.8334 25.7272V8.27256C31.8332 7.25115 31.5038 6.257 30.894 5.43758C30.2842 4.61816 29.4265 4.01713 28.4482 3.72364L18.9482 0.873645ZM11.25 4.33323C11.25 3.9133 11.0832 3.51057 10.7863 3.21364C10.4894 2.91671 10.0866 2.74989 9.66671 2.74989H4.91671C3.65693 2.74989 2.44875 3.25034 1.55795 4.14114C0.667152 5.03194 0.16671 6.24012 0.16671 7.49989V9.08323C0.16671 9.50315 0.333523 9.90588 0.630455 10.2028C0.927387 10.4997 1.33012 10.6666 1.75004 10.6666C2.16997 10.6666 2.5727 10.4997 2.86963 10.2028C3.16656 9.90588 3.33338 9.50315 3.33338 9.08323V7.49989C3.33338 7.07997 3.50019 6.67724 3.79712 6.38031C4.09406 6.08338 4.49678 5.91656 4.91671 5.91656H9.66671C10.0866 5.91656 10.4894 5.74975 10.7863 5.45281C11.0832 5.15588 11.25 4.75315 11.25 4.33323ZM1.75004 23.3332C1.33012 23.3332 0.927387 23.5 0.630455 23.797C0.333523 24.0939 0.16671 24.4966 0.16671 24.9166V26.4999C0.16671 27.7597 0.667152 28.9679 1.55795 29.8587C2.44875 30.7495 3.65693 31.2499 4.91671 31.2499H9.66671C10.0866 31.2499 10.4894 31.0831 10.7863 30.7861C11.0832 30.4892 11.25 30.0865 11.25 29.6666C11.25 29.2466 11.0832 28.8439 10.7863 28.547C10.4894 28.25 10.0866 28.0832 9.66671 28.0832H4.91671C4.49678 28.0832 4.09406 27.9164 3.79712 27.6195C3.50019 27.3225 3.33338 26.9198 3.33338 26.4999V24.9166C3.33338 24.4966 3.16656 24.0939 2.86963 23.797C2.5727 23.5 2.16997 23.3332 1.75004 23.3332ZM20.75 15.4166C21.17 15.4166 21.5727 15.5834 21.8696 15.8803C22.1666 16.1772 22.3334 16.58 22.3334 16.9999C22.3334 17.4198 22.1666 17.8225 21.8696 18.1195C21.5727 18.4164 21.17 18.5832 20.75 18.5832H20.7485C20.3285 18.5832 19.9258 18.4164 19.6289 18.1195C19.3319 17.8225 19.1651 17.4198 19.1651 16.9999C19.1651 16.58 19.3319 16.1772 19.6289 15.8803C19.9258 15.5834 20.3285 15.4166 20.7485 15.4166H20.75Z"
                                fill="#4CAF50" />
                            <path d="M1.75 16.9999H9.66667M9.66667 16.9999L6.5 13.8333M9.66667 16.9999L6.5 20.1666"
                                stroke="#4CAF50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h2 class="text-2xl font-bold">58</h2>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="border-2 border-[#AAAAAA] p-4 space-y-4 rounded-xl w-[240px] h-[110px]">
                    <h2 class="font-bold">Departure Remaining</h2>
                    <div class="flex items-center justify-center w-full gap-x-2">
                        <svg width="32" height="34" viewBox="0 0 32 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.0518 0.873645C13.761 0.660898 14.5101 0.616888 15.2393 0.745128C15.9685 0.873367 16.6577 1.1703 17.2518 1.61224C17.8458 2.05417 18.3284 2.62886 18.6608 3.29043C18.9933 3.95201 19.1665 4.68214 19.1666 5.42256V28.5772C19.1665 29.3176 18.9933 30.0478 18.6608 30.7094C18.3284 31.3709 17.8458 31.9456 17.2518 32.3876C16.6577 32.8295 15.9685 33.1264 15.2393 33.2547C14.5101 33.3829 13.761 33.3389 13.0518 33.1261L3.55179 30.2761C2.57345 29.9827 1.71577 29.3816 1.10599 28.5622C0.496203 27.7428 0.166793 26.7486 0.166626 25.7272V8.27256C0.166793 7.25115 0.496203 6.257 1.10599 5.43758C1.71577 4.61816 2.57345 4.01713 3.55179 3.72364L13.0518 0.873645ZM20.75 4.33323C20.75 3.9133 20.9168 3.51057 21.2137 3.21364C21.5106 2.91671 21.9134 2.74989 22.3333 2.74989H27.0833C28.3431 2.74989 29.5513 3.25034 30.442 4.14114C31.3328 5.03194 31.8333 6.24012 31.8333 7.49989V9.08323C31.8333 9.50315 31.6665 9.90588 31.3695 10.2028C31.0726 10.4997 30.6699 10.6666 30.25 10.6666C29.83 10.6666 29.4273 10.4997 29.1304 10.2028C28.8334 9.90588 28.6666 9.50315 28.6666 9.08323V7.49989C28.6666 7.07997 28.4998 6.67724 28.2029 6.38031C27.9059 6.08338 27.5032 5.91656 27.0833 5.91656H22.3333C21.9134 5.91656 21.5106 5.74975 21.2137 5.45281C20.9168 5.15588 20.75 4.75315 20.75 4.33323ZM30.25 23.3332C30.6699 23.3332 31.0726 23.5 31.3695 23.797C31.6665 24.0939 31.8333 24.4966 31.8333 24.9166V26.4999C31.8333 27.7597 31.3328 28.9679 30.442 29.8587C29.5513 30.7495 28.3431 31.2499 27.0833 31.2499H22.3333C21.9134 31.2499 21.5106 31.0831 21.2137 30.7861C20.9168 30.4892 20.75 30.0865 20.75 29.6666C20.75 29.2466 20.9168 28.8439 21.2137 28.547C21.5106 28.25 21.9134 28.0832 22.3333 28.0832H27.0833C27.5032 28.0832 27.9059 27.9164 28.2029 27.6195C28.4998 27.3225 28.6666 26.9198 28.6666 26.4999V24.9166C28.6666 24.4966 28.8334 24.0939 29.1304 23.797C29.4273 23.5 29.83 23.3332 30.25 23.3332ZM11.25 15.4166C10.83 15.4166 10.4273 15.5834 10.1304 15.8803C9.83344 16.1772 9.66663 16.58 9.66663 16.9999C9.66663 17.4198 9.83344 17.8225 10.1304 18.1195C10.4273 18.4164 10.83 18.5832 11.25 18.5832H11.2515C11.6715 18.5832 12.0742 18.4164 12.3711 18.1195C12.6681 17.8225 12.8349 17.4198 12.8349 16.9999C12.8349 16.58 12.6681 16.1772 12.3711 15.8803C12.0742 15.5834 11.6715 15.4166 11.2515 15.4166H11.25Z"
                                fill="#EC671C" />
                            <path
                                d="M22.3333 16.9999H30.2499M30.2499 16.9999L27.0833 13.8333M30.2499 16.9999L27.0833 20.1666"
                                stroke="#EC671C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h2 class="text-2xl font-bold">16</h2>
                    </div>
                </div>
            </div>
            {{-- Search bar + --}}
            <div class="flex items-center justify-between w-full pb-2 mt-4 ">
                {{-- Search Bar --}}
                <div class="bg-[#E6E6E6] text-[#A7A7A7] flex items-center py-3 px-5 gap-x-4 rounded-xl w-[380px]">
                    <input class="w-full bg-transparent focus:text-[#333443] focus:outline-none" type="text"
                        placeholder="Search...">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0a8.5 8.5 0 0 1 17 0Z" />
                    </svg>
                </div>
                {{-- Drop downs --}}
                <div class="flex items-center gap-x-8">
                    {{-- Order --}}
                    <div class="flex items-center gap-x-2 ">
                        <label for="order">Order:</label>
                        <div x-data="select" class="relative h-6 leading-none w-36"
                            @click.outside="open = false">
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
                    {{-- Month --}}
                    <div class="flex items-center gap-x-4">
                        <label for="month">Month:</label>
                        <div x-data="select" class="relative h-6 leading-none w-36"
                            @click.outside="open = false">
                            <button type="button" @click="toggle"
                                class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                <span class="font-bold" x-text="(option == '') ? 'October' : option"></span>
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
                                        @click="setOption('January')"> January</li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('February')">
                                        February
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('March')">
                                        March
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('April')">
                                        April
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('May')">
                                        May
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('June')">
                                        June
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('July')">
                                        July
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('August')">
                                        August
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('September')">
                                        September
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('October')">
                                        October
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('November')">
                                        November
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('December')">
                                        December
                                    </li>
                                </ul>
                            </template>
                        </div>
                    </div>
                    {{-- Year --}}
                    <div class="flex items-center gap-x-2 ">
                        <label for="year">Year:</label>
                        <div x-data="select" class="relative w-24 h-6 leading-none"
                            @click.outside="open = false">
                            <button type="button" @click="toggle"
                                class="flex items-center justify-between font-medium px-3 rounded-md w-full h-full bg-white [#FFFFFF] border border-[#D9D9D9]">
                                <span class="font-bold" x-text="(option == '') ? '2022' : option"></span>
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
                                        @click="setOption('2021')">
                                        2021
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('2022')">
                                        2022
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('2023')">
                                        2023
                                    </li>
                                    <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                        @click="setOption('2024')">
                                        2024
                                    </li>
                                </ul>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Jobs Table --}}
            <livewire:components.main.transactions.income.reservation-table />
            {{-- bottom --}}
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
                            <a href="" class="py-2 px-2 leading-tight bg-white text-[#4CAF50] "</a>
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

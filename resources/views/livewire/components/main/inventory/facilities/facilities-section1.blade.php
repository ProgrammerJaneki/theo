@extends('livewire.layouts.theo-base')
@section('main-theo')
    <div class="px-5 py-3 ml-[320px]">
        <div class="px-8 pb-5 bg-white rounded-md">
            {{-- Top --}}
            <div class="flex w-full pb-8 pt-7 ">
                <h2 class="font-bold">Facilities</h2>
            </div>
            {{-- Body --}}
            <div class="flex w-full h-full gap-x-5">
                {{-- Left --}}
                <div class="border border-[#A7A7A7] py-6 px-4 rounded-xl min-w-[16rem] min-h-[759px]">
                    {{-- Top --}}
                    <button
                        class="bg-[#4CAF50] text-[#FFFFFF] flex items-center justify-center py-3 gap-x-2 rounded-md w-full text-xs hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                        type="button">
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z"
                                fill="currentColor" />
                            <path
                                d="M8 4C8.13261 4 8.25979 4.05268 8.35355 4.14645C8.44732 4.24021 8.5 4.36739 8.5 4.5V7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H8.5V11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H7.5V4.5C7.5 4.36739 7.55268 4.24021 7.64645 4.14645C7.74021 4.05268 7.86739 4 8 4Z"
                                fill="currentColor" />
                        </svg>
                        <span>Add New</span>
                    </button>
                    {{-- Nav --}}
                    <nav class="w-full mt-10 tex-base space-y-9">
                        {{-- Rooms --}}
                        <div class="flex flex-col leading-none gap-y-4">
                            <h2 class="font-bold">Rooms</h2>
                            <ul class="flex flex-col gap-y-4">
                                <li
                                    class="{{ Request::is('inventory/facilities/standard-bedroom*')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Standard Bedroom</a>
                                </li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Deluxe Bedroom</a>
                                </li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Joint Bedroom</a>
                                </li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Connecting Bedroom</a>
                                </li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Suite</a>
                                </li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Apartment Style</a>
                                </li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Accessible Bedroom</a>
                                </li>
                            </ul>
                        </div>
                        {{-- Others --}}
                        <div class="flex flex-col leading-none gap-y-4">
                            <h2 class="font-bold">Others</h2>
                            <ul class="flex flex-col gap-y-4">
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Spa & Relaxatin</a></li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Fitness Gym</a></li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Swimming Pool</a></li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Bar</a></li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Bar</a></li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Theatre Room</a></li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Conference Hall</a></li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Parking Area</a></li>
                                <li
                                    class="{{ Request::is('inventory/facilities')
                                        ? 'text-[#4CAF50] font-semibold transition-all duration-150 ease-linear'
                                        : 'hover:text-[#4CAF50] hover:font-semibold transition-all duration-150 ease-linear' }}">
                                    <a href="">Lounge</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                {{-- Right --}}
                <div class="flex flex-col border border-[#A7A7A7] py-3 px-8 rounded-xl h-full w-full">
                    {{-- Top --}}
                    <div class="flex items-center justify-between w-full pb-2">
                        <h2 class="text-[#4CAF50] font-bold">ID: <span>RSTB001234</span></h2>
                        <a class="bg-[#4CAF50] text-[#FFFFFF] flex items-center py-3 px-6 gap-x-2 rounded-md text-xs hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                            href="">
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
                    {{-- Content --}}
                    <div class="flex flex-col w-full py-4 border-t border-[#333443]">
                        @yield('facilities')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
@endpush

{{-- <div class="flex items-center justify-between p-2 bg-red-200 rounded-md">
    <input datepicker datepicker-orientation="bottom" type="text"
        class="block w-full bg-transparent bg-white datepicker-picker focus:outline-none" placeholder="MM/DD/YYYY">
    <svg aria-hidden="true" class="w-5 h-5 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
            clip-rule="evenodd"></path>
    </svg>
</div> --}}

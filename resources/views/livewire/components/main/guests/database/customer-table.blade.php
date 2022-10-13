<div x-data="{ showCustomerInfo: false }" class="relative pl-3 overflow-x-auto">
    <template x-if="!showCustomerInfo">
        <div @click="showCustomerInfo = false"
            class="fixed inset-0 z-50 flex w-full overflow-x-hidden  text-base bg-smoke-lighter ">
            {{-- Drawer --}}
            <div
                class="ml-auto animate__animated animate__fadeInRight animate__faster flex flex-col py-12 px-6 mt-0 bg-hreem-500 overflow-y-scroll leading-none bg-white w-[574px] h-screen">
                <style>
                    ::-webkit-scrollbar {
                        width: 5px;
                    }
                </style>
                {{-- Top --}}
                <div class="flex items-center">
                    <div class="flex items-center text-xs gap-x-6 ">
                        <img class="w-16 h-16" src="{{ asset('images/main/transactions/sampleImg.png') }}" alt="">
                        <div class="flex flex-col gap-y-1">
                            <h2 class="font-bold">Juanita Josefina Manolita Teodora Pacholita</h2>
                            <pre>+63 905 123 456</pre>
                            <h2 class="text-[#4CAF50]">JuanitaJMTP@gmail.com</h2>
                        </div>
                    </div>
                </div>
                <div class="flex mt-4">
                    {{-- 1 --}}
                    <div class="bg-[#333443] text-center rounded-l-md space-y-1 py-2 w-44">
                        <h2 class="text-[#FFFFFF] text-xs">Total Booking</h2>
                        <span class="font-bold text-2xl text-[#4CAF50]">12</span>
                    </div>
                    {{-- 2 --}}
                    <div class="bg-[#333443] text-center border-x border-[#FFFFFF] space-y-1 py-2 w-44">
                        <h2 class="text-[#FFFFFF] text-xs">Total Points</h2>
                        <span class="font-bold text-2xl text-[#4CAF50]">3450</span>
                    </div>
                    {{-- 3 --}}
                    <div class="bg-[#333443] text-center rounded-r-md border-[#FFFFFF] space-y-1 py-2 w-44">
                        <h2 class="text-[#FFFFFF] text-xs">Status</h2>
                        <span class="font-bold text-2xl text-[#4CAF50]">VIP</span>
                    </div>
                </div>
                {{-- Newest booking --}}
                <div class="mt-12 space-y-4">
                    <h2 class="font-bold">Newest Booking</h2>
                    <div class="overflow-x-auto relative bg-[#4CAF50]/25 rounded-md">
                        <table class="w-full h-44 text-xs text-left pb-12 thead class="">
                            <tr class=""></tr>
                            <th scope="col" class="font-normal whitespace-nowrap py-2 px-2">
                                Standard Bedroom
                            </th>
                            <th scope="col" class="font-normal whitespace-nowrap py-2 px-6">
                                2 Adults 1 Kid
                            </th>
                            <th scope="col" class="font-normal whitespace-nowrap py-2 px-6">
                                23 Aug 2022
                            </th>
                            <th scope="col" class="font-normal whitespace-nowrap py-2 px-6">
                                Check-In
                            </th>
                            </tr>
                            </thead>
                            <tbody class="border-t border-[#333443]">
                                <tr class="pb-10">
                                    <th scope="row" class="font-normal py-4 px-2 whitespace-nowrap ">
                                    </th>
                                    <td class="py-1 px-6 ">
                                        <div class="flex flex-col mt-0 ">
                                            <h2 class="font-bold">Check-In</h2>
                                            <span class="mt-3">26 August, 2022</span>
                                            <span class="mt-1">9:00 am</span>
                                        </div>
                                    </td>
                                    <td class="py-1 px-6">
                                        <div class="flex flex-col mt-0">
                                            <h2 class="font-bold">Check-Out</h2>
                                            <span class="mt-3">26 August, 2022</span>
                                            <span class="mt-1">7:00 pm</span>
                                        </div>
                                    </td>
                                    <td class="py-1 px-6">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
                {{-- Booking History --}}
                <div class="w-full mt-12 space-y-3">
                    <h2 class="font-bold">Booking History</h2>
                    <table class="text-xs w-full fixed">
                        @for ($i = 0; $i < 11; $i++)
                            <tr class="bg-[#FFFFFF] odd:bg-[#4CAF50]/10">
                                <td class="py-3 px-2">Standard Bedroom</td>
                                <td class="py-3 px-2">2 Adults 1 Kid</td>
                                <td class="py-3 px-2">23 Aug 2022</td>
                            </tr>
                        @endfor
                    </table>
                </div>
            </div>
    </template>

    <table class="w-full text-sm text-left">
        <thead class="text-xs font-bold border-t border-[#A7A7A7]">
            <tr>
                <th scope="col" class="px-3 py-4">
                    Customer ID
                </th>
                <th scope="col" class="px-0 py-3">
                    Name
                </th>
                <th scope="col" class="px-0 py-3">
                    Email
                </th>
                <th scope="col" class="px-0 py-3 ">
                    Phone No.
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Bookings
                </th>
                <th scope="col" class="px-0 py-3">
                    Points
                </th>
                <th scope="col" class="px-3 py-3 text-right ">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>


            @for ($i = 0; $i < 12; $i++)
                <tr @click="showCustomerInfo = true" class="bg-[#FFFFFF] cursor-pointer odd:bg-[#4CAF50]/20">
                    {{-- Drawer --}}
                    <th scope="row" class="px-3 py-4 font-medium whitespace-nowrap ">
                        STB01230822
                    </th>
                    <td class="px-0 py-4">
                        Juanito Manolito Pacholito
                    </td>
                    <td class="px-0 py-4">
                        Juanita_Manolita@gmail.com
                    </td>
                    <td class="px-0 py-4">
                        +63 912 345 678
                    </td>
                    <td class="px-6 py-4 text-center">
                        1
                    </td>
                    <td class="px-0 py-4">
                        100
                    </td>
                    <td class="px-3 py-4 text-right">
                        New
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>

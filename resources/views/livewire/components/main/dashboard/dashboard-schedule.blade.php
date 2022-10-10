<div class="relative mt-6 border-2 border-[#A7A7A7] sm:rounded-xl">
    <table class="w-full text-xs ">
        <thead class="text-xs border-b border-[#A7A7A7]">
            <tr>
                <th scope="col" class=" px-0 py-0 border-r border-[#A7A7A7] w-[96px]">Time</th>
                <th scope="col" class="px-0 py-0 border-r border-[#A7A7A7]">Sunday</th>
                <th scope="col" class="px-6 py-3 border-r border-[#A7A7A7]">Monday</th>
                <th scope="col" class="px-6 py-3 border-r border-[#A7A7A7]">Tuesday</th>
                <th scope="col" class="px-6 py-3 border-r border-[#A7A7A7]">Wednesday</th>
                <th scope="col" class="px-6 py-3 border-r border-[#A7A7A7]">Thursday</th>
                <th scope="col" class="px-6 py-3 border-r border-[#A7A7A7]">Friday</th>
                <th scope="col" class="px-6 py-3 border-[#A7A7A7]">Saturday</th>
            </tr>
        </thead>
        <tbody class="">
            {{-- 2nd row --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">1:00 am</span>
                </td>
                {{-- Sunday --}}
                <td x-data="{ customerInfo: false }" scope="row"
                    class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <button class="w-full border rounded-md" @click="customerInfo = !customerInfo "
                        @click.outside="customerInfo = false" type="button">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#AF4C4C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </button>
                    {{-- Modal Info --}}
                    <template x-if="customerInfo">
                        <div
                            class="font-bold text-xs text-[#FFFFFF] z-50 absolute top-0 border rounded-md bg-[#333443] w-[232px] h-[173px]">
                            <div class="bg-[#AF4C4C] w-full overflow-hidden px-2 py-3 rounded-t-md ">
                                Josefina Martina Florida Velazco
                            </div>
                            {{-- Roomm Info --}}
                            <div class="flex flex-col w-full p-2 gap-y-2">
                                <div class="flex justify-between">
                                    <span class="font-normal">Check-in</span>
                                    <span>23 August, 2022</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-normal">Check-out</span>
                                    <span>29 August, 2022</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-normal">Room</span>
                                    <span>Standard Bedroom</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-normal">Guests</span>
                                    <span>2 Adults, 1 Child</span>
                                </div>
                                <div class="text-right">
                                    <hr>
                                    <span class="text-right ">1:00 AM</span>
                                </div>
                            </div>
                        </div>
                    </template>
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
            </tr>
            {{-- 2 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">2:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#FFC702] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
            </tr>
            {{-- 3 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">3:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="absolute left-0 z-40 w-full bg-white border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#AF4C4C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
            </tr>
            {{-- 4 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">4:00 am</span>
                    <div class="absolute -left-2">
                        <svg width="233" height="16" viewBox="0 0 233 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="9.5" y1="7.5" x2="231.5" y2="7.49998" stroke="#4CAF50"
                                stroke-width="3" stroke-linecap="round" />
                            <circle cx="8" cy="8" r="8" fill="#4CAF50" />
                        </svg>

                    </div>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="absolute left-0 z-40 w-full bg-white border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Saturday --}}
                <td x-data="{ customerInfo2: false }" scope="row" class="relative p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <button class="w-full border rounded-md" @click="customerInfo2 = !customerInfo2 "
                        @click.outside="customerInfo2 = false" type="button">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#FFC702] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </button>
                    {{-- Modal Info --}}
                    <template x-if="customerInfo2">
                        <div
                            class="font-bold text-xs text-[#FFFFFF] absolute right-0 top-0 z-50 border rounded-md bg-[#333443] w-[232px] h-[173px]">
                            <div class="bg-[#FFC702] w-full overflow-hidden px-2 py-3 rounded-t-md ">
                                Josefina Martina Florida Velazco
                            </div>
                            {{-- Roomm Info --}}
                            <div class="flex flex-col w-full p-2 gap-y-2">
                                <div class="flex justify-between">
                                    <span class="font-normal">Check-in</span>
                                    <span>23 August, 2022</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-normal">Check-out</span>
                                    <span>29 August, 2022</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-normal">Room</span>
                                    <span>Standard Bedroom</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-normal">Guests</span>
                                    <span>2 Adults, 1 Child</span>
                                </div>
                                <div class="text-right">
                                    <hr>
                                    <span class="text-right ">4:00 AM</span>
                                </div>
                            </div>
                        </div>
                    </template>
                </td>
            </tr>
            {{-- 5 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">5:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="absolute left-0 z-40 w-full bg-white border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#FFC702] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="relative mb-[50px] z-40 w-full cursor-pointer">
                        {{-- 1 --}}
                        <div class="bg-white border absolute rounded-md group hover:z-50 w-11 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">JM</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div
                            class="group absolute bg-white border rounded-md ml-[26px] hover:z-40 w-11 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">JM</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div
                            class="group absolute bg-white border rounded-md ml-[52px] hover:z-40 w-11 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#4CAF50] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">JM</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                        {{-- 4 --}}
                        <div class="group absolute bg-white border rounded-md ml-[80px] w-11 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#EC671C] text-center rounded-md h-14">
                                <span class="group-hover:hidden">JM</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#FFC702] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
            </tr>
            {{-- 6 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">6:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="absolute left-0 w-full bg-white border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">

                </td>
                {{-- Friday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="absolute mb-[50px] z-40 w-full cursor-pointer">
                        {{-- 1 --}}
                        <div class="bg-white border absolute rounded-md group hover:z-50 w-16 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">Josefina Martina</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="group absolute bg-white border rounded-md ml-11 hover:z-50 w-16 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">Josefina Martina</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
            </tr>
            {{-- 7 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">7:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#4CAF50] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="absolute left-0 z-40 w-full bg-white border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#AF4C4C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
            </tr>
            {{-- 8 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">8:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#4CAF50] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="relative mb-[50px] w-full cursor-pointer">
                        {{-- 1 --}}
                        <div class="bg-white border absolute rounded-md group hover:z-40 w-16 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">Josefina Martina</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="group absolute bg-white border rounded-md ml-11 hover:z-40 w-16 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">Josefina Martina</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
            </tr>
            {{-- 9 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">9:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="absolute left-0 z-40 w-full bg-white border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#4CAF50] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#FFC702] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#FFC702] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
            </tr>
            {{-- 10 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">10:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#AF4C4C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="relative mb-[50px] z-40 w-full cursor-pointer">
                        {{-- 1 --}}
                        <div class="bg-white border absolute rounded-md group hover:z-40 w-16 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">Josefina Martina</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="group absolute bg-white border rounded-md ml-11 hover:z-40 w-16 hover:w-[127px]">
                            <div
                                class="flex flex-col justify-center border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                                <span class="group-hover:hidden">Josefina Martina</span>
                                {{-- Show on hover --}}
                                <div class="flex-col hidden group-hover:flex">
                                    <span>Joselina Martina</span>
                                    <span>Florida Velazco</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
            </tr>
            {{-- 11 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">11:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="absolute left-0 z-40 w-full bg-white border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#4CAF50] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#EC671C] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
            </tr>
            {{-- 12 --}}
            <tr class="bg-white border-b ">
                <td scope="row" class="relative px-6 py-0 border-r border-[#A7A7A7] whitespace-nowrap ">
                    <span class="absolute top-0 ">12:00 am</span>
                </td>
                {{-- Sunday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Monday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Tuesday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#4CAF50] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Wednesday --}}
                <td scope="row" class="relative border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                    {{-- Name placeholder for the meantime --}}
                    <div class="w-full border rounded-md">
                        <div
                            class="flex flex-col justify-center w-full border-t-8 border-[#59C3FF] overflow-hidden text-center rounded-md h-14">
                            <span>Josefina Martina</span>
                            <span>Florida Velazco</span>
                        </div>
                    </div>
                </td>
                {{-- Thursday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Friday --}}
                <td scope="row" class="border-r p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
                {{-- Saturday --}}
                <td scope="row" class="p-1 border-[#A7A7A7] whitespace-nowrap ">
                </td>
            </tr>
        </tbody>
    </table>
</div>

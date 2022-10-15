<div x-data="{ showData: false, deleteData: false, close() { this.deleteData = !this.deleteData } }" class="relative py-3 border-t border-[#A7A7A&]">
    {{-- Modal --}}
    <template x-if="deleteData">
        <div
            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto animate__fadeIn animate__fastest bg-smoke-lighter">
            {{-- Saved --}}
            <div
                class="flex text-center flex-col items-center justify-center leading-none bg-white rounded-xl w-[550px] h-[377px]">
                <svg width="66" height="68" viewBox="0 0 66 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M26.5 12.25H39.5C39.5 10.5261 38.8152 8.87279 37.5962 7.65381C36.3772 6.43482 34.7239 5.75 33 5.75C31.2761 5.75 29.6228 6.43482 28.4038 7.65381C27.1848 8.87279 26.5 10.5261 26.5 12.25ZM21.625 12.25C21.625 10.7562 21.9192 9.27706 22.4909 7.89698C23.0625 6.5169 23.9004 5.26293 24.9567 4.20666C26.0129 3.15039 27.2669 2.31252 28.647 1.74087C30.0271 1.16922 31.5062 0.875 33 0.875C34.4938 0.875 35.9729 1.16922 37.353 1.74087C38.7331 2.31252 39.9871 3.15039 41.0433 4.20666C42.0996 5.26293 42.9375 6.5169 43.5091 7.89698C44.0808 9.27706 44.375 10.7562 44.375 12.25H63.0625C63.709 12.25 64.329 12.5068 64.7861 12.9639C65.2432 13.421 65.5 14.041 65.5 14.6875C65.5 15.334 65.2432 15.954 64.7861 16.4111C64.329 16.8682 63.709 17.125 63.0625 17.125H58.7725L54.97 56.4857C54.6783 59.5017 53.2736 62.3008 51.03 64.3372C48.7863 66.3736 45.8645 67.5011 42.8345 67.5H23.1655C20.1361 67.5003 17.2151 66.3724 14.9721 64.3361C12.7291 62.2998 11.3249 59.5011 11.0333 56.4857L7.2275 17.125H2.9375C2.29103 17.125 1.67105 16.8682 1.21393 16.4111C0.756807 15.954 0.5 15.334 0.5 14.6875C0.5 14.041 0.756807 13.421 1.21393 12.9639C1.67105 12.5068 2.29103 12.25 2.9375 12.25H21.625ZM28.125 27.6875C28.125 27.041 27.8682 26.421 27.4111 25.9639C26.954 25.5068 26.334 25.25 25.6875 25.25C25.041 25.25 24.421 25.5068 23.9639 25.9639C23.5068 26.421 23.25 27.041 23.25 27.6875V52.0625C23.25 52.709 23.5068 53.329 23.9639 53.7861C24.421 54.2432 25.041 54.5 25.6875 54.5C26.334 54.5 26.954 54.2432 27.4111 53.7861C27.8682 53.329 28.125 52.709 28.125 52.0625V27.6875ZM40.3125 25.25C40.959 25.25 41.579 25.5068 42.0361 25.9639C42.4932 26.421 42.75 27.041 42.75 27.6875V52.0625C42.75 52.709 42.4932 53.329 42.0361 53.7861C41.579 54.2432 40.959 54.5 40.3125 54.5C39.666 54.5 39.046 54.2432 38.5889 53.7861C38.1318 53.329 37.875 52.709 37.875 52.0625V27.6875C37.875 27.041 38.1318 26.421 38.5889 25.9639C39.046 25.5068 39.666 25.25 40.3125 25.25ZM15.8855 56.0177C16.0608 57.8268 16.9035 59.5058 18.2494 60.7274C19.5953 61.9489 21.3479 62.6254 23.1655 62.625H42.8345C44.6521 62.6254 46.4047 61.9489 47.7506 60.7274C49.0965 59.5058 49.9392 57.8268 50.1145 56.0177L53.878 17.125H12.122L15.8855 56.0177Z"
                        fill="#AF4C4C" />
                </svg>

                <div class="space-y-6 leading-none">
                    <h1 class="font-bold mt-4 text-2xl text-[#AF4C4C]">Delete?</h1>
                    <p class="text-base ">Are you sure you want to delete <br>
                        STB0123121?</p>
                </div>
                <div class="flex items-center justify-center w-full gap-x-10 mt-6">
                    <button @click="close()"
                        class="cursor-pointer flex justify-center items-center py-3 border border-[#AF4C4C] text-[#AF4C4C] hover:text-[#FFFFFF] hover:bg-[#AF4C4C] gap-x-3 rounded-md w-24 transition-all duration-150 ease-linear"
                        type="button">
                        Cancel
                    </button>
                    <button @click="close()"
                        class="cursor-pointer flex justify-center items-center py-3 text-[#FFFFFF] bg-[#4CAF50] gap-x-3 rounded-md w-24 hover:bg-[#4CAF50]/80 transition-all duration-150 ease-linear"
                        type="button">
                        Yes
                    </button>
                </div>
            </div>
        </div>
    </template>

    <table class="w-full text-xs text-left ">
        <thead class="text-xs font-bold ">
            <tr>
                <th scope="col" class="py-3 ">
                    Asset ID
                </th>
                <th scope="col" class="px-3 py-3 ">
                    Type
                </th>
                <th scope="col" class="px-0 py-3 ">
                    Room No.
                </th>
                <th scope="col" class="py-3 pl-0 ">
                    Date Recalled
                </th>
                <th scope="col" class="px-0 py-3">
                    Date Pulled-out
                </th>
                <th scope="col" class="py-3 pl-0">
                    Severity
                </th>
                <th scope="col" class="px-0 py-3 ">
                    Status
                </th>
                <th scope="col" class="px-0 py-3 text-center ">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>

            @for ($i = 0; $i < 16; $i++)
                {{-- 1 --}}
                <tr @click="showData = true" class="bg-[#FFFFFF] odd:bg-[#4CAF50]/10 cursor-pointer">
                    <th scope="row" class="py-3 pl-4 font-medium whitespace-nowrap ">
                        STB0123121
                    </th>
                    <td class="px-3 py-3">
                        Room
                    </td>
                    <td class="px-0 py-3 ">
                        123
                    </td>
                    <td class="py-3 pl-0 ">
                        23 Aug, 2022
                    </td>
                    <td class="px-0 py-3">
                        n/a
                    </td>
                    <td class="py-3 pl-0 bg-gred-200">
                        Major
                    </td>
                    <td class="px-0 py-3 ">
                        Repair
                    </td>
                    <td class="px-0 py-3 text-center">
                        <div x-data="{ showAction: false }" class="relative">
                            <button @click="showAction = !showAction" @click.outside="showAction = false"
                                type="button">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 14a2 2 0 1 0 0-4a2 2 0 0 0 0 4zm-6 0a2 2 0 1 0 0-4a2 2 0 0 0 0 4zm12 0a2 2 0 1 0 0-4a2 2 0 0 0 0 4z" />
                                </svg>
                            </button>
                            <template x-if="showAction">
                                <div class="absolute z-50 mt-1 mb-10 bg-white border rounded-md right-7 top-4 w-36">
                                    <ul class="text-left ">
                                        <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Reinstall</li>
                                        <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">View Report</li>
                                        <li @click="deleteData = !deleteData "
                                            class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Delete</li>
                                        <li class="p-2 hover:bg-[#D9D9D9] cursor-pointer">Reorder</li>
                                    </ul>
                                </div>
                            </template>
                        </div>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>

</div>

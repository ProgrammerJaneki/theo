<div class="flex w-full mt-20 gap-x-6">
    {{-- Left --}}
    <div class="flex flex-col py-4 gap-y-5">
        <div x-data="{ income: true, expenses: false, openDropdown: false }" class="flex items-center w-[654px]">
            <h1 class="text-2xl font-bold lg:mr-[60px] xl:mr-[100px]">Revenue</h1>
            {{-- Income Toggle --}}
            <div class="flex items-center gap-x-2 mr-7">
                <h2 :class=" income ? 'text-[#333443]' : 'text-[#D9D9D9]'" class="font-bold">Income</h2>
                <label for="checked-toggle" class="relative inline-flex items-center cursor-pointer">
                    <input @click=" income = !income " type="checkbox" value="" id="checked-toggle"
                        class="sr-only peer" checked="">
                    <div
                        class="w-14 h-6 bg-[#D9D9D9] rounded-full peer   peer-checked:after:translate-x-8 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#4CAF50]">
                    </div>
                </label>
            </div>
            {{-- Expenses Toggle --}}
            <div class="flex items-center gap-x-2">
                <h2 :class=" expenses ? 'text-[#333443]' : 'text-[#D9D9D9]'" class="font-bold">Expenses</h2>
                <label for="default-toggle" class="relative inline-flex items-center cursor-pointer">
                    <input @click=" expenses = !expenses " type="checkbox" value="" id="default-toggle"
                        class="sr-only peer">
                    <div
                        class="w-14 h-6 bg-[#D9D9D9] peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-8 peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#4CAF50]">
                    </div>
                </label>
            </div>
            {{-- View Toggle --}}
            <div class="relative ml-auto">
                  <div x-data="select" class="relative w-24 h-6 leading-none" @click.outside="open = false">
                        <button type="button" @click="toggle"
                            class="flex items-center font-medium justify-between rounded-md w-full h-full bg-FFFFFF] ">
                            <span class="font-bold text-[#4CAF50]" x-text="(option == '') ? 'Monthly' : option"></span>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" 
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>
                        <template x-if="open">
                            <ul class="absolute font-medium w-full top-0 mt-7 rounded-md z-50 bg-[#FFFFFF] border border-[#E6E6E6] ">
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200" @click="setOption('Monthly')">
                                    Monthly
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Weekly')">
                                    Weekly
                                </li>
                                <li class="p-2 cursor-pointer select-none hover:bg-gray-200"
                                    @click="setOption('Daily')">
                                    Daily
                                </li>
                            </ul>
                        </template>
                    </div>
            </div>
        </div>
        {{-- Chart --}}
        <div class="pb-5 border-y border-[#A7A7A7]">
            <canvas id="myChart" width="658" height="200"></canvas>
        </div>
        {{-- Totals --}}
        <div class="flex items-center ml-auto gap-x-16">
            {{-- Total Income --}}
            <div class="flex space-x-4">
                <svg width="48" height="39" viewBox="0 0 48 39" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M38 24V31M38 38V31M38 31H31M38 31H45" stroke="#4CAF50" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.66669 0.666626C5.81017 0.666626 4.02969 1.40412 2.71694 2.71688C1.40419 4.02963 0.666687 5.81011 0.666687 7.66663V26.3333C0.666687 28.1898 1.40419 29.9703 2.71694 31.283C4.02969 32.5958 5.81017 33.3333 7.66669 33.3333H24.1937C24.0645 32.5622 23.9997 31.7818 24 31C24 28.3213 24.7514 25.82 26.0557 23.6943C25.0086 24.0155 23.9008 24.0865 22.8212 23.9018C21.7417 23.717 20.7205 23.2817 19.8398 22.6306C18.9591 21.9795 18.2434 21.131 17.7502 20.1531C17.257 19.1752 17 18.0952 17 17C17.0014 15.9937 17.2198 14.9995 17.6402 14.0853C18.0605 13.171 18.6731 12.3582 19.4361 11.7021C20.1991 11.046 21.0946 10.5622 22.0615 10.2835C23.0284 10.0048 24.044 9.93788 25.0391 10.0873C26.0343 10.2366 26.9855 10.5988 27.828 11.1491C28.6705 11.6994 29.3844 12.4248 29.9211 13.276C30.4579 14.1272 30.8048 15.0841 30.9382 16.0815C31.0716 17.0789 30.9885 18.0933 30.6944 19.0556C32.8925 17.7077 35.4215 16.9961 38 17C41.5864 17 44.8577 18.3486 47.3334 20.5653V7.66663C47.3334 5.81011 46.5959 4.02963 45.2831 2.71688C43.9704 1.40412 42.1899 0.666626 40.3334 0.666626H7.66669ZM24 14.6666C23.3812 14.6666 22.7877 14.9125 22.3501 15.35C21.9125 15.7876 21.6667 16.3811 21.6667 17C21.6667 17.6188 21.9125 18.2123 22.3501 18.6499C22.7877 19.0875 23.3812 19.3333 24 19.3333C24.6189 19.3333 25.2124 19.0875 25.6499 18.6499C26.0875 18.2123 26.3334 17.6188 26.3334 17C26.3334 16.3811 26.0875 15.7876 25.6499 15.35C25.2124 14.9125 24.6189 14.6666 24 14.6666Z"
                        fill="#4CAF50" />
                </svg>
                <div class="flex flex-col">
                    <h1 class="text-2xl font-bold ">P888,657.00</h1>
                    <span class="text-[#A7A7A7]">Total Income</span>
                </div>
            </div>
            {{-- Total Expenses --}}
            <div class="flex space-x-4">
                <svg width="56" height="45" viewBox="0 0 56 45" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M46.8125 0.61548C47.635 -0.204657 48.965 -0.204657 49.7087 0.615393L55.3087 6.21461C55.7812 6.60836 56 7.14298 56 7.69948C56 8.25686 55.7812 8.79411 55.3087 9.10911L49.7087 14.7091C48.965 15.6016 47.635 15.6016 46.8125 14.7091C45.9987 13.9654 45.9987 12.6354 46.8125 11.8129L48.8337 9.72161H33.6C32.4362 9.72161 31.5 8.85536 31.5 7.69948C31.5 6.54011 32.4362 5.59948 33.6 5.59948L48.8337 5.5216L46.8125 3.58523C45.9987 2.76536 45.9987 1.43536 46.8125 0.61548V0.61548ZM9.10875 32.9091L7.16975 35.0004L22.3213 34.9216C23.5638 34.9216 24.4213 35.9366 24.4213 37.0216C24.4213 38.2554 23.5638 39.1216 22.3213 39.1216L7.17062 39.2004L9.10875 41.2129C10.0012 42.0354 10.0012 43.3654 9.10875 44.1091C8.365 45.0016 7.035 45.0016 6.21512 44.1091L0.615038 38.5091C0.2212 38.1941 -8.74741e-05 37.6604 2.59391e-08 37.0216C2.59391e-08 36.5404 0.221288 36.0066 0.615125 35.6129L6.21512 30.0129C7.035 29.1991 8.365 29.1991 9.10875 30.0129C10.0012 30.8354 10.0012 32.1654 9.10875 32.9091V32.9091ZM8.32125 5.60036H29.5662C29.2337 6.22861 29.05 6.94261 29.05 7.62161C29.05 10.2116 31.0887 12.1716 33.6 12.1716H42.0962C42.385 13.7816 43.3037 15.0941 44.5725 15.9166C44.7212 16.1266 44.8963 16.3279 45.08 16.5204C46.8563 18.2966 49.7437 18.2966 51.52 16.5204L53.2 14.8316V33.6004C53.2 36.6891 50.6887 39.2004 47.6 39.2004H26.4338C26.7663 38.5704 26.8713 37.8616 26.8713 37.0216C26.8713 34.5891 24.9113 32.4716 22.3213 32.4716L13.9037 32.5504C13.6062 31.0191 12.6963 29.7066 11.4275 28.8841C11.2788 28.6741 11.1038 28.4729 10.92 28.2804C9.14375 26.5041 6.25975 26.5041 4.48262 28.2804L2.72125 29.9691V11.2004C2.72125 8.10723 5.30687 5.60036 8.32125 5.60036ZM8.32125 16.8004C11.4887 16.8004 13.9213 14.2891 13.9213 11.2004H8.32125V16.8004ZM47.6 33.6004V28.0004C44.5112 28.0004 42 30.5116 42 33.6004H47.6ZM27.9213 30.8004C32.6375 30.8004 36.4 27.0379 36.4 22.4004C36.4 17.6841 32.6375 14.0004 27.9213 14.0004C23.2838 14.0004 19.5213 17.6841 19.5213 22.4004C19.5213 27.0379 23.2838 30.8004 27.9213 30.8004Z"
                        fill="#EC671C" />
                </svg>
                <div class="flex flex-col">
                    <h1 class="text-2xl font-bold ">29,211.00</h1>
                    <span class="text-[#A7A7A7]">Total Expenses</span>
                </div>
            </div>
        </div>

    </div>
    {{-- Right --}}
    <div class="border-2 border-[#A7A7A7] rounded-[20px] w-[356px] h-[298px]">
    </div>
</div>

@push('scripts')
    <script>
        // Chart JS
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Opt', 'Nov', 'Dec'],
                datasets: [{
                    label: '',
                    data: [650, 100, 200, 150, 200, 200, 80, 680, 1000, 880, 950, 880],
                    backgroundColor: '#4CAF50',
                    borderColor: '#4CAF50',
                    backgroundColor: [
                        '#4CAF50'
                    ],
                    borderColor: [
                        '#4CAF50'
                    ],
                    borderWidth: 0,
                    borderRadius: 5,
                    borderSkipped: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 250
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            boxWidth: 0
                        }
                    }
                }
            }
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

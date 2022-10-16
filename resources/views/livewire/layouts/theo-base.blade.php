@extends('livewire.layouts.base')
@section('main-base')
    {{-- Will Contain the header and panel --}}
    <div class="flex justify-center w-full bg-[#EAEAEA] text-[#333443] ">
        <section class="flex flex-col w-full ">
            {{-- Header --}}
            <livewire:components.main.header />
            {{-- Left Panel --}}
            <div class="">
                <div class="fixed ">
                    <livewire:components.main.main-panel />
                </div>
                    <div class="px-5 py-3 ml-[320px]">
                            <div class="min-h-screen px-6 bg-white rounded-md pb-9">
                        @yield('main-theo')
                    </div>
                </div>
            </div>
            {{-- @yield('main-theo') --}}
            {{-- <div class="fixed w-full mt-[110px]">
                <livewire:components.main.main-panel />
            </div> --}}
        </section>
    </div>
@endsection

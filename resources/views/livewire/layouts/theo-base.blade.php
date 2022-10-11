@extends('livewire.layouts.base')
@section('main-base')
    {{-- Will Contain the header and panel --}}
    <div class="flex justify-center w-full bg-[#EAEAEA] text-[#333443]">
        <section class="flex flex-col w-full">
            {{-- Header --}}
            <livewire:components.main.header />
            {{-- Left Panel --}}
            <div class="">
                <div class="fixed ">
                    <livewire:components.main.main-panel />
                </div>
                @yield('main-theo')
            </div>
            {{-- <div class="fixed w-full mt-[110px]">
                <livewire:components.main.main-panel />
            </div> --}}
        </section>
    </div>
@endsection

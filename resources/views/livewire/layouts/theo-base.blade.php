@extends('livewire.layouts.base')
@section('main-base')
    {{-- Will Contain the header and panel --}}
    <div class="flex justify-center w-full bg-[#EAEAEA]">
        <section class="w-full">
            {{-- Header --}}
            <livewire:components.main.header />
            {{-- Left Panel --}}
            <div class="flex w-full">
                <livewire:components.main.main-panel />
                @yield('main-theo')
            </div>
        </section>
    </div>
@endsection

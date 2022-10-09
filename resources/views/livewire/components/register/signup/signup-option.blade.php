@extends('livewire.layouts.registration-base')
@section('login-signup')
    {{-- Login Options --}}
    <div class="flex flex-col">
        <div class="w-full space-y-3 whitespace-nowrap">
            <a class="flex items-center py-3 bg-[#FFFFFF] gap-x-3 px-11 rounded-xl max-w-[320px] hover:ring-4" href="">
                <img src="{{ asset('images/fb.png') }}" alt="">
                <span>Continue using Facebook</span>
            </a>
            <a class="flex items-center py-3 bg-[#FFFFFF] gap-x-3 px-11 rounded-xl max-w-[320px] hover:ring-4" href="">
                <img src="{{ asset('images/google.png') }}" alt="">
                <span>Continue using Google</span>
            </a>
        </div>
        {{-- or --}}
        <div class="flex gap-x-5 my-14 justify-center items-center text-[#FFFFFF]">
            <hr class="h-[1px] bg-[#FFFFFF] w-32" />
            <span>or</span>
            <hr class="h-[1px] bg-[#FFFFFF] w-32" />
        </div>
        <a class="flex justify-center items-center py-3 bg-[#FFE600] gap-x-3 px-11 rounded-xl max-w-[320px] hover:ring-4"
            href="{{ route('create-account') }}">
            <span>Create a new account</span>
        </a>
        {{-- Signup alternative --}}
        <div class="text-center text-[#FFFFFF] mt-40">
            Already have an account? <span class="font-bold"><a href="{{ route('login-option') }}">Log in</a></span>
        </div>
    </div>
@endsection

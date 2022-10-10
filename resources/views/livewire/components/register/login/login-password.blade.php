@extends('livewire.layouts.registration-base')
@section('login-signup')
    {{-- Login Form --}}
    <div class="my-0">
        <form class="flex flex-col gap-y-4 " action="{{ route('profile-setup') }}">
            {{-- Email --}}
            <div class="space-y-2">
                <h2 class="text-[#FFFFFF]">Email</h2>
                <input class="h-12 p-4 focus-within:ring-4 w-80 rounded-xl focus:outline-none" type="text">
            </div>
            {{-- Password --}}
            <div class="space-y-2">
                <h2 class="text-[#FFFFFF]">Password</h2>
                <div
                    class="group focus-within:ring-4 bg-[#FFFFFF] p-4 border-2 border-[#F5F5F5] font-semibold text-sm rounded-xl flex items-center justify-between w-80 h-12">
                    <input class="bg-transparent border-none focus:border-none focus:outline-none" type="password">
                    {{-- <button> --}}
                    <button type="button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 12C2 12 5 5 12 5C19 5 22 12 22 12C22 12 19 19 12 19C5 19 2 12 2 12Z"
                                stroke="#B8B8BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                stroke="#B8B8BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- Remember pw --}}
            <div class="flex items-center rounded-sm group gap-x-3">
                <input class="w-5 h-5" type="checkbox" name="" id="">
                <span class="text-[#FFFFFF]">Remember me</span>
            </div>
            {{-- Login --}}
            <div class="flex flex-col text-center gap-y-10 mt-9">
                <input class="flex justify-center items-center py-3 bg-[#FFE600] gap-x-3  rounded-xl w-full hover:ring-4 cursor-pointer"
                    type="submit" value="Login">
                <a class="font-bold text-[#FFFFFF]" href="{{ 'login-forgot-password' }}">Forgot password?</a>
            </div>
        </form>
        {{-- Signup alternative --}}
        <div class="text-center text-[#FFFFFF] mt-40">
            No account yet? <span class="font-bold"><a href="{{ route('signup-option') }}">Sign Up</a></span>
        </div>
    </div>
@endsection

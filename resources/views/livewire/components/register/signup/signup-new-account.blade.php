@extends('livewire.layouts.registration-base')
@section('login-signup')
    <form class="flex flex-col gap-y-4 " action="{{ route('login-password') }}">
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
                <input class="bg-transparent focus:outline-none" type="password">
                {{-- <button> --}}
                <button type="button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 12C2 12 5 5 12 5C19 5 22 12 22 12C22 12 19 19 12 19C5 19 2 12 2 12Z" stroke="#B8B8BC"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                            stroke="#B8B8BC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        {{-- Confirm Password --}}
        <div class="space-y-2">
            <h2 class="text-[#FFFFFF]">Confirm Password</h2>
            <input class="h-12 p-4 focus-within:ring-4 w-80 rounded-xl focus:outline-none" type="text">
        </div>
        {{-- Login --}}
        <div x-data="{ openVerify: false }" class="flex flex-col text-center gap-y-5 mt-9">
            <button class="flex justify-center items-center py-3 bg-[#FFE600] gap-x-3  rounded-xl w-full hover:ring-4"
                @click=" openVerify = !openVerify " type="button">Sign Up</button>
            {{-- Modal --}}
            <template x-if="openVerify">
                <div
                    class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-lighter">
                    {{-- Processing --}}
                    <div class="absolute z-50">
                        <div
                            class="animate__animated animate__fadeOut animate__delay-2s flex flex-col items-center justify-center bg-white rounded-xl w-[550px] h-[377px]">
                            <h1 class="font-bold text-2xl text-[#4CAF50]">Processing....</h1>
                            <h2>Please wait while we create your account.</h2>
                        </div>
                    </div>
                    {{-- Success --}}
                    <div
                        class="z-50 animate__animated animate__fadeIn animate__delay-2s flex text-center flex-col items-center justify-center gap-y-20 leading-none bg-white rounded-xl w-[550px] h-[377px]">
                        <div class="space-y-4 leading-none">
                            <h1 class="font-bold text-2xl text-[#4CAF50]">Succcess!</h1>
                            <h2>You are now registered. <br>
                                Please check your email to verify your account.</h2>
                        </div>
                        <button
                            class="cursor-pointer flex justify-center items-center py-3 text-[#FFFFFF] bg-[#4CAF50] gap-x-3  rounded-xl w-80 hover:ring-4 transition-all duration-300 ease-linear"
                            type="button" @click=" openVerify = !openVerify ">Verify</button>
                    </div>
                </div>
            </template>
            <div class="text-[#FFFFFF] max-w-[300px]  text-center">
                By signing up you agree to the
                <span class="font-bold"> <a href="">Terms & Conditions</a> </span> and
                <span class="font-bold"><a href="">Privacy Policy</a></span>
            </div>
        </div>
    </form>
    {{-- Signup alternative --}}
    <div class="text-center text-[#FFFFFF] mt-12">
        Already have an account? <span class="font-bold"><a href="{{ route('login-option') }}">Log in</a></span>
    </div>
    </div>
@endsection

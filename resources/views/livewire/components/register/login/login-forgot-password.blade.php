@extends('livewire.layouts.registration-base')
@section('login-signup')
    <div>
        <form action="{{ route('login-password') }}" class="flex flex-col items-center gap-y-5 max-w-[359px]">
            {{-- Email --}}
            <div class="space-y-2">
                <h2 class="text-[#FFFFFF]">Email</h2>
                <input class="h-12 p-2 focus-within:ring-4 w-80 rounded-xl focus:outline-none" type="text">
            </div>
            <div class="text-[#FFFFFF] text-center max-w-[359px]">
                Enter the email address you used to register.
                You will receive an email to verify your account.
            </div>
            {{-- Send Email --}}
            <input class="flex justify-center items-center py-3 bg-[#FFE600] gap-x-3  rounded-xl w-80 hover:ring-4 cursor-pointer"
                type="submit" value="Send email">
            {{-- Return login --}}
            <a class="flex items-center justify-center py-3 text-[#FFFFFF] ring-2 ring-[#FFFFFF] gap-x-3 rounded-xl w-80 hover:ring-4 hover:ring-blue-500"
                href="{{ route('login-password') }}">
                <span>Return to login</span>
            </a>
        </form>
    </div>
@endsection

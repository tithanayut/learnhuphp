@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="flex flex-col items-center my-12">
        <h1 class="text-4xl font-bold text-[#ff731d]">Register</h1>

        <form method="post" class="flex flex-col gap-6 my-8">
            @csrf

            <x-form-input name="username" label="Username" />
            <x-form-input name="name" label="Name" />
            <x-form-input name="password" label="Password" type="password" />
            <x-form-input name="confirm-password" label="Confirm Password" type="password" />

            <x-submit-input value="Register" />
        </form>

        <h2 class="text-lg font-normal text-[#7f8487] my-[14px]">
            <a href="{{ route('login') }}">Already have an account? Login</Link>
        </h2>
    </div>
@endsection

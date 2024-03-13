@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="flex flex-col items-center my-12">
        <h1 class="text-4xl font-bold text-[#ff731d]">Login</h1>

        <form method="post" class="flex flex-col gap-6 my-8">
            @csrf

            <x-form-input name="username" label="Username" />
            <x-form-input name="password" label="Password" type="password" />

            <x-submit-input value="Login" />
        </form>

        <h2 class="text-lg font-normal text-[#7f8487] my-[14px]">
            <a href="{{ route('register') }}">Don't have an account? Register</Link>
        </h2>
    </div>
@endsection

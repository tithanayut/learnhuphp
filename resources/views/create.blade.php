@extends('layout')

@section('title', 'Create')

@section('css')
    @vite('resources/css/star-rating.css')
@endsection

@section('content')
    <div class="flex flex-col items-center my-12">
        <h1 class="text-4xl font-bold text-[#ff731d]">Create new content</h1>

        <form method="post" class="flex flex-col gap-6 my-8">
            @csrf

            <x-form-input name="video_url" label="Video URL" large />
            <x-form-input name="comment" label="Comment (280 characters maximum)" large maxlength="280" />

            <div class="flex items-center gap-4">
                <label for="rating" class="text-lg font-bold text-[#7f8487]">Rating</label>
                <select class="star-rating" name="rating" id="rating">
                    <option value=""></option>
                    <option value="5"></option>
                    <option value="4"></option>
                    <option value="3"></option>
                    <option value="2"></option>
                    <option value="1"></option>
                </select>
            </div>

            <x-submit-input value="Create" large />
        </form>
    </div>
@endsection

@section('javascript')
    @vite('resources/js/star-rating.js')
@endsection

@extends('pages.layouts.app')
@section('header')
    @include('pages.layouts.header')
@endsection
@section('content')
    <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4 p-5 space-y-4">
        <!-- Card 1 -->
        @forelse ($posts as $post)
        <div class="relative break-inside-avoid">
            <a href="/post/pich/{{ $post->id_unik}}" class="block">
                <!-- Gambar -->
                <div class="relative">
                    {{--  @php
                        dd($post->image)
                    @endphp  --}}
                    <img src="{{ asset('storage/'.$post->image) }}"
                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300" alt="{{ $post->name }}" />

                    <!-- Ikon Bookmark -->
                    <button class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Deskripsi -->
                <p class="mt-2 font-semibold text-gray-800">{{ $post->title }}</p>
                <div class="flex gap-2 items-center mt-1">
                    <img src="{{ asset($post->user->image) }}" class="w-8 h-8 rounded-full" alt="" />
                    <p class="text-sm text-gray-600">{{ $post->user->name }}</p>
                </div>
            </a>
        </div>
        @empty

        @endforelse

    </div>
@endsection

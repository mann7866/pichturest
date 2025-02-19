@extends('pages.layouts.app')
@section('header')
    @include('pages.layouts.header')
@endsection
@section('content')
    <ul class="flex gap-6 mt-2 justify-center items-center">
        <li class="font-semibold pb-1">
            <h1
                class="border-b-2 text-xl font-semibold border-transparent aria-[current=page]:border-gray-950 aria-[current=page]:text-gray-950">
                Dapatkan Inspirasi Anda</h1>
        </li>
    </ul>
    <!-- content -->


    <div class="overflow-x-auto bg-gray-100 shadow-lg p-5">

        <div class="flex space-x-4">
            @forelse ($keywords as $keyword)
            <form action="{{ route('pages.dashboard') }}" method="GET">
                @csrf
                <input type="hidden" name="keywords" value="{{ $keyword->name }}" >
                <button type="submit"
                    class="flex shadow-lg cursor-pointer gap-3 items-center px-4 py-2 border-1 w-auto border-gray-300 text-gray-950 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <img src="{{ asset($keyword->image) }}" class="w-10 h-10 rounded-full" alt="{{ $keyword->name }}" />
                    <span class="truncate">{{ $keyword->name }}</span>
                </button>
            </form>
            @empty
            @endforelse

        </div>

        <!-- Tambahkan lebih banyak item jika diperlukan -->
    </div>


    <div class="h-screen overflow-y-scroll bg-gray-100">
        <ul class="flex gap-6 mt-2 justify-center items-center">
            <li class="font-semibold pb-1">
                <h1
                    class="border-b-2 border-transparent aria-[current=page]:border-gray-950 font-bold aria-[current=page]:text-gray-950">
                    Papan</h1>
            </li>
        </ul>
        <ul class="flex gap-6 mt-2 justify-center items-center">
            <li class="font-semibold pb-1">
                <p
                    class="border-b-2 border-transparent aria-[current=page]:border-gray-950 text-base aria-[current=page]:text-gray-950">
                    Berikut adalah kumpulan papan yang mungkin dapat memebuhi harapan anda</p>
            </li>
        </ul>
        <div class="grid grid-cols-3 gap-6 p-8 justify-center">
            <!-- Card 1 -->
            <div class="relative rounded-lg overflow-hidden shadow-lg bg-white mx-auto">
                <a href="../pages/album.html" class="block">
                    <!-- Gambar -->
                    <div class="relative w-full h-90">
                        <img src="../images/posts/image1.jpeg"
                            class="w-90 h-90 object-cover transition-transform transform hover:scale-105" alt="Image 1" />
                        <!-- Teks di bawah gambar -->
                        <div
                            class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black to-transparent text-white">
                            <p class="text-lg text-center font-semibold">anime keren</p>
                            <p class="text-lg text-center ml-2 text-sm">Dengan ini akan mudah mencari
                                referensi anime </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 2 -->
            <div class="relative rounded-lg overflow-hidden shadow-lg bg-white mx-auto">
                <a href="../pages/album.html" class="block">
                    <!-- Gambar -->
                    <div class="relative w-full h-90">
                        <img src="../images/posts/image4.jpeg"
                            class="w-90 h-90 object-cover transition-transform transform hover:scale-105" alt="Image 1" />
                        <!-- Teks di bawah gambar -->
                        <div
                            class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black to-transparent text-white">
                            <p class="text-lg text-center font-semibold">sangar</p>
                            <p class="text-lg text-center ml-2 text-sm">kumpulan anime sangar</p>

                        </div>
                    </div>
                </a>
            </div>
            <!-- card 2 -->
            <div class="relative rounded-lg overflow-hidden shadow-lg bg-white mx-auto">
                <a href="../pages/album.html" class="block">
                    <!-- Gambar -->
                    <div class="relative w-full h-90">
                        <img src="../images/posts/image3.jpeg"
                            class="w-90 h-90 object-cover transition-transform transform hover:scale-105" alt="Image 1" />
                        <!-- Teks di bawah gambar -->
                        <div
                            class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black to-transparent text-white">
                            <p class="text-lg text-center font-semibold">sangar</p>
                            <p class="text-lg text-center ml-2 text-sm">kumpulan anime sangar</p>

                        </div>
                    </div>
                </a>
            </div>
            <!-- card 2 -->
            <div class="relative rounded-lg overflow-hidden shadow-lg bg-white mx-auto">
                <a href="../pages/album.html" class="block">
                    <!-- Gambar -->
                    <div class="relative w-full h-90">
                        <img src="../images/posts/image5.jpeg"
                            class="w-90 h-90 object-cover transition-transform transform hover:scale-105" alt="Image 1" />
                        <!-- Teks di bawah gambar -->
                        <div
                            class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black to-transparent text-white">
                            <p class="text-lg text-center font-semibold">sangar</p>
                            <p class="text-lg text-center ml-2 text-sm">kumpulan anime sangar</p>

                        </div>
                    </div>
                </a>
            </div>


        </div>
    </div>
@endsection

@extends('pages.layouts.app')
@section('content')
    <!-- content -->
    <div class="h-screen overflow-y-scroll px-2">
        <!-- profile -->

        @include('pages.profile.partials.made.card-profile')
        <!-- end profile -->

        <!-- header -->
        @include('pages.profile.partials.header')
        <!-- end header -->

        <!-- keywords -->
        <div class="overflow-x-auto whitespace-nowrap p-5 bg-white">
            <div class="flex space-x-4">

                @forelse ($keywords as $keyword)
                    @include('pages.profile.partials.made.keywords')
                @empty
                @endforelse
            </div>

        </div>
        <!-- end keywords -->


        <!-- album -->
        <div class="overflow-x-auto whitespace-nowrap p-5 bg-white">

            <!-- Album 1 -->
            @forelse ($albums as $album)
                @include('pages.profile.partials.made.album')
            @empty
            @endforelse

        </div>

        <!-- end album -->

        <!-- content made -->
        <div class="columns-4 md:columns-5 lg:columns-6 gap-4 space-y-4 p-5 bg-white space-y-4">
            <!-- Card 1 -->
            @forelse ($posts as $post)
                <div class="break-inside-avoid relative" x-data="{ showOptions: false, showEditModal: false, showDeleteModal: false }">
                    <a href="/post/pich/{{ $post->id_unik }}" class="block">

                        <img src="{{ asset('storage/' . $post->image) }}"
                            class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                            alt="Random Image" />
                        <p class="mt-2 font-semibold text-gray-800">{{ $post->name }}</p>
                        <div class="flex gap-2 items-center mt-1">
                            <img src="{{ asset($post->user->image) }}" class="w-8 h-8 rounded-full" alt="" />
                            <p class="text-sm text-gray-600">{{ $post->user->name }}</p>
                        </div>
                    </a>

                    <!-- Tombol titik tiga -->
                    <div class="absolute top-2 right-2">
                        <button @click="showOptions = !showOptions"
                            class="text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                            </svg>
                        </button>

                        <!-- Dropdown Edit & Hapus -->
                        <div x-show="showOptions" @click.away="showOptions = false"
                            class="absolute right-0 mt-2 w-32 bg-white shadow-md rounded-lg py-2" x-transition>
                            <button @click="showEditModal = true; showOptions = false"
                                class="w-full cursor-pointer px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                ✏️ Edit
                            </button>
                            <button @click="showDeleteModal = true; showOptions = false"
                                class="w-full cursor-pointer px-4 py-2 text-sm text-red-600 hover:bg-gray-100 flex items-center">
                                🗑 Hapus
                            </button>
                        </div>
                    </div>

                    <!-- Modal Edit -->
                    <div x-show="showEditModal" @click.away="showEditModal = false"
                        class="fixed inset-0 flex items-center justify-center bg-opacity-50 z-50">
                        <div class="bg-white rounded-lg shadow-lg w-200 p-6">
                            <h3 class="text-xl font-semibold mb-4">Edit Post</h3>
                            <form action="#">
                                <div class="mb-4">
                                    <label for="edit-title" class="block text-gray-700">Judul</label>
                                    <input type="text" id="edit-title"
                                        class="w-full p-2 border border-gray-300 rounded-lg"
                                        placeholder="Masukkan judul baru">
                                </div>
                                <div class="mb-4">
                                    <label for="edit-description" class="block text-gray-700">Deskripsi</label>
                                    <textarea id="edit-description" class="w-full p-2 border border-gray-300 rounded-lg" rows="4"
                                        placeholder="Masukkan deskripsi baru"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="edit-image" class="block text-gray-700">Update Foto</label>
                                    <input type="file" id="edit-image"
                                        class="w-full p-2 border border-gray-300 rounded-lg">
                                </div>
                                <div class="mb-4">
                                    <label for="edit-image" class="block text-gray-700">Tempatkan</label>
                                    <div class="relative inline-block">
                                        <!-- Tombol Dropdown -->
                                        <button id="dropdownButton"
                                            class="px-4 py-2 bg-blue-500 text-white rounded-lg flex items-center gap-2 hover:bg-blue-600 focus:outline-none">
                                            Pilih Opsi
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-4 h-4 transition-transform duration-200" id="dropdownIcon"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown Menu -->
                                        <div id="dropdownMenu"
                                            class="hidden absolute right-0 mt-2 w-60 bg-white shadow-lg rounded-lg border border-gray-200">
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Opsi
                                                1</a>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Opsi
                                                2</a>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Opsi
                                                3</a>
                                        </div>
                                    </div>

                                    <script>
                                        const dropdownButton = document.getElementById('dropdownButton');
                                        const dropdownMenu = document.getElementById('dropdownMenu');
                                        const dropdownIcon = document.getElementById('dropdownIcon');

                                        dropdownButton.addEventListener('click', () => {
                                            dropdownMenu.classList.toggle('hidden');
                                            dropdownIcon.classList.toggle('rotate-180');
                                        });

                                        // Menutup dropdown jika klik di luar
                                        document.addEventListener('click', (event) => {
                                            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                                                dropdownMenu.classList.add('hidden');
                                                dropdownIcon.classList.remove('rotate-180');
                                            }
                                        });
                                    </script>

                                </div>
                                <div class="flex justify-end space-x-2">
                                    <button type="button" @click="showEditModal = false"
                                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Batal</button>
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal Hapus -->
                    <div x-show="showDeleteModal" @click.away="showDeleteModal = false"
                        class="fixed inset-0 flex items-center justify-center bg-opacity-50 z-50">
                        <div class="bg-white rounded-lg shadow-lg w-72 p-6">
                            <h3 class="text-xl font-semibold mb-4">Hapus Post</h3>
                            <p class="text-sm text-gray-600 mb-4">Anda yakin ingin menghapus post ini? Tindakan
                                ini tidak dapat dibatalkan.</p>
                            <div class="flex justify-end space-x-2">
                                <button type="button" @click="showDeleteModal = false"
                                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Batal</button>
                                <button type="button" class="px-4 py-2 bg-red-500 text-white rounded-lg">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse


        </div>
        <!-- end content made -->

    </div>
    <!-- end content -->
@endsection

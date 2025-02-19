<div class="inline-block w-56 h-56 mr-4 relative" x-data="{ showOptions: false, showEditModal: false, showDeleteModal: false }">
    <a href="../pages/album.html" class="block">
        <!-- Gambar dengan batasan ukuran tetap -->
        <img src="../images/posts/image1.jpeg"
            class="w-56 h-56 object-cover rounded-lg shadow-lg hover:opacity-80 transition duration-300"
            alt="Random Image" />
        <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black to-transparent text-white">
            <p
                class="text-center text-base font-semibold border-b-2 border-transparent aria-[current=page]:border-gray-950 aria-[current=page]:text-gray-950 underline">
                {{ $album->name }}
            </p>
        </div>
    </a>

    <!-- Tombol titik tiga -->
    <div class="absolute top-2 right-2">
        <button @click="showOptions = !showOptions" class="text-gray-500 cursor-pointer hover:text-gray-700">
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
            <h3 class="text-xl font-semibold mb-4">Edit Album</h3>
            <form action="#">
                <div class="mb-4">
                    <label for="edit-title" class="block text-gray-700">Judul</label>
                    <input type="text" id="edit-title" class="w-full p-2 border border-gray-300 rounded-lg"
                        placeholder="Masukkan judul baru">
                </div>
                <div class="mb-4">
                    <label for="edit-description" class="block text-gray-700">Deskripsi</label>
                    <textarea id="edit-description" class="w-full p-2 border border-gray-300 rounded-lg" rows="4"
                        placeholder="Masukkan deskripsi baru"></textarea>
                </div>
                <div class="mb-4">
                    <label for="edit-image" class="block text-gray-700">Update Foto</label>
                    <input type="file" id="edit-image" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" @click="showEditModal = false"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div x-show="showDeleteModal" @click.away="showDeleteModal = false"
        class="fixed inset-0 flex items-center justify-center bg-opacity-50 z-50">
        <div class="bg-white rounded-lg shadow-lg w-96 p-6">
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

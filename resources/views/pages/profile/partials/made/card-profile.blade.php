<div class="flex-1 p-6" x-data="{ openModal: false }">
    <main>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-6 sm:p-8 bg-white shadow-xl sm:rounded-lg w-full">
                <div class="max-w-4xl mx-auto">
                    <section>
                        <div class="mt-6 space-y-6">
                            <!-- Profile Image Section -->
                            <div class="flex items-center space-x-6 justify-center">
                                <div class="relative">
                                    <img src="../images/profile/profile1.jpeg" alt="Profile Picture"
                                        class="w-28 h-28 md:w-32 md:h-32 rounded-full object-cover">
                                    <a href="../pages/editProfile.html"
                                        class="absolute bottom-0 right-0 bg-white p-2 rounded-full shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L8 9.172V12h2.828l6.586-6.586a2 2 0 000-2.828zM6 12v2h2l8.707-8.707-2-2L6 12zM4 14v2h2v-2H4z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-2">
                                        <h1 class="block font-medium text-2xl">Manrest</h1>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="text-gray-700">akunkudewe861@gmail.com</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="">0 mengikuti</span>
                                        <span class="text-gray-700">0 tayang</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tentang Section -->
                        <div class="mt-4 text-center">
                            <p class="text-gray-700 text-lg">
                                asjefasdgfhsdfvsdhfsdhfffffffffffffffffffffffffffffffffad
                                cdfsvdfdsfsdfdsbfsdfsabdfbscagdcfsdgfsadh fsfsdf dsfsdfsdhf
                            </p>
                        </div>
                    </section>
                </div>

                <!-- Tombol Buat yang Terletak di Tengah -->
                <div class="flex justify-center gap-2 mt-6">
                    <button @click="openModal = true"
                        class="flex items-center justify-center text-gray-500 hover:text-gray-700 px-4 py-2 border border-gray-300 rounded-lg transition duration-200 ease-in-out hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <span class="mr-2">Buat</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                    </button>
                    <a href="/post/create"
                        class="flex items-center justify-center text-gray-500 hover:text-gray-700 px-4 py-2 border border-gray-300 rounded-lg transition duration-200 ease-in-out hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <span class="mr-2">Buat Postingan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Modal Form -->
                <div x-show="openModal" @click.away="openModal = false"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-blur-300 bg-opacity-50">
                    <div class="bg-white p-6 rounded-lg shadow-lg w-200" x-data="{ selectedTab: 'album' }">
                        <!-- Tab Navigation -->
                        <div class="mb-4">
                            <ul class="flex space-x-4 border-b">
                                <li class="cursor-pointer px-4 py-2"
                                    :class="{ 'border-b-2 border-blue-500': selectedTab === 'album' }"
                                    @click="selectedTab = 'album'">Buat Album</li>
                                <li class="cursor-pointer px-4 py-2"
                                    :class="{ 'border-b-2 border-blue-500': selectedTab === 'kategori' }"
                                    @click="selectedTab = 'kategori'">Kata kunci</li>
                                <li class="cursor-pointer px-4 py-2"
                                    :class="{ 'border-b-2 border-blue-500': selectedTab === 'foto' }"
                                    @click="selectedTab = 'foto'">Upload Foto</li>
                            </ul>
                        </div>

                        <!-- Tab Content -->
                        <div x-show="selectedTab === 'album'">
                            <!-- Form for 'Buat Album' -->
                            <h2 class="text-xl font-semibold mb-4">Buat Album</h2>
                            <form action="#">
                                <div class="mb-4">
                                    <label for="kategori-title" class="block text-gray-700">Foto
                                        background</label>
                                    <input type="file" id="kategori-title"
                                        class="w-full p-2 border border-gray-300 rounded-lg">
                                </div>
                                <div class="mb-4">
                                    <label for="album-description" class="block text-gray-700">Tentang Album</label>
                                    <textarea id="album-description" placeholder="Masukkan tentang..." class="w-full p-2 border border-gray-300 rounded-lg"
                                        rows="4"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="album-description" class="block text-gray-700">Deskripsi Album</label>
                                    <textarea id="album-description" placeholder="Masukkan deskripsi..."
                                        class="w-full p-2 border border-gray-300 rounded-lg" rows="4"></textarea>
                                </div>
                                <div class="flex justify-end space-x-2">
                                    <button type="button" @click="openModal = false"
                                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Batal</button>
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg">Kirim</button>
                                </div>
                            </form>
                        </div>

                        <div x-show="selectedTab === 'kategori'">
                            <!-- Form for 'Kategori' -->
                            <h2 class="text-xl font-semibold mb-4">Buat kata kunci</h2>
                            <form action="#">
                                <div class="mb-4">
                                    <label for="kategori-title" class="block text-gray-700">Foto
                                        background</label>
                                    <input type="file" id="kategori-title"
                                        class="w-full p-2 border border-gray-300 rounded-lg">
                                </div>
                                <div class="mb-4">
                                    <label for="kategori-title" class="block text-gray-700">Judul</label>
                                    <input type="text" id="kategori-title" placeholder="Masukkan judul..."
                                        class="w-full p-2 border border-gray-300 rounded-lg">
                                </div>
                                <div class="mb-4">
                                    <label for="example-textarea" class="block text-gray-700">Deskripsi</label>
                                    <textarea id="example-textarea" class="w-full p-2 border border-gray-300 rounded-lg" rows="4"
                                        placeholder="Tulis deskripsi Anda di sini..."></textarea>
                                </div>
                                <div class="flex justify-end space-x-2">
                                    <button type="button" @click="openModal = false"
                                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Batal</button>
                                    <!-- <button type="button" @click="openModal = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Batal</button> -->

                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg">Kirim</button>
                                </div>
                            </form>
                        </div>

                        <div x-show="selectedTab === 'foto'">
                            <!-- Form for 'Upload Foto' -->
                            <h2 class="text-xl font-semibold mb-4">Upload Foto</h2>
                            <form action="#">
                                <div class="mb-4">
                                    <label for="foto-upload" class="block text-gray-700">Pilih
                                        Foto</label>
                                    <input type="file" id="foto-upload"
                                        class="w-full p-2 border border-gray-300 rounded-lg">
                                </div>
                                <div class="mb-4">
                                    <label for="kategori-title" class="block text-gray-700">Judul</label>
                                    <input type="text" id="kategori-title" placeholder="Masukkan judul..."
                                        class="w-full p-2 border border-gray-300 rounded-lg">
                                </div>
                                <div class="mb-4">
                                    <label for="example-textarea" class="block text-gray-700">Deskripsi</label>
                                    <textarea id="example-textarea" class="w-full p-2 border border-gray-300 rounded-lg" rows="4"
                                        placeholder="Tulis deskripsi Anda di sini..."></textarea>
                                </div>
                                <div class="flex justify-end space-x-2">
                                    <button type="button" @click="openModal = false"
                                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Batal</button>
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </main>
</div>

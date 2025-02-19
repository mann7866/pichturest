@extends('pages.layouts.app')
@section('content')
<!-- show content -->
                    <div class="flex justify-center ">
                        <div class="max-w-screen-lg w-full flex">
                            <!-- Tombol Kembali -->
                            <a href="javascript:void(0)" onclick="history.back()"
                                class="inline-block mb-4 text-gray-500 hover:text-gray-700 hover:underline hover:rounded-full hover:p-2 transition-all mr-4 font-bold text-3xl">
                                <i class="fas fa-arrow-left"></i>
                            </a>

                            <!-- Card Layout Seperti Pinterest -->
                            <div
                                class="border-2 bg-white grid grid-cols-2 md:grid-cols-[auto_1fr] gap-6 rounded-xl overflow-hidden border border-gray-100 p-4">
                                <!-- Gambar -->
                                <img src="../images/posts/image3.jpeg"
                                    class="w-full md:w-[500px] h-auto object-cover rounded-lg" alt="Image description">

                                <!-- Detail Deskripsi & Komentar -->
                                <div
                                    class="overflow-y-auto max-h-[700px] scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-transparent">
                                    <!-- Deskripsi -->
                                    <div class="group">
                                        <h2 class="text-xl font-semibold">Show Foto</h2>
                                        <p class="text-gray-600 text-sm">
                                            <span x-data="{ expanded: false }">
                                                <span x-show="!expanded">foto ini adalah foto percobaan yang saya
                                                    buat...</span>
                                                <span x-show="expanded">foto ini adalah foto percobaan yang saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menamoto ini adalah foto percobaan yang saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nypilkan nyoto ini adalah foto
                                                    percobaan yang saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nyoto ini adalah foto percobaan yang
                                                    saya buat
                                                    karena saya ingin menampilkan nya</span>
                                                <button @click="expanded = !expanded" class="text-blue-500 underline">
                                                    <span x-show="!expanded" class="cursor-pointer">Selengkapnya
                                                        <i class="fa-solid fa-chevron-down"></i>
                                                    </span>
                                                    <span x-show="expanded" class="cursor-pointer">Sembunyikan
                                                        <i class="fa-solid fa-chevron-up"></i>
                                                    </span>
                                                </button>
                                            </span>
                                        </p>


                                    </div>

                                    <!-- komentar -->
                                    <section x-data="{ expanded: false }"
                                        class="bg-white mt-0 py-8 lg:py-16 antialiased">
                                        <div class="flex justify-between">
                                            <label>Komentar</label>
                                            <button @click="expanded = !expanded"
                                                class="text-blue-500 text-sm underline">
                                                <span x-show="!expanded" class="cursor-pointer">lihat
                                                    <i class="fa-solid fa-eye"></i>
                                                </span>
                                                <span x-show="expanded" class="cursor-pointer">tutup
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </span>
                                            </button>
                                        </div>
                                        <div x-show="!expanded"
                                            class="max-w-2xl mx-auto px-4 w-full bg-white border-2 border-gray-100 rounded-lg overflow-y-auto max-h-[200px]">
                                        </div>
                                        <div x-show="expanded"
                                            class="max-w-2xl mx-auto px-4 bg-white border-2 border-gray-100 rounded-lg overflow-y-auto max-h-[400px]">
                                            <!-- comment -->
                                            <article x-data="{ expanded: false }"
                                                class="p-6 mb-3 text-xs border-t border-gray-200">
                                                <footer class="flex justify-between items-center mb-2">
                                                    <div class="flex items-center justify-between w-full">
                                                        <div class="flex items-center space-x-4">
                                                            <!-- Nama & Profil -->
                                                            <a href="">
                                                                <p
                                                                    class="inline-flex items-center text-sm text-gray-900 font-semibold">
                                                                    <img class="mr-2 w-6 h-6 rounded-full"
                                                                        src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                                                        alt="Bonnie Green">
                                                                    Bonnie Green
                                                                </p>
                                                            </a>

                                                            <!-- Waktu -->
                                                            <p class="text-sm text-gray-600">
                                                                <time pubdate datetime="2022-03-12"
                                                                    title="March 12th, 2022">Mar. 12,
                                                                    2022</time>
                                                            </p>
                                                        </div>

                                                        <!-- Button Dropdown -->
                                                        <div x-data="{ open: false }"
                                                            class="relative inline-block text-left ml-auto">
                                                            <button @click="open = !open"
                                                                class="inline-flex items-center p-2 text-sm font-medium text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50">
                                                                <svg class="w-4 h-4" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 3">
                                                                    <path
                                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                                </svg>
                                                                <span class="sr-only">Comment settings</span>
                                                            </button>

                                                            <!-- Dropdown -->
                                                            <div x-show="open" @click.away="open = false"
                                                                class="absolute right-0 mt-2 w-36 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                                                <ul class="py-1 text-sm text-gray-700">
                                                                    <li>
                                                                        <button @click="expanded = !expanded"
                                                                            class=" text-start w-full">
                                                                            <a href="#"
                                                                                class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                                                                        </button>
                                                                    </li>
                                                                    <li
                                                                        x-data="{ openRemove: false, openReport: false, item: '' }">
                                                                        <a href="#"
                                                                            @click="openRemove = true; item = 'Item 1'"
                                                                            class="block px-4 py-2 hover:bg-gray-100">Remove</a>

                                                                        <!-- Modal Remove -->
                                                                        <div x-show="openRemove" x-transition
                                                                            class="fixed inset-0 z-50 bg-opacity-75 flex justify-center items-center">
                                                                            <div
                                                                                class="bg-white bg-opacity-80 rounded-lg w-1/3 p-6">
                                                                                <h2 class="text-lg font-semibold mb-4">
                                                                                    Are you sure you
                                                                                    want to remove <span
                                                                                        x-text="item"></span>?</h2>
                                                                                <div class="flex justify-between">
                                                                                    <button @click="openRemove = false"
                                                                                        class="px-4 py-2 bg-gray-300 rounded cursor-pointer">Cancel</button>
                                                                                    <button @click="openRemove = false"
                                                                                        class="px-4 py-2 bg-red-500 text-white rounded cursor-pointer">Remove</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li
                                                                        x-data="{ openRemove: false, openReport: false, item: '' }">
                                                                        <a href="#"
                                                                            @click="openReport = true; item = 'Item 1'"
                                                                            class="block px-4 py-2 hover:bg-gray-100">Report</a>

                                                                        <!-- Modal Report -->
                                                                        <div x-show="openReport" x-transition
                                                                            class="fixed inset-0 z-50 flex justify-center items-center">
                                                                            <div
                                                                                class="bg-white bg-opacity-80 rounded-lg w-1/3 p-6">
                                                                                <h2 class="text-lg font-semibold mb-4">
                                                                                    Report <span x-text="item"></span>
                                                                                </h2>
                                                                                <textarea
                                                                                    class="w-full p-2 border border-gray-300 rounded mb-4"
                                                                                    placeholder="Explain the issue..."></textarea>
                                                                                <div class="flex justify-between">
                                                                                    <button @click="openReport = false"
                                                                                        class="px-4 py-2 bg-gray-300 rounded cursor-pointer">Cancel</button>
                                                                                    <button @click="openReport = false"
                                                                                        class="px-4 py-2 bg-blue-500 text-white rounded cursor-pointer">Submit
                                                                                        Report</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </footer>
                                                <form action="#" method="">
                                                    <p x-show="!expanded" class="text-gray-500">The article covers
                                                        the essentials,
                                                        challenges, myths, and
                                                        stages the UX designer should consider while creating the
                                                        design strategy.</p>

                                                    <textarea x-show="expanded"
                                                        class="w-full p-2 border border-gray-300 rounded-md"
                                                        rows="3">The article covers the essentials,challenges, myths, and stages the UX designer should consider while creating the design strategy.</textarea>
                                                    <div x-show="expanded" class="flex gap-2 justify-end mt-1">
                                                        <button type="submit"
                                                            class="bg-blue-500 text-white flex items-center justify-center rounded-lg h-10 px-4 hover:bg-blue-600 transition">Simpan</button>
                                                        <button @click="expanded = !expanded"
                                                            class="bg-gray-500 text-white flex items-center justify-center rounded-md h-10 px-4 hover:bg-gray-600 transition">Batal</button>
                                                        </button>
                                                    </div>
                                                </form>


                                                <!-- Reply -->
                                                <div x-data="{ reply: false }" class="space-y-2">
                                                    <!-- Button Reply with Message Icon -->
                                                    <button @click="reply = !reply" class="text-blue-500 text-sm">
                                                        <span x-show="!reply"
                                                            class="flex gap-2 items-center text-gray-700 p-2 hover:text-gray-800 transition">
                                                            <i class="fas fa-comment-alt"></i>
                                                            <!-- Font Awesome Message Icon -->
                                                            <span class="ml-2 cursor-pointer">Balas</span>
                                                        </span>
                                                    </button>

                                                    <!-- Form for Reply -->
                                                    <div class="flex gap-0 justify-end mt-2" x-show="reply">
                                                        <form action="" class="w-full">
                                                            <textarea
                                                                class="w-full p-2 border border-gray-300 rounded-md"
                                                                rows="3" placeholder="Tulis balasan..."></textarea>

                                                            <div class="flex gap-2 justify-end mt-2">
                                                                <button type="submit"
                                                                    class="bg-blue-500 text-white flex items-center justify-center rounded-lg h-10 px-4 hover:bg-blue-600 transition">Simpan</button>
                                                                <button @click="reply = !reply"
                                                                    class="bg-gray-500 text-white flex items-center justify-center rounded-md h-10 px-4 hover:bg-gray-600 transition">Batal</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </article>

                                            <!-- reply comment -->
                                            <article x-data="{ expanded: false }"
                                                class="p-6 text-xs border-t mb-3 ml-6 lg:ml-12 rounded-lg border-gray-200">
                                                <footer class="flex justify-between items-center">
                                                    <div class="flex items-center space-x-4 w-full">
                                                        <a href="" class="flex items-center justify-between space-x-2">
                                                            <!-- Pembalas -->
                                                            <span class="flex items-center text-xs group">
                                                                <img class="w-4 h-4 rounded-full mr-2"
                                                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                                    alt="Jese Leos">
                                                                <span class="underline">Jese Leos</span>
                                                            </span>

                                                            <!-- Tanggal -->
                                                            <p class="text-xs text-gray-600">
                                                                <time pubdate datetime="2022-02-12"
                                                                    title="February 12th, 2022">Feb. 12, 2022</time>
                                                            </p>
                                                        </a>

                                                        <!-- Button Dropdown -->
                                                        <div x-data="{ open: false }"
                                                            class="relative inline-block text-left ml-auto">
                                                            <button @click="open = !open"
                                                                class="inline-flex items-center p-2 text-sm font-medium text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50">
                                                                <svg class="w-4 h-4" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 3">
                                                                    <path
                                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                                </svg>
                                                                <span class="sr-only">Comment settings</span>
                                                            </button>

                                                            <!-- Dropdown -->
                                                            <div x-show="open" @click.away="open = false"
                                                                class="absolute right-0 mt-2 w-36 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                                                <ul class="py-1 text-sm text-gray-700">
                                                                    <li>
                                                                        <button @click="expanded = !expanded"
                                                                            class=" text-start w-full">
                                                                            <a href="#"
                                                                                class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                                                                        </button>
                                                                    </li>
                                                                    <li
                                                                        x-data="{ openRemove: false, openReport: false, item: '' }">
                                                                        <a href="#"
                                                                            @click="openRemove = true; item = 'Item 1'"
                                                                            class="block px-4 py-2 hover:bg-gray-100">Remove</a>

                                                                        <!-- Modal Remove -->
                                                                        <div x-show="openRemove" x-transition
                                                                            class="fixed inset-0 z-50 bg-opacity-75 flex justify-center items-center">
                                                                            <div
                                                                                class="bg-white bg-opacity-80 rounded-lg w-1/3 p-6">
                                                                                <h2 class="text-lg font-semibold mb-4">
                                                                                    Are you sure you
                                                                                    want to remove <span
                                                                                        x-text="item"></span>?</h2>
                                                                                <div class="flex justify-between">
                                                                                    <button @click="openRemove = false"
                                                                                        class="px-4 py-2 bg-gray-300 rounded cursor-pointer">Cancel</button>
                                                                                    <button @click="openRemove = false"
                                                                                        class="px-4 py-2 bg-red-500 text-white rounded cursor-pointer">Remove</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li
                                                                        x-data="{ openRemove: false, openReport: false, item: '' }">
                                                                        <a href="#"
                                                                            @click="openReport = true; item = 'Item 1'"
                                                                            class="block px-4 py-2 hover:bg-gray-100">Report</a>

                                                                        <!-- Modal Report -->
                                                                        <div x-show="openReport" x-transition
                                                                            class="fixed inset-0 z-50 flex justify-center items-center">
                                                                            <div
                                                                                class="bg-white bg-opacity-80 rounded-lg w-1/3 p-6">
                                                                                <h2 class="text-lg font-semibold mb-4">
                                                                                    Report <span x-text="item"></span>
                                                                                </h2>
                                                                                <textarea
                                                                                    class="w-full p-2 border border-gray-300 rounded mb-4"
                                                                                    placeholder="Explain the issue..."></textarea>
                                                                                <div class="flex justify-between">
                                                                                    <button @click="openReport = false"
                                                                                        class="px-4 py-2 bg-gray-300 rounded cursor-pointer">Cancel</button>
                                                                                    <button @click="openReport = false"
                                                                                        class="px-4 py-2 bg-blue-500 text-white rounded cursor-pointer">Submit
                                                                                        Report</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </footer>
                                                <!-- Panah ke bawah -->
                                                <span class="mb-1 mr-2 flex items-center block">
                                                    <i class="fa-solid fa-arrow-down mt-0 text-xs"></i>
                                                </span>
                                                <!-- Nama yang dibalas di bawah -->
                                                <span for="comment" class="mb-4 text-xs flex items-center block">
                                                    <img class="w-4 h-4 rounded-full mr-2"
                                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                        alt="Bonnie Green">
                                                    <span class="underline">Bonnie Green</span>
                                                </span>

                                                <form action="#" method="">
                                                    <p x-show="!expanded" class="text-gray-500">Much appreciated!
                                                        Glad you liked it☺️.
                                                    </p>

                                                    <textarea x-show="expanded"
                                                        class="w-full p-2 border border-gray-300 rounded-md"
                                                        rows="3">Much appreciated! Glad you liked it ☺️.</textarea>
                                                    <div x-show="expanded" class="flex gap-2 justify-end mt-1">
                                                        <button type="submit"
                                                            class="bg-blue-500 text-white flex items-center justify-center rounded-lg h-10 px-4 hover:bg-blue-600 transition cursor-pointer">Simpan</button>
                                                        <button @click="expanded = !expanded"
                                                            class="bg-gray-500 text-white flex items-center justify-center rounded-md h-10 px-4 hover:bg-gray-600 transition cursor-pointer">Batal</button>
                                                        </button>
                                                    </div>
                                                </form>

                                                <!-- Reply -->
                                                <div x-data="{ reply: false }" class="space-y-2">
                                                    <!-- Button Reply with Message Icon -->
                                                    <button @click="reply = !reply" class="text-blue-500 text-sm">
                                                        <span x-show="!reply"
                                                            class="flex gap-2 items-center text-gray-700 p-2 hover:text-gray-800 transition">
                                                            <i class="fas fa-comment-alt"></i>
                                                            <!-- Font Awesome Message Icon -->
                                                            <span class="ml-2 cursor-pointer">Balas</span>
                                                        </span>
                                                    </button>

                                                    <!-- Form for Reply -->
                                                    <div class="flex gap-0 justify-end mt-2" x-show="reply">
                                                        <form action="" class="w-full">
                                                            <textarea
                                                                class="w-full p-2 border border-gray-300 rounded-md"
                                                                rows="3" placeholder="Tulis balasan..."></textarea>

                                                            <div class="flex gap-2 justify-end mt-2">
                                                                <button type="submit"
                                                                    class="bg-blue-500 text-white flex items-center justify-center rounded-lg h-10 px-4 hover:bg-blue-600 transition cursor-pointer">Simpan</button>
                                                                <button @click="reply = !reply"
                                                                    class="bg-gray-500 text-white flex items-center justify-center rounded-md h-10 px-4 hover:bg-gray-600 transition cursor-pointer">Batal</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </article>
                                            <article x-data="{ expanded: false }"
                                                class="p-6 text-xs border-t mb-3 ml-6 lg:ml-12 rounded-lg border-gray-200">
                                                <footer class="flex justify-between items-center">
                                                    <div class="flex items-center space-x-4 w-full">
                                                        <a href="" class="flex items-center justify-between space-x-2">
                                                            <!-- Pembalas -->
                                                            <span class="flex items-center text-xs group">
                                                                <img class="w-4 h-4 rounded-full mr-2"
                                                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                                    alt="Jese Leos">
                                                                <span class="underline">Jese Leos</span>
                                                            </span>

                                                            <!-- Tanggal -->
                                                            <p class="text-xs text-gray-600">
                                                                <time pubdate datetime="2022-02-12"
                                                                    title="February 12th, 2022">Feb. 12, 2022</time>
                                                            </p>
                                                        </a>

                                                        <!-- Button Dropdown -->
                                                        <div x-data="{ open: false }"
                                                            class="relative inline-block text-left ml-auto">
                                                            <button @click="open = !open"
                                                                class="inline-flex items-center p-2 text-sm font-medium text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50">
                                                                <svg class="w-4 h-4" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor" viewBox="0 0 16 3">
                                                                    <path
                                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                                </svg>
                                                                <span class="sr-only">Comment settings</span>
                                                            </button>

                                                            <!-- Dropdown -->
                                                            <div x-show="open" @click.away="open = false"
                                                                class="absolute right-0 mt-2 w-36 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                                                <ul class="py-1 text-sm text-gray-700">
                                                                    <li>
                                                                        <button @click="expanded = !expanded"
                                                                            class=" text-start w-full">
                                                                            <a href="#"
                                                                                class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                                                                        </button>
                                                                    </li>
                                                                    <li
                                                                        x-data="{ openRemove: false, openReport: false, item: '' }">
                                                                        <a href="#"
                                                                            @click="openRemove = true; item = 'Item 1'"
                                                                            class="block px-4 py-2 hover:bg-gray-100">Remove</a>

                                                                        <!-- Modal Remove -->
                                                                        <div x-show="openRemove" x-transition
                                                                            class="fixed inset-0 z-50 bg-opacity-75 flex justify-center items-center">
                                                                            <div
                                                                                class="bg-white bg-opacity-80 rounded-lg w-1/3 p-6">
                                                                                <h2 class="text-lg font-semibold mb-4">
                                                                                    Are you sure you
                                                                                    want to remove <span
                                                                                        x-text="item"></span>?</h2>
                                                                                <div class="flex justify-between">
                                                                                    <button @click="openRemove = false"
                                                                                        class="px-4 py-2 bg-gray-300 rounded cursor-pointer">Cancel</button>
                                                                                    <button @click="openRemove = false"
                                                                                        class="px-4 py-2 bg-red-500 text-white rounded cursor-pointer">Remove</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li
                                                                        x-data="{ openRemove: false, openReport: false, item: '' }">
                                                                        <a href="#"
                                                                            @click="openReport = true; item = 'Item 1'"
                                                                            class="block px-4 py-2 hover:bg-gray-100">Report</a>

                                                                        <!-- Modal Report -->
                                                                        <div x-show="openReport" x-transition
                                                                            class="fixed inset-0 z-50 flex justify-center items-center">
                                                                            <div
                                                                                class="bg-white bg-opacity-80 rounded-lg w-1/3 p-6">
                                                                                <h2 class="text-lg font-semibold mb-4">
                                                                                    Report <span x-text="item"></span>
                                                                                </h2>
                                                                                <textarea
                                                                                    class="w-full p-2 border border-gray-300 rounded mb-4"
                                                                                    placeholder="Explain the issue..."></textarea>
                                                                                <div class="flex justify-between">
                                                                                    <button @click="openReport = false"
                                                                                        class="px-4 py-2 bg-gray-300 rounded cursor-pointer">Cancel</button>
                                                                                    <button @click="openReport = false"
                                                                                        class="px-4 py-2 bg-blue-500 text-white rounded cursor-pointer">Submit
                                                                                        Report</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </footer>
                                                <!-- Panah ke bawah -->
                                                <span class="mb-1 mr-2 flex items-center block">
                                                    <i class="fa-solid fa-arrow-down mt-0 text-xs"></i>
                                                </span>
                                                <!-- Nama yang dibalas di bawah -->
                                                <span for="comment" class="mb-4 text-xs flex items-center block">
                                                    <img class="w-4 h-4 rounded-full mr-2"
                                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                        alt="Bonnie Green">
                                                    <span class="underline">Bonnie Green</span>
                                                </span>

                                                <form action="#" method="">
                                                    <p x-show="!expanded" class="text-gray-500">Much appreciated!
                                                        Glad you liked it☺️.
                                                    </p>

                                                    <textarea x-show="expanded"
                                                        class="w-full p-2 border border-gray-300 rounded-md"
                                                        rows="3">Much appreciated! Glad you liked it ☺️.</textarea>
                                                    <div x-show="expanded" class="flex gap-2 justify-end mt-1">
                                                        <button type="submit"
                                                            class="bg-blue-500 text-white flex items-center justify-center rounded-lg h-10 px-4 hover:bg-blue-600 transition cursor-pointer">Simpan</button>
                                                        <button @click="expanded = !expanded"
                                                            class="bg-gray-500 text-white flex items-center justify-center rounded-md h-10 px-4 hover:bg-gray-600 transition cursor-pointer">Batal</button>
                                                        </button>
                                                    </div>
                                                </form>

                                                <!-- Reply -->
                                                <div x-data="{ reply: false }" class="space-y-2">
                                                    <!-- Button Reply with Message Icon -->
                                                    <button @click="reply = !reply" class="text-blue-500 text-sm">
                                                        <span x-show="!reply"
                                                            class="flex gap-2 items-center text-gray-700 p-2 hover:text-gray-800 transition">
                                                            <i class="fas fa-comment-alt"></i>
                                                            <!-- Font Awesome Message Icon -->
                                                            <span class="ml-2 cursor-pointer">Balas</span>
                                                        </span>
                                                    </button>

                                                    <!-- Form for Reply -->
                                                    <div class="flex gap-0 justify-end mt-2" x-show="reply">
                                                        <form action="" class="w-full">
                                                            <textarea
                                                                class="w-full p-2 border border-gray-300 rounded-md"
                                                                rows="3" placeholder="Tulis balasan..."></textarea>

                                                            <div class="flex gap-2 justify-end mt-2">
                                                                <button type="submit"
                                                                    class="bg-blue-500 text-white flex items-center justify-center rounded-lg h-10 px-4 hover:bg-blue-600 transition cursor-pointer">Simpan</button>
                                                                <button @click="reply = !reply"
                                                                    class="bg-gray-500 text-white flex items-center justify-center rounded-md h-10 px-4 hover:bg-gray-600 transition cursor-pointer">Batal</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Form Tambah Komentar -->
                                        <div class="mt-4 bg-gray-100 py-2 px-2 rounded-full">
                                            <form action="" class="flex items-center">
                                                <input type="hidden" name="galeries_id" value="">
                                                <textarea name="comment" id="comment"
                                                    class="w-full focus:outline-none text-gray-700 py-2 px-4 h-10 rounded-full overflow-hidden resize-none"
                                                    placeholder="Tambahkan komentar"></textarea>
                                                <button type="submit"
                                                    class="bg-red-500 text-white py-3 px-3 flex items-center cursor-pointer justify-center rounded-full hover:bg-red-600 transition ml-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-cursor-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>

                                        <!-- Tombol Like dan Report -->
                                        <div class="mt-3 flex gap-4 items-center justify-end">
                                            <!-- Tombol Like -->
                                            <button
                                                class="flex items-center text-gray-600 hover:text-red-500 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="bi bi-heart h-6 w-6" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514 1.178 1.4 3.053c-.523.874-.641 2.225.314 3.908C3.284 9.011 6.85 12.143 8 13.05c1.15-.908 4.716-4.04 6.286-6.09.955-1.683.837-3.034.314-3.908C13.486 1.178 10.4.281 8.717 2.01L8 2.748z" />
                                                </svg>
                                                <span class="ml-1">20</span>
                                            </button>

                                            <!-- Tombol simpan -->
                                            <button
                                                class="flex items-center text-gray-600 hover:text-red-500 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                                </svg>
                                                <span class="ml-1">0</span>
                                            </button>

                                            <!-- Tombol Report -->
                                            <div x-data="{ openRemove: false, reportImage: false, item: '' }">
                                                <a href="#" @click="reportImage = true; item = 'Item 1'"
                                                    class="flex items-center text-red-600 hover:text-red-500 transition">
                                                    <i class="fa-solid fa-triangle-exclamation text-xl"></i>
                                                <span class="ml-1">20</span>
                                                </a>


                                                <!-- Modal Report -->
                                                <div x-show="reportImage" x-transition
                                                    class="fixed inset-0 z-50 flex justify-center items-center">
                                                    <div class="bg-white bg-opacity-80 rounded-lg w-1/3 p-6">
                                                        <h2 class="text-lg font-semibold mb-4">
                                                            Report <span x-text="item"></span>
                                                        </h2>
                                                        <textarea class="w-full p-2 border border-gray-300 rounded mb-4"
                                                            placeholder="Explain the issue..."></textarea>
                                                        <div class="flex justify-between">
                                                            <button @click="reportImage = false"
                                                                class="px-4 py-2 bg-gray-300 rounded cursor-pointer">Cancel</button>
                                                            <button @click="reportImage = false"
                                                                class="px-4 py-2 bg-blue-500 text-white rounded cursor-pointer">Submit
                                                                Report</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </section>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end show content -->

                    <!-- all post content -->
                    <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4 p-5 bg-white space-y-4">
                        <!-- Card 1 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image1.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 1</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile1.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 1</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 2 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image2.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 2</p>
                                <div class="flex gap-2 items-center mt-2">
                                    <img src="../images/profile/profile1.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 2</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 3 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image3.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 3</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile3.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 3</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 4 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image4.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 4</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile1.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 1</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 5 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image5.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 5</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile2.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 2</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 6 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image6.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 6</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile3.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 3</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 7 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image7.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 7</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile1.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 1</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 8 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image8.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 1</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile1.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 1</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 9 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image9.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 1</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile1.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 1</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 10 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image10.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 1</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile1.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 1</p>
                                </div>
                            </a>
                        </div>

                        <!-- Card 11 -->
                        <div class="relative break-inside-avoid">
                            <a href="../pages/show.html" class="block">
                                <!-- Gambar -->
                                <div class="relative">
                                    <img src="../images/posts/image11.jpeg"
                                        class="w-full rounded-lg shadow-lg hover:opacity-80 transition duration-300"
                                        alt="Random Image" />

                                    <!-- Ikon Bookmark -->
                                    <button
                                        class="absolute top-2 right-2 bg-white p-2 rounded-full shadow-md hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M6 2a2 2 0 00-2 2v18l8-5 8 5V4a2 2 0 00-2-2H6z"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Deskripsi -->
                                <p class="mt-2 font-semibold text-gray-800">Gambar 1</p>
                                <div class="flex gap-2 items-center mt-1">
                                    <img src="../images/profile/profile1.jpeg" class="w-8 h-8 rounded-full" alt="" />
                                    <p class="text-sm text-gray-600">User 1</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end all post content -->

@endsection

<nav class="fixed top-0 left-0 w-full bg-white p-4 z-50">
    <div class="row col-span-full">
        <div class="card">
            <div class="flex group justify-between font-semibold">
                <a href="/pages/dashboard" class="group flex gap-2 p-5 items-center">
                    <img src="../images/profile/pinterest.jpeg" class="w-8 h-8 rounded-full" alt="" />
                    <p>Pichturest</p>
                </a>
                <div x-data="{ search: false }" class="group flex gap-1 p-5 items-center">
                    <a href="/post/made"
                        class="flex gap-3 items-center px-4 py-2 border-1 border-gray-300 text-gray-950 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <img src="{{ asset(Auth::user()->image)}}" class="w-10 h-10 rounded-full" alt="" />
                        {{ Auth::user()->name }}
                    </a>
                    <form action="../pages/search.html">
                        <div x-show="search"
                            class="flex items-center bg-gray-100 rounded-full px-6 py-2 w-full focus-within:ring-3 focus-within:ring-blue-300">
                            <!-- Ikon Search -->
                            <i class="fa-solid fa-magnifying-glass text-2xl text-neutral-500"></i>

                            <!-- Input Komentar -->
                            <input type="search"
                                class="w-full bg-transparent focus:outline-none text-gray-700 px-3 h-10"
                                placeholder="Cari..." />
                        </div>
                    </form>
                    <button @click="search = !search" class="flex justify-center items-center">
                        <span x-show="search"
                            class="flex items-center px-4 py-2 text-gray-950 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-blue-500">
                            <i class="fa-solid fa-xmark text-2xl text-neutral-500"></i>
                        </span>
                    </button>
                    <button @click="search = !search">
                        <span x-show="!search"
                            class="flex items-center px-4 size-14 py-2 text-gray-950 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-blue-500">
                            <i class="fa-solid fa-magnifying-glass text-2xl text-neutral-500"></i>
                        </span>
                    </button>


                    <div x-data="{ showNotif: false }">
                        <!-- Tombol Notifikasi -->
                        <button
                            class="flex cursor-pointer items-center px-4 size-14 py-2 text-gray-950 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-blue-500"
                            @click="showNotif = !showNotif">
                            <i class="fa-solid fa-bell text-2xl text-neutral-500"></i>
                        </button>

                        <!-- Notifikasi (posisi fixed di luar card & terdepan) -->
                        <div x-show="showNotif" x-transition
                            class="fixed top-16 right-5 w-80 bg-white shadow-lg rounded-lg p-4 border border-gray-200 z-50"
                            @click.away="showNotif = false">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-semibold">Notifikasi</h3>
                                <button @click="showNotif = false"
                                    class="text-gray-500 cursor-pointer hover:text-gray-700">
                                    &times;
                                </button>
                            </div>
                            <ul class="mt-2 space-y-2">
                                <li class="flex items-center p-2 cursor-pointer bg-gray-100 hover:bg-gray-200 rounded">
                                    <img src="../images/profile/profile1.jpeg" alt="avatar"
                                        class="w-8 h-8 rounded-full mr-3">
                                    <div>
                                        <div class="flex justify-between gap-4 text-sm font-medium">
                                            <span>manrest</span>
                                            <span class="flex justify-end">20:00</span>
                                        </div>
                                        <div class="ml-auto text-xs text-gray-600">Berhasil mengirim pesan pada eman
                                            anda</div>
                                    </div>
                                </li>
                                <li class="flex justify-center">
                                    <a href=""
                                        class="flex items-center p-2 text-xs cursor-pointer bg-gray-100 hover:bg-gray-200 rounded-lg">lihat
                                        selengkapnya</a>
                                </li>
                            </ul>

                        </div>
                    </div>



                    <img src="../images/profile/profile2.jpeg" class="w-8 h-8 rounded-full" alt="" />
                </div>
            </div>

            <!-- header -->

            @yield('header')

            <!-- end header -->

            <!-- content -->
            <div class="min-h-screen flex flex-col bg-gray-100">
                <div class="flex-1 min-h-0 overflow-auto px-2">
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- end content -->
    </div>
</nav>

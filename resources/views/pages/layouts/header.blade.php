<ul class="flex gap-6 mb-4 shadow-md justify-center items-center">
    <li class="font-semibold pb-1">
        <a href="/pages/dashboard"
            class="border-b-2 border-transparent aria-[current=page]:border-gray-950 aria-[current=page]:text-gray-950"
            aria-current="{{ request()->routeIs('pages.dashboard') ? 'page' : '' }}">Untuk Anda</a>
    </li>
    <li class="font-semibold pb-1">
        <a href="/pages/explore"
            class="border-b-2 border-transparent aria-[current=page]:border-gray-950 aria-[current=page]:text-gray-950"
            aria-current="{{ request()->routeIs('pages.explore') ? 'page' : '' }}">Jelajahi</a>
    </li>
</ul>

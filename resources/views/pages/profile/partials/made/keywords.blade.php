
      <a href="../pages/profile.html" class="flex shadow-lg gap-3 items-center px-4 py-2 border-1 w-auto border-gray-300 text-gray-950 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
        <img src="{{ asset($keyword->image) }}" class="w-10 h-10 rounded-full" alt="{{ $keyword->name }}" />
        <span class="truncate">{{ $keyword->name }}</span>
      </a>
      <!-- Tambahkan lebih banyak item jika diperlukan -->

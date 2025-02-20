<article class="p-4 mb-3 text-xs border-l-2 border-gray-200 ml-4">
    <footer class="flex justify-between items-center mb-2">
        <div class="flex items-center space-x-4">
            <p class="inline-flex items-center text-sm text-gray-900 font-semibold">
                <img class="mr-2 w-6 h-6 rounded-full"
                    src="{{ $comment->user->profile_picture ?? 'default.jpg' }}"
                    alt="{{ $comment->user->name }}">
                {{ $comment->user->name }}
            </p>
            <p class="text-sm text-gray-600">
                <time datetime="{{ $comment->created_at }}">{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </div>
    </footer>

    <p class="text-gray-500">{{ $comment->comment }}</p>

    <!-- Tombol Balas -->
    <button @click="reply = !reply" class="text-blue-500 text-sm">Balas</button>

    <!-- Form Reply -->
    <div x-show="reply" class="mt-2">
        <form action="{{ route('reply.store') }}" method="POST">
            @csrf
            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
            <textarea name="comment" class="w-full p-2 border border-gray-300 rounded-md" rows="2" placeholder="Tulis balasan..."></textarea>
            <div class="flex gap-2 justify-end mt-2">
                <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2 hover:bg-blue-600">Simpan</button>
                <button @click="reply = false" class="bg-gray-500 text-white rounded-lg px-4 py-2 hover:bg-gray-600">Batal</button>
            </div>
        </form>
    </div>

    @if (isset($comment->replies) && $comment->replies->count())
    <div class="ml-6 lg:ml-12">
        @foreach ($comment->replies as $reply)
            @include('pages.profile.reply', ['comment' => $reply])
        @endforeach
    </div>
@endif
</article>

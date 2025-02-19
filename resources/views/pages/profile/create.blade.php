@extends('pages.layouts.app')
@push('link')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
@push('script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endpush
@section('content')
    <div class="p-4 rounded-lg bg-gray-100 shadow-lg">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6">
            @csrf
            <h1 class="font-bold text-center">Buat Postingan</h1>
            <div class="flex gap-4">
                <!-- Upload Foto -->
                <div class="w-1/3">
                    <label class="flex mt-2 mb-2" for="image">Upload Foto</label>
                    <input type="file" id="image" name="image"
                        class="border p-2 rounded-lg bg-gray-100 hover:bg-gray-200 w-full" accept="image/*"
                        onchange="loadFile(event)">
                    <img id="output" class="mt-2 mb-2 max-w-full h-auto" />
                </div>

                <!-- Input Judul & Deskripsi -->
                <div class="flex flex-col w-2/3 gap-4">
                    <div>
                        <label for="title" class="flex mt-2 mb-2">Masukkan Judul</label>
                        <input type="text" id="title" name="title"
                            class="border p-2 w-full rounded-lg bg-gray-100 hover:bg-gray-200"
                            placeholder="Masukkan judul...">
                    </div>
                    <div>
                        <label for="title" class="flex mt-2 mb-2">Pilih kata kunci</label>
                        <select
                            class="js-example-basic-multiple border p-2 w-full rounded-lg bg-gray-100 hover:bg-gray-200 "
                            name="keywords[]" multiple="multiple">
                            @forelse ($keywords as $keyword)
                                <option value="{{ $keyword->id }}">{{ $keyword->name }}</option>
                            @empty
                                <option value="AL" disabled>Tidak ada kata kunci</option>
                            @endforelse
                        </select>
                    </div>
                    <div>
                        <label for="title" class="flex mt-2 mb-2">Masukkan album</label>
                        <select
                            class="js-example-basic-multiple border p-2 w-full rounded-lg bg-gray-100 hover:bg-gray-200 "
                            name="albums[]" multiple="multiple">
                            @forelse ($albums as $album)
                                <option value="{{ $album->id }}">{{ $album->name }}</option>
                            @empty
                                <option value="AL" disabled>Tidak ada album</option>
                            @endforelse
                        </select>
                    </div>


                    <div>
                        <label for="description" class="flex mt-2 mb-2">Masukkan Deskripsi</label>
                        <textarea id="description" name="description" class="border p-2 w-full rounded-lg bg-gray-100 hover:bg-gray-200"
                            rows="4" placeholder="Masukkan deskripsi..."></textarea>
                    </div>
                    <div class="flex justify-end gap-2">
                        <a href="/post/made"
                            class="px-4 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-500">Kembali</a>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Simpan</button>
                    </div>
                </div>
            </div>

            <!-- Tombol Simpan & Kembali -->
            <div class="flex justify-end gap-4">

            </div>
        </form>
    </div>
@endsection

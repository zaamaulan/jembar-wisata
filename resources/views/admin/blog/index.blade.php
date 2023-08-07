@extends('layouts.admin-layout')

@section('content')
    <section>
        <p>
            kamu berada di Route <span class="text-blue-400">{{ request()->path() }}</span>
        </p>
        <br><br><br>
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="judul_post">Judul Post</label>
                    <input class="border border-gray-500 px-3 py-1.5 focus:outline-none rounded-md" type="text" name="judul_post" id="judul_post">
                </div>
                <div>
                    <label for="isi_post">Isi Post</label>
                    {{-- <input class="border border-gray-500 px-3 py-1.5 focus:outline-none rounded-md" type="text" name="isi_post" id="isi_post"> --}}
                    <textarea name="isi_post" id="isi_post" cols="30" rows="6" class="border border-gray-500 px-3 py-1.5 focus:outline-none rounded-md"></textarea>
                </div>
                <div>
                    <label for="slug">Slug Post</label>
                    <input class="border border-gray-500 px-3 py-1.5 focus:outline-none rounded-md" type="text" name="slug" id="slug" readonly disabled>
                </div>
            </form>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var judulInput = document.getElementById('judul_post');
            var slugInput = document.getElementById('slug');

            judulInput.addEventListener('input', function() {
                var judulValue = judulInput.value;
                var slugValue = generateSlug(judulValue);
                slugInput.value = slugValue;
            });

            function generateSlug(text) {
                return text.toString().toLowerCase().trim()
                    .replace(/\s+/g, '-') // Replace spasi dengan tanda -
                    .replace(/[^\w\-]+/g, '') // Hapus karakter khusus
                    .replace(/\-\-+/g, '-') // Ganti beberapa tanda - berurutan dengan satu -
                    .replace(/^-+|-+$/g, ''); // Hapus - di awal dan akhir
            }
        });
    </script>
@endsection

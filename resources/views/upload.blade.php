@extends('layouts.app')
@section('content')
<div class="w-full min-h-screen pt-40">
    <form method="POST" enctype="multipart/form-data">
        <div
            id="dropzone"
            class="w-full max-w-md p-6 border-2 border-dashed border-gray-300 rounded-xl text-center cursor-pointer"
        >
            <p id="dropText" class="text-gray-500">Seret dan jatuhkan gambar di sini atau klik untuk memilih</p>
            <input
                type="file"
                id="imageInput"
                name="image"
                accept="image/*"
                class="hidden"
            />
            <img
                id="imagePreview"
                src="#"
                alt="Preview Gambar"
                class="mt-4 mx-auto rounded-lg max-w-full max-h-60 hidden"
            />
        </div>
    </form>

</div>
@endsection

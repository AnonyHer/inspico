<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        @include('layouts.navigation')
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
        <script>
            const dropzone = document.getElementById('dropzone');
            const input = document.getElementById('imageInput');
            const preview = document.getElementById('imagePreview');
            const dropText = document.getElementById('dropText');

            dropzone.addEventListener('click', () => input.click());

            input.addEventListener('change', function () {
                if (this.files && this.files[0]) {
                    showPreview(this.files[0]);
                }
            });

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropzone.addEventListener(eventName, e => e.preventDefault());
                dropzone.addEventListener(eventName, e => e.stopPropagation());
            });

            dropzone.addEventListener('dragover', () => dropzone.classList.add('border-blue-500'));
            dropzone.addEventListener('dragleave', () => dropzone.classList.remove('border-blue-500'));

            dropzone.addEventListener('drop', e => {
                dropzone.classList.remove('border-blue-500');
                const file = e.dataTransfer.files[0];
                if (file) {
                    input.files = e.dataTransfer.files;
                    showPreview(file);
                }
            });

            function showPreview(file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    dropText.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        </script>




    </body>
</html>

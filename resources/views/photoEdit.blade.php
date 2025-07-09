@extends('layouts.app')

@section('content')
<div class="pt-20 px-5 max-w-xl mx-auto">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Edit Caption</h2>

        <form action="{{ route('photos.update', $photo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="caption" class="block text-gray-700">Caption</label>
                <textarea name="caption" id="caption" rows="3" class="w-full border p-2 rounded">{{ old('caption', $photo->caption) }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-black text-white px-4 py-2 rounded">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

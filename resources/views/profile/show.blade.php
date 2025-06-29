@extends('layouts.app')
@section('content')
    <div class="pt-20 px-5">
        <div class="bg-white rounded-lg px-6 w-full pb-6">
            <div class="flex flex-col items-center justify-center pb-6">
                <x-profile-card :user="$user" />
                @if (auth()->check() && auth()->user()->id === $user->id)
                    <a href="{{ route('profile.edit') }}" class="mt-4 bg-black text-white px-4 py-2 rounded-lg">
                        Edit Profile
                    </a>
                @endif
            </div>
            <hr>
            <div class="my-6">
                <h2 class="text-xl font-semibold mb-4">User Photos</h2>
                <div class="columns-6 gap-4 space-y-4">
                    @forelse ($user->photos as $photo)
                        <div class="break-inside-avoid overflow-hidden rounded-lg shadow">
                            <img src="{{ $photo->url }}" alt="Pinterest style image" class="w-full h-auto">
                        </div>
                    @empty
                        <p class="text-gray-500">No photos available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
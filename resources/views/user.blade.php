@extends('layouts.app')
@section('content')
    <div class="w-full bg-white flex space-x-3 py-5 justify-center items-center direction-col fixed top-16">
        <x-text-input placeholder="Search for users">
        </x-text-input>
        <button class="bg-black px-5 py-2 rounded-lg text-white">Search</button>
    </div>
    <div class="pt-40 px-4no column gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
        @foreach ($users as $user)
            <x-user-card :user="$user" />
        @endforeach
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="w-full bg-white flex space-x-3 py-5 justify-center items-center direction-col fixed z-50 top-16">
        <form action="{{ route('search.index') }}" method="GET" class="flex gap-2">
            <input type="text" name="search" value="{{ request('search') }}"
                placeholder="Cari user atau foto..."
                class="border px-4 py-2 rounded-lg w-full max-w-md focus:outline-none focus:border-black">
            <button type="submit" class="bg-black text-white px-4 py-2 rounded-lg">Cari</button>
        </form>
    </div>
    <div class="pt-40 px-4 gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
        @foreach ($users as $user)
            <x-user-card :user="$user" />
        @endforeach
    </div>
@endsection
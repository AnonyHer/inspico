@extends('layouts.app')
@section('content')
<div class="pt-36">
    <div class="grid grid-cols-3 gap-4">
        <div class="flex space-x-3 m-auto">
            @for ($index = 0; $index <= 4; $index++)
            @if ($index == 0)
            <div class="flex-space-x-4 direction-row">
                @endif
                @if ($index == 3)
            </div>
            <div class="flex-space-x-4 direction-row">
                @endif
                
                <img src="{{ $photos[$index]->url }}" alt="" class="h-48 rounded-lg object-cover mb-4">
                
                @if ($index == 4)
            </div>
            @endif
            @endfor
        </div>
        <div class="text-9xl font-bold flex flex-col justify-center items-center">
            <p>Hallo, Welcome To Inspico!</p>
        </div>
        <div class="flex space-x-3 m-auto">
            @for ($index = 5; $index <= 9; $index++)
            @if ($index == 5)
            <div class="flex-space-x-4 direction-row">
                @endif
                @if ($index == 7)
            </div>
            <div class="flex-space-x-4 direction-row">
                @endif
                
                <img src="{{ $photos[$index]->url }}" alt="" class="h-48 rounded-lg object-cover mb-4">
                
                @if ($index == 9)
            </div>
            @endif
            @endfor
        </div>
    </div>
    <div class="mt-14 w-full bg-white flex space-x-3 py-5 justify-center items-center direction-col sticky top-16">
        <x-text-input placeholder="Search for photos...">
        </x-text-input>
        <button class="bg-black px-5 py-2 rounded-lg text-white">Search</button>
    </div>
    <div class="p-6">
        <div class="columns-6 gap-4 space-y-4">
            @foreach ($photos as $photo)
                <div class="break-inside-avoid overflow-hidden rounded-lg shadow">
                    <img src="{{ $photo->url }}" alt="Pinterest style image" class="w-full h-auto">
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
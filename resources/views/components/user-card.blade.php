<div class="max-w-xs bg-white rounded-xl shadow-md overflow-hidden border p-4 text-center">
    <!-- Banner Images -->
    <div class="grid grid-cols-4 gap-1 mb-4">
        @for ($i = 0; $i < 4; $i++)
            @if (isset($user->photos[$i]))
                <img src="{{ $user->photos[$i]->url }}" class="w-full h-12 object-cover rounded z-0" />
            @else
                <div class="w-full h-12 bg-gray-200 rounded"></div>
            @endif
        @endfor
    </div>

    <!-- Avatar -->
    <div class="w-20 h-20 rounded-full border-4 border-white mx-auto -mt-10 overflow-hidden shadow bg-white z-10 relative">
        <img src="{{ $user['avatar'] }}"
            class="w-full h-full object-cover" />
    </div>

    <!-- Location -->
    <p class="text-gray-600 text-sm flex items-center justify-center mb-1">
        {{ $user['name'] }}
    </p>
    
    <!-- Stats -->
    <div class="grid grid-cols-3 text-center text-sm text-gray-700 mb-4">
        <div>
            {{-- <span class="font-bold text-lg">{{ $user['appreciations'] }}</span><br> --}}
            <span class="text-xs text-gray-500">Appreciations</span>
        </div>
        <div>
            {{-- <span class="font-bold text-lg">{{ $user['followers'] }}</span><br> --}}
            <span class="text-xs text-gray-500">Followers</span>
        </div>
        <div>
            {{-- <span class="font-bold text-lg">{{ $user['views'] }}</span><br> --}}
            <span class="text-xs text-gray-500">Project Views</span>
        </div>
    </div>

    <!-- Button -->
    <button class="w-full bg-white border border-gray-300 rounded-full py-2 font-semibold text-sm hover:bg-gray-100">
        Follow
    </button>
</div>

@props(['user'])
<div>
    <a href="{{ route('users.show', $user->id) }}">
    <div class="rounded-t-xl shadow-md bg-white overflow-hidden hover:shadow-xl transition duration-300 ease-in-out group z-10">
        
        {{-- Ini adalah link transparan ke profil --}}
    
        <div class="p-4 text-center pointer-events-none">
            {{-- Foto-foto user --}}
            <div class="flex justify-center space-x-1 overflow-hidden mb-3">
                @foreach ($user->photos->take(4) as $photo)
                    <img src="{{ $photo->is_path ? asset($photo->url) : $photo->url }}" 
                         class="w-1/4 h-12 object-cover rounded pointer-events-none">
                @endforeach
            </div>
    
            {{-- Avatar --}}
            <img src="{{ $user->is_path_avatar ? asset($user->avatar) : $user->avatar }}"
                 class="w-16 h-16 rounded-full mx-auto border-2 border-white -mt-8 pointer-events-none">
    
            {{-- Nama --}}
            <h3 class="mt-2 font-semibold text-lg text-gray-800 pointer-events-none">{{ $user->name }}</h3>
    
            {{-- Stat dinamis --}}
            <div class="text-sm text-gray-600 flex justify-center space-x-6 mt-1 pointer-events-none">
                <div>
                    <div class="font-semibold">{{ $user->photos()->count() }}</div>
                    <div class="text-xs">Photos</div>
                </div>
                <div>
                    <div class="font-semibold">{{ $user->followers()->count() }}</div>
                    <div class="text-xs">Followers</div>
                </div>
                <div>
                    <div class="font-semibold">{{ $user->likesReceived()->count() }}</div>
                    <div class="text-xs">Likes</div>
                </div>
            </div>
    
        </div>
    </div>
</a>
{{-- Tombol Follow --}}
@auth
    @if(auth()->id() !== $user->id)
        <form method="POST" action="{{ route('users.follow', $user->id) }}" class=" pointer-events-auto">
            @csrf
            @if(auth()->user()->following->contains($user))
                <button class="bg-white border-2 border-black text-black px-6 py-2 rounded-b-xl w-full hover:bg-gray-100 transition">
                    Unfollow
                </button>
            @else
                <button class="bg-black text-white px-6 py-2 rounded-b-xl w-full hover:bg-gray-800 transition">
                    Follow
                </button>
            @endif
        </form>
    @else
        <a href="">
            <div class="bg-black text-white px-6 py-2 rounded-b-xl text-center w-full hover:bg-gray-800 transition">
                View Profile
            </div>
        </a>
    @endif
@endauth
</div>


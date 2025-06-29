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

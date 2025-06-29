<div>
    <div class="p-6">
        <div class="flex items-center space-x-4">
            <img src="../{{ $user->avatar }}" class="w-16 h-16 rounded-full">
            <div>
                <h2 class="text-xl font-semibold">{{ $user->name }}</h2>
                <p class="text-gray-600">{{ $user->email }}</p>
            </div>
        </div>
        <div class="mt-4 grid grid-cols-3 gap-4 text-center">
            <div>
                <p class="text-bold">Photo</p>
                <p class="mt-4 text-gray-700">0</p>
            </div>
            <div>
                <p class="text-bold">Follower</p>
                <p class="mt-4 text-gray-700">0</p>
            </div>
            <div>
                <p class="text-bold">Like</p>
                <p class="mt-4 text-gray-700">0</p>
            </div>
        </div>
    </div>
</div>
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed w-full">
    <!-- Primary Navigation Menu -->
    <div class="w-full px-10">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                        {{ __('Photos') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('users')" :active="request()->routeIs('users')">
                        {{ __('Users') }}
                    </x-nav-link>
                </div>
            </div>
            
            @auth
                <div class="flex">
                    <!-- Navigation Links -->
                    <div class=" flex items-center px-4 py-2 rounded-lg text-white">
                        <a href="{{ route('upload') }}" class="flex items-center space-x-2">
                            <div class="bg-black px-5 py-2 rounded-lg transition-colors">
                                Upload Photo
                            </div>
                        </a>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('users.show', auth()->user()->id)" :active="request()->routeIs('users.show')">
                            {{ __(auth()->user()->name) }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <form method="POST" action="{{ route('logout') }}" class="flex">
                            @csrf

                            <x-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-nav-link>
                        </form>
                    </div>
                </div>
            @else
                <div class="flex">
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav-link>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <div class="main-container">
    <nav id="desktop-nav">
            <div class="nav">
                <div class="logo">
                    <a href="/"><img src="{{ URL('assets\logo.png')}}" alt="logo" width="130"></a>
                </div>
                <div class="nav-icon">
                    <div id="profile-dropdown">
                        <a href="profile" id="profile-icon">
                            <img src="http://127.0.0.1:8000/assets/user.svg" alt="user-icon">
                            <span class="arrow">&blacktriangledown;</span>
                        </a>
                        <ul class="dropdown-menu">
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                        <!-- <a
                                            href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Dashboard
                                        </a> -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Logout') }}
                                            </button>
                                        </form> 
                                    @else
                                        <li>
                                            <a
                                            href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Log in
                                        </a>
                                        </li>

                                        @if (Route::has('register'))
                                        <li>
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >
                                                Register
                                            </a>
                                        </li>
                                            
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </ul>
                    </div> 
                </div>
            </div>
</nav>
        <div class="profile-container">
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="profile-title">
                        {{ __('Profile') }}
                    </h2>
                </x-slot>
                
                <form action="{{ URL('/add_profile') }}" method="POST">
        @csrf
        <div class="edit-profile">
            <input type="text" class="input-address" name="address" placeholder="Enter your address" value="{{ $profile->address ?? '' }}">
            <input type="text" class="input-address" name="phone_number" placeholder="Enter your phone number" value="{{ $profile->phone_number ?? '' }}">
        </div>
        <input type="submit" value="Save changes">
    </form>
                

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </div>
        
        @include('components.footer')
    </div>
    
</body>
</html>

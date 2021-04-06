<nav x-data="{ open: false }" class="bg-gray-800 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                            <div class="flex-shrink-0 flex items-center">
                                <a href="{{ url('/')  }}">
                                    <img src="{{asset('storage/img/logo1.png')}}" x-application-logo class= "block h-10 w-auto fill-current text-gray-600">
                                <!-- <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />-->
                                </a>
                            </div> 
                             
                            
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Go Back to your Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-white underline">Please Log in</a>
            
                                <!-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                        @endif -->
                                @endauth
                            </div>
                        @endif
                </div>
            </div>            
        </div>  
    </div>  
</nav>
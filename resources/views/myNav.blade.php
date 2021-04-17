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
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                  <a href="{{ url('/dashboard')  }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                    
                                  <a href="{{ url('/team')  }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
                    
                                  <a href="{{ url('/documents')  }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Project Documents</a>
                    
                                  <a href="http://3.137.81.235/LDD_Portal/insights.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Visualization</a>
                    
                                  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reports</a>
                                </div>
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


<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('User Management Page for Administrators of LDDS Portal') }}
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href href="route('dashboard.register')" :active="request()->routeIs('auth.register')"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                       Add New User </a>
                </div>
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <table class="table-auto">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user )
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
                            
                            @foreach ($user->roles as $role )
                            <td>{{ $role->name}} </td>   
                            @endforeach
                                                                    
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">{{  __('Edit')}}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  Update 
                                </a>
                              </td>
                                <td>
                                <div><button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                         {{ __('Delete') }}
                        </button>
                            
                        </div>
                       
                            
                           </td>
                            
                        </tr>
                        @endforeach
                     
                    </tbody>
                </table>

                <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                    <div class="inline-flex rounded-md shadow">
                        <a href href="route('dashboard.register')" :active="request()->routeIs('auth.register')"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                           Add New User </a>
                    </div>
                   <!-- {{ $users->links() }}-->
                 </div>
                 
                </div> 
            </div>
        </div>
    </div>
   

</x-app-layout>

                
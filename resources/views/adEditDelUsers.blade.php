<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management Page for Administrators of LDDS Portal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <table class="table-auto">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user )
                        <tr>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->id }}</td>
                            @foreach ($user->roles as $role )
                            <td>{{ $role->name}} </td>   
                            @endforeach
                            
                                          
                           </td>
                            
                          </tr>
                        @endforeach
                     
                    </tbody>
                </table>
                   @if (Auth::user()->hasRole('admin'))
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('dashboard.register')" :active="request()->routeIs('auth.register')">
           {{ __('Register a new user') }}
        </x-nav-link>
    @endif

                </div>
            </div>
        </div>
    </div>
    

</x-app-layout>

                
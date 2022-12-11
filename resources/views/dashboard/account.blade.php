<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="text-left">
                                <th>ID</th>
                                <th>Name</th>
                                <th class="hidden md:block">Email</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td class="hidden md:block">{{$user->email}}</td>
                                    <td>
                                        @if($user->role == 0)
                                            <b class="out text-red-400">Out</b>
                                        @else
                                        {{$user->role == 1 ? "Admin" : "Member"}}
                                        @endif
                                    </td>
                                    <td>
                                        
                                            @if($user->role == 0)
                                            <form action="/hireAgain/{{$user->id}}" method="get">
                                                <button class="text-white bg-blue-400 hover:bg-blue-600 rounded p-2" type="submit">Hire Again</button>
                                            </form>
                                            @else
                                            <form action="/account/{{$user->id}}/delete" method="get">
                                                <button class="text-white bg-red-400 hover:bg-red-600 rounded p-2" type="submit">Delete Account</button>
                                            </form>
                                            @endif
                                        
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    document.querySelectorAll('.out').forEach((e, index)=>{
        e.parentElement.parentElement.classList.add('bg-gray-300');
    })

</script>
</x-app-layout>
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
                    <a href="/dashboard/new-product"><button>Add New Product</button></a>
                    <table class="table-auto w-full text-center">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Manufacturer</th>
                                <th>Category</th>
                                <th>Stock</th>
                                <th>Update At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            @if($item->stock == 0)
                            <tr >
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>Unavailable</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="dropdownMenuIconButton relative inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-dark focus:ring-gray-50 dark:bg-black-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                                        <svg class="w-6 h-6 relative" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                                    </button>
                                    <div id="dropdownDots" class="dropdownDots absolute z-50 inset-y-8 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                            <li>
                                                <a href="/product/{{$item->id}}/edit" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Stock</a>
                                            </li>
                                            <li>
                                                <form action="/product/{{$item->id}}/edit" method="get">
                                                    <button type="submit">Delete Product</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->stock}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="dropdownMenuIconButton relative inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-dark focus:ring-gray-50 dark:bg-black-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                                        <svg class="w-6 h-6 relative" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                                    </button>
                                    <div id="dropdownDots" class="dropdownDots absolute z-50 inset-y-8 hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                            <li>
                                                <a href="/product/{{$item->id}}/edit" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Stock</a>
                                            </li>
                                            <li>
                                                <form action="/product/{{$item->id}}/edit" method="get">
                                                    <button type="submit">Delete Product</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

        <script>
            let hideElement = document.querySelectorAll(".dropdownDots");
           
            console.log(document.querySelectorAll('.dropdownMenuIconButton'));
            document.querySelectorAll('.dropdownMenuIconButton').forEach((element, index)=>{
                element.addEventListener('click', ()=>{
                    hideElement.forEach((e, index2)=>{
                        if(e != hideElement[index])  e.classList.add("hidden");

                    })
                    hideElement[index].classList.contains("hidden") ? hideElement[index].classList.remove("hidden") : hideElement[index].classList.add("hidden");
                })
            })
            

        </script>
</x-app-layout>

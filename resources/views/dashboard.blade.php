<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="flex flex-col items-center justify-center p-4">
        <div class="w-96 justify-center items-center">
            <div class="mb-3 w-full">
                <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                    <a href="/dashboard/new-product"><button class="mb-5 text-white w-96 bg-blue-600 hover:shadow-lg focus:bg-blue-700 rounded p-2">Add New Product</button></a>
                    <input placeholder="Cari di katalog" id="search" class="rounded-md w-full py-3 px-3" value="" onchange="UpdateInput(this.value)" />
                    <div class="mt-4">
                        <button class="bg-blue-500 text-white p-4 showAll-btn rounded-lg" onClick="ShowAll()" >Show All</button>
                        <button class="bg-gray-200 p-4 discount-btn rounded-lg" onClick="SearchDiscount()">Discount</button>
                    </div>  
                </div>
            </div>
        </div>
        <div  class="px-3 py-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($items as $item)
                            
                <div  class="items-card relative bg-white max-w-sm w-80 h-90 rounded overflow-hidden shadow-lg">
                    <div class="flex flex-col relative items-end">
                        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="dropdownMenuIconButton relative inline-flex items-center p-2 text-sm font-medium text-center text-black  rounded-lg" type="button"> 
                            <svg class="w-6 h-6 relative" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                        </button>
                        <div id="dropdownDots" class="dropdownDots w-44 absolute z-10 inset-y-8 hidden z-10 w-44 text-black rounded">
                            <ul class="z-5 text-sm space-y-1 text-black text-center bg-gray-100 rounded" aria-labelledby="dropdownMenuIconButton">
                                <li class="bg-gray-300 hover:bg-gray-200">
                                    <a href="/product/{{$item->id}}/edit" class="block ">Edit</a>
                                </li>
                                <li class="bg-gray-300 hover:bg-gray-200">
                                    <form class="block" action="/product/{{$item->id}}/delete"  method="get">
                                        <button  onclick="submitForm()" type="submit">Delete Product</button>
                                    </form>
                                </li>
                            </ul>
                        </div> 

                    </div>
            
                    <div class="w-full overflow-hidden flex justify-center px-4" width="50rem" style="height: 20rem">
                        @if($item->photo != null)
                            <img loading="lazy" class="rounded-lg" src="{{asset('storage/'.$item->photo)}}" />
                        @else
                            <img loading="lazy"  src="{{asset('storage/photos/corrupt.png')}}" />
                        @endif
                    </div>
                    
                    <div class="px-6 py-4">
                        <div>
                            <b class="item-title">{{$item->name}}</b>
                        </div>
                        <div>
                            @if($item->discount > 0)
                            <strike>Rp.{{$item->price}}</strike> <b class="discount">Rp.{{$item->price-$item->price*$item->discount}}</b>
                            @else 
                            <b>Rp.{{$item->price}}</b>
                            
                            @endif
                        </div>
                        <div>
                            @if($item->stock != 0)
                                <b>Stok : {{$item->stock}}</b>
                            @else
                                <b class="text-unavailable text-red-600">Unavailable</b>
                            @endif
                        </div>
                        
                        <div class=" pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{$item->category->name}} </span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{$item->manufacturer}} </span>
                        </div>
                    </div>
                </div>
                
            
            @endforeach
        </div>
    </div>
    

    <!-- <div class="py-12">
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
    </div> -->

        <script>
            let hideElement = document.querySelectorAll(".dropdownDots");
           
           
            document.querySelectorAll('.dropdownMenuIconButton').forEach((element, index)=>{
                element.addEventListener('click', ()=>{
                    hideElement.forEach((e, index2)=>{
                        if(e != hideElement[index])  e.classList.add("hidden");

                    })
                    hideElement[index].classList.contains("hidden") ? hideElement[index].classList.remove("hidden") : hideElement[index].classList.add("hidden");
                })

                
            })

            document.querySelectorAll(".text-unavailable").forEach((e,index)=>{
                e.parentElement.parentElement.parentElement.classList.add("bg-gray-400");
            })

            function UpdateInput(input){
                document.querySelector('.showAll-btn').classList.remove("bg-blue-500", "text-white");
                document.querySelector('.showAll-btn').classList.add('bg-gray-200');

                document.querySelectorAll('.items-card').forEach((e, index)=>{
                    e.classList.add("hidden");
                })
                
                document.querySelectorAll('.item-title').forEach((e, index)=>{
                    // console.log(input);
                    // console.log(e.innerHTML);
                    let check = e.innerHTML;
                    if(check.includes(input)){
                        // console.log("berhasil");
                        e.parentElement.parentElement.parentElement.classList.remove('hidden');
                    }
                    
                })
            }

            function SearchDiscount(){
                document.querySelector('.showAll-btn').classList.remove("bg-blue-500", "text-white");
                document.querySelector('.showAll-btn').classList.add('bg-gray-200');
                document.querySelector('.discount-btn').classList.remove('bg-gray-200');
                document.querySelector('.discount-btn').classList.add("bg-blue-500", "text-white");
                document.querySelectorAll('.items-card').forEach((e, index)=>{
                    e.classList.add("hidden");
                })

                document.querySelectorAll('.discount').forEach((e, index)=>{
                    e.parentElement.parentElement.parentElement.classList.remove('hidden');
                })
            }

            function ShowAll(){
                document.querySelector('.discount-btn').classList.remove("bg-blue-500", "text-white");
                document.querySelector('.showAll-btn').classList.remove('bg-gray-200');
                document.querySelector('.showAll-btn').classList.add("bg-blue-500", "text-white");

                document.querySelectorAll('.items-card').forEach((e, index)=>{
                    e.classList.remove('hidden');
                })
            }

            function submitForm() {
            event.preventDefault();
            var form = event.target.form;
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!' 
            },
            )
            .then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            });
            return false;
        }
        
        </script>

        
</x-app-layout>

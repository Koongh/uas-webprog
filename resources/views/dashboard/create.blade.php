<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <span class="text-xl font-bold bg-sky-500 py-3 px-6 text-white rounded-r-md ">
                Create Product 
            </span>
                <div class="p-6 text-gray-900">
                    <form class="w-full " action="/product/store" method="post" onsubmit="return submitForm(this)"  enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-6 flex flex-col">
                            <div class="md:flex md:space-x-4">
                                <div class="md:w-1/2 mb-4">
                                    <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Product Name
                                    </label>
                                    <input name="name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('name') }}">
                                </div>
                                <div class="md:w-1/2">
                                    <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Price
                                    </label>
                                    <input name="price" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('price') }}">
                                </div>
                            </div>
                            <div class="md:flex md:space-x-4">
                                <div class="md:w-1/2 mb-4">
                                    <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Stock
                                    </label>
                                    <input name="stock" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('stock') }}">
                                </div>
                                <div class="md:w-1/2">
                                    <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name" required>
                                        Discount
                                    </label>
                                    <input name="discount" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('discount') }}">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Description
                                </label>
                                <textarea name="description" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" >{{old('description') }}</textarea>
                            </div>
                            <div class="md:flex md:space-x-4">
                                <div class="md:w-1/2">
                                    <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Manufacturer
                                    </label>
                                    <input name="manufacturer" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('manufacturer') }}">
                                </div>
                                <div class="md:w-1/2">
                                    <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Category
                                    </label>
                                    <select name="category" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="category" >
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-gray-500 font-bold  mt-4 mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Compatible with
                                </label>
                                <div class="grid grid-cols-4 gap-2">
                                    @foreach ($motorcycles as $motorcycle)
                                    <div class="mt-1">
                                    <input class="form-check-input ml-2 mt-2 mb-2 mr-2" type="checkbox" name="motorcycles[]" value="{{$motorcycle->id}}"> {{$motorcycle->name}}  
                                    </div>
                                    @endforeach
                                </div>  
                            </div>
                            <div class="">
                                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4 mt-4" for="inline-full-name">
                                    Photo
                                </label>
                                <input id="image" type="file" name="photo" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" />
                            </div>
                            <div class="">
                                <img class="hidden" id="preview-image" src="" alt="preview-image" />
                            </div>
                            <div class="flex justify-end mt-4">
                                <button class="shadow bg-blue-600 hover:shadow-lg focus:bg-blue-700 rounded text-white font-bold py-2 px-4 rounded" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    <form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(e){
            
            $('#image').change(function(){
                document.querySelector('#preview-image').classList.remove("hidden");
                console.log($('#preview-image'));
                let reader = new FileReader();
                reader.onload = (e) =>{
                    $('#preview-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
        })
        function submitForm(form) {
            Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to create the new product?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, create it!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                'Product Created!',
                'Your product has been created!.',
                'success'
                )
            }
            });
            return false;
        }
    </script>
</x-app-layout>
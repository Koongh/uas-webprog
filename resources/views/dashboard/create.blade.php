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
                    <form class="w-full " action="/product/store" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-6 flex flex-col">
                            <div class="md:flex md:space-x-4">
                                <div class="md:w-1/2">
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
                                <div class="md:w-1/2">
                                    <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Stock
                                    </label>
                                    <input name="stock" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('stock') }}">
                                </div>
                                <div class="md:w-1/2">
                                    <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Discount
                                    </label>
                                    <input name="discount" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('discount') }}">
                                </div>
                            </div>
                            <div class="">
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
                            
                            <div class="">
                                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Photo
                                </label>
                                <input id="image" type="file" name="photo" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" />
                            </div>
                            <div class="">
                                <img class="hidden w-full" id="preview-image" src="" alt="preview-image" />
                            </div>
                            <div class="flex justify-end mt-4">
                                <button class="shadow bg-black focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
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
    </script>
</x-app-layout>
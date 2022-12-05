<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white flex md:flex-row overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <img src="{{asset('storage/'.$item->photo)}}" />
                </div>
                <div class="p-6 text-gray-900">
                    <form class="w-full max-w-sm" action="/product/{{$item->id}}}/update" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Product Name
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input name="name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('name') ?? $item->name}}">
                            </div>
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Price
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input name="price" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('price') ?? $item->price}}">
                            </div>
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Stock
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input name="stock" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('stock') ?? $item->stock}}">
                            </div>
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Discount
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input name="discount" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('discount') ?? $item->discount}}">
                            </div>
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Description
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input name="description" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('description') ?? $item->description}}">
                            </div>
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Manufacturer
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input name="manufacturer" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('manufacturer') ?? $item->manufacturer}}">
                            </div>
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Category
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="category" >
                                    @foreach($categories as $category)
                                        @if (old('category') ?? $category->name == $item->category->name)
                                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                        @else
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Photo
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input type="file" name="photo" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{$item->photo}}">
                            </div>
                            <div class="md:flex md:items-center">
                                <div class="md:w-1/3"></div>
                                <div class="md:w-2/3">
                                    <button class="shadow bg-dark hover:bg-purple-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    <form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
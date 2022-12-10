<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white flex flex-col justify-center item-center md:flex-row overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex relative justify-center w-full md:w-1/2 lg:w-1/3 h-80">
                    <div class="md:fixed">
                        @if($item->photo != null)
                            <img id="preview-image" class="w-80" src="{{asset('storage/'.$item->photo)}}" />
                        @else
                            <img id="preview-image" class="w-80" src="{{asset('storage/photos/corrupt.png')}}" />
                        @endif

                    </div>
                    
                </div>
                <div class="text-gray-900 md:w-1/2 lg:w-2/3">
                    <form class="w-full " name="edit-product{{$item->id}}-form" action="/product/{{$item->id}}}/update" method="post" enctype="multipart/form-data" onsubmit="return submitForm(this)">
                        @method('PUT')
                        @csrf
                        <div class="w-full md:items-center mb-6">
                            <div class="w-full lg:flex lg:space-x-4">
                                <div class="lg:w-1/2">
                                    <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Product Name
                                    </label>
                                    <input name="name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('name') ?? $item->name}}">
                                </div>
                                <div class="lg:w-1/2">
                                    <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Price
                                    </label>
                                    <input name="price" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('price') ?? $item->price}}">
                                </div>

                            </div>
                            <div class="lg:flex lg:space-x-4">
                                <div class="lg:w-1/2">
                                    <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Stock
                                    </label>
                                    <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                        <button type="button" data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-thin">−</span>
                                        </button>
                                        <input name="stock" type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="{{old('stock') ?? $item->stock}}"></input>
                                        <button type="button" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                            <span class="m-auto text-2xl font-thin">+</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="lg:w-1/2">
                                    <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Discount
                                    </label>
                                    <input name="discount" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('discount') ?? $item->discount}}">
                                </div>
                            </div>
                            <div class="">
                                <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Description
                                </label>
                                <textarea name="description" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" >{{old('description') ?? $item->description}}</textarea>
                            </div>
                            
                            <div class="lg:flex lg:space-x-4">
                                <div class="lg:w-1/2">
                                    <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Manufacturer
                                    </label>
                                    <input name="manufacturer" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{old('manufacturer') ?? $item->manufacturer}}">
                                </div>
                                <div class="lg:w-1/2">
                                    <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Category
                                    </label>
                                    <select class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="category" >
                                        @foreach($categories as $category)
                                            @if (old('category') ?? $category->name == $item->category->name)
                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Compatible with
                                </label>
                                <div class="grid grid-cols-4 gap-2">
                                    @foreach ($motorcycles as $motorcycle)
                                    <div class="mt-1">
                                        <input class="form-check-input ml-2 mt-2 mb-2 mr-2" type="checkbox" name="motorcycles[]" value="{{$motorcycle->id}}" @if (in_array($motorcycle->id, $item->motorcycles->pluck('id')->toArray())) checked @endif> {{$motorcycle->name}} <br>
                                    </div>
                                    @endforeach
                                </div>  
                            </div>
                            <div class="">
                                <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Photo
                                </label>
                                <input id="image" type="file" name="photo" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{$item->photo}}">
                            </div>
                            <div class="flex justify-end mt-4">
                                <button class="shadow bg-black text-white font-bold py-2 px-4 rounded" type="submit">
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
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
    }

  function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
  );

  const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
  );

  decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
  });

  incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
  });

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
            text: "Do you want to edit the product?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, edit it!'
        })
        .then((result) => {
            if (result.isConfirmed) {
            form.submit();
            Swal.fire(
            'Product Edited!',
            'Your product has been edited!.',
            'success'
            )
        }
        });
        return false;
    }
</script>
</x-app-layout>
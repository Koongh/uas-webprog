@extends('template.app')

<!-- link css external -->
@section('custom-css')
<!-- contoh untuk public -->
<!-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> -->

<!-- contoh untuk resource -->
<!-- <link rel="stylesheet" href="../../css/home.css" /> -->
@endsection

@section('content')


    <div class="px-3 py-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($items as $item)
            
                <div class="max-w-sm w-80 h-90 rounded overflow-hidden shadow-lg">
                    <a href="/home/{{$item->id}}">
                    <div class="w-full overflow-hidden flex justify-center" width="50rem" style="height: 20rem">
                        <img  src="{{asset('storage/'.$item->photo)}}" />
                    </div>
                    
                    <div class="px-6 py-4">
                        <div>
                            <b>{{$item->name}}</b>
                        </div>
                        <div>
                            @if($item->discount > 0)
                            <strike>Rp.{{$item->price}}</strike> <b>Rp.{{$item->price-$item->price*$item->discount}}</b>
                            @else 
                            <b>Rp.{{$item->price}}</b>
                            
                            @endif
                        </div>
                        <div>
                            <b>Stok : {{$item->stock}}</b>
                        </div>
                        <div class=" pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{$item->category->name}} </span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{$item->manufacturer}} </span>
                        </div>

                    </div>
                        <a class="dropdown-item btn btn-warning" href="/home/{{$item->id}}/edit">Edit</a>
                    </a>
                </div>
            
        
        @endforeach
    </div>



@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>

</script>
@endsection
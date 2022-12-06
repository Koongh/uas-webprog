@extends('template.app')

<!-- link css external -->
@section('custom-css')
<!-- contoh untuk public -->
<!-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> -->

<!-- contoh untuk resource -->
<!-- <link rel="stylesheet" href="../../css/home.css" /> -->
@endsection

@section('content')
    <div class="px-3 py-3 md:flex w-full space-x-4 space-y-4">
        <div class="md:w-1/3 flex justify-center items-center">
            @if($item->photo != null)
                <img  src="{{asset('storage/'.$item->photo)}}" />
            @else
                <img  src="{{asset('storage/photos/corrupt.png')}}" />
            @endif

        </div>
        <div class="bg-white rounded-xl p-4 md:w-2/3 ">
            <b class="text-2xl">{{$item->name}}</b>
            <h3><b>Harga: {{$item->price}}</b></h3>
            <p>Manufacture: {{$item->manufacture}}</p>
            <p>Kategori: {{$item->category->name}}</p>
            <p>Description:</p><p> {{$item->description}}</p>
        </div>
        

        
    </div>

@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>

</script>
@endsection
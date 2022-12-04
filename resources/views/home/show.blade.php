@extends('template.app')

<!-- link css external -->
@section('custom-css')
<!-- contoh untuk public -->
<!-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> -->

<!-- contoh untuk resource -->
<!-- <link rel="stylesheet" href="../../css/home.css" /> -->
@endsection

@section('content')
    <div class="px-3 py-3 ">
        <h1>{{$item->name}}</h1>
        <h3><b>{{$item->price}}</b></h3>
        <p>{{$item->manufacture}}</p>
        <p>{{$item->category->name}}</p>
        <p>{{$item->description}}</p>
    </div>

@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>

</script>
@endsection
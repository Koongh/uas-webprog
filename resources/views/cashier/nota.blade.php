@extends('template.app')

<!-- link css external -->
@section('custom-css')
<!-- contoh untuk public -->
<!-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> -->

<!-- contoh untuk resource -->
<!-- <link rel="stylesheet" href="../../css/home.css" /> -->
@endsection

@section('content')
<h1>ORDER ID : {{$id}}</h1>

<table>
    <thead>
        <tr>
            <th>Qty</th>
            <th>Nama Item</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items_lists as $item)
            <tr>
                <td>{{$item[1]}}</td>
                <td>{{$item[3]}}</td>
                <td>{{$item[4]}}</td>
                <td>{{$item[2]}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    
@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')

<script>
    //prevent form resubmission on tab refresh
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
</script>

@endsection
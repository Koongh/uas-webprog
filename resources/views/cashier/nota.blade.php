@extends('template.app')

<!-- link css external -->
@section('custom-css')
<!-- contoh untuk public -->
<!-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> -->

<!-- contoh untuk resource -->
<!-- <link rel="stylesheet" href="../../css/home.css" /> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
@endsection

@section('content')
<div class="flex flex-col">
    <h1 class="text-center text-2xl font-bold text-gray-500">ORDER ID : {{$id}}</h1>
    <div class=" grid grid-cols-2 px-3 py-3 md:flex w-full space-x-4 space-y-4">
        <table class="table w-full table-striped table-bordered">
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
                        <td>Rp. {{number_format($item[2],2,',','.')}}</td>
                    </tr>
                    @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td>{{$sum}}</td>
                </tr>
            </tfoot>
        </table>
    </div>  
</div>
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
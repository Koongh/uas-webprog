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
        <div class="md:w-1/3 rounded-xl p-4 flex justify-center items-center">
            @if($item->photo != null)
                <img  src="{{asset('storage/'.$item->photo)}}" />
            @else
                <img  src="{{asset('storage/photos/corrupt.png')}}" />
            @endif

        </div>
        <div class="bg-white rounded-xl p-4 md:w-2/3 ">
            <div>
                <b class="text-3xl">{{$item->name}}</b> 
                <h3 class="text-2xl"><b>Harga:</b> Rp. {{$price = number_format($item->price,2,',','.');}}</h3> <br>
            </div>
            <b>Manufacture:</b> {{$item->manufacturer}} <br>
            <b>Kategori:</b> {{$item->category->name}} <br>
            <b>Compatible with:</b>
            <div class="px-3 py-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($item->motorcycles as $motorcycle)
                <div class="max-w-sm w-25 h-30 bg-white rounded overflow-hidden shadow-lg">
                    <div class="w-full overflow-hidden flex justify-center" width="10rem" style="height: 5rem">
                        <img src="{{asset('storage/'.$motorcycle->photo)}}" /></br>
                    </div>
                    <div class="px-2 py-1 flex justify-center">
                        <b>{{$motorcycle->name}}</b> 
                    </div>

                </div>
            @endforeach
            </div>
            <b>Description:</b> <br>
            <p class="text-justify"> <?php echo preg_replace('/\./', '.<br>', $item->description) ?> </p><br>
        </div>
        
    </div>
   

@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>

</script>
@endsection
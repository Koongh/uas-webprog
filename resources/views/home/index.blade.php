@extends('template.app')

<!-- link css external -->
@section('custom-css')
<!-- contoh untuk public -->
<!-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> -->

<!-- contoh untuk resource -->
<!-- <link rel="stylesheet" href="../../css/home.css" /> -->
@endsection

@section('content')
<!--- UJI COBA ----->
<!-- Back to top button -->


<!-- UJI COBA -->
<div class="
            flex 
            flex-col 
            w-full
            h-100
            ">
    <!----- Header ----->
    <div class="bg-gradient-to-tr from-slate-900 to-slate-700 relative">
            <img src="img/motobgss.jpg"
            class="
            w-full
            h-full
            object-cover
            absolute
            mix-blend-overlay
            "/>
            <div class="p-16 md-p-24 my-40">
                <h1 class=" 
                    text-slate-50 
                    text-center 
                    md-mr-7 
                    text-5xl
                    font-extrabold text-transparent bg-clip-text bg-gradient-to-l  from-[#3FC1C9] to-[#F5F5F5]
                    stroke-black
                    opacity-75
                    animate-fade
                    ">
                        WELCOME TO KSPEC STORE
                </h1>
                <p class="
                    text-white
                    text-center
                    text-xl
                    font-bold 
                    stroke-black
                    ">
                        Solve to Your Exhaust Needs
                </p>
            </div>
        </div>
    <!----- End of Header ----->
    <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
    <!----- Map ----->
    <section class="text-gray-600 body-font relative py-20">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.011709614377!2d106.4225311!3d-6.2633432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea281a0543b3452a!2sKSPEC%20MOTOR!5e0!3m2!1sid!2sid!4v1670440594100!5m2!1sid!2sid" style="filter: contrast(1.2) opacity(0.75);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <h1 class=" 
                    text-center 
                    text-4xl
                    font-extrabold text-transparent bg-clip-text bg-gradient-to-l  from-[#3FC1C9] to-[#1f2937]
                    ">
                        OUR STORE LOCATION
                </h1>
                <h2 class="
                    mt-5
                    text-gray-900 
                    text-lg mb-1 
                    text-center
                    font-medium 
                    title-font">Address
                </h2>
                <p class="
                    text-gray-900 
                    text-md mb-1 
                    text-center
                    font-medium 
                ">
                Jl. Megu - Cisoka No.5, Sukatani, Kec. Cisoka, Kabupaten Tangerang, Banten 15730, Indonesia
                </p>
            </div>
        </div>
    </section>
    <!----- End of Map ----->
    <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
    <h1 class="
            text-center
            font-bold
            text-5xl    
            my-5
            "
        >OUR CATALOGUE</h1>
    <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
    <!----- Catalogue ----->
    <div class="w-full flex justify-center">
        <div class="px-3 py-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($items as $item)
                        <div class="max-w-sm w-80 h-90 bg-white rounded overflow-hidden shadow-lg">
                            <a href="/home/{{$item->id}}">
                            <div class="w-full overflow-hidden flex justify-center" width="50rem" style="height: 20rem">
                                @if($item->photo != null)
                                    <img loading="lazy" src="{{asset('storage/'.$item->photo)}}" />
                                @else
                                    <img loading="lazy" src="{{asset('storage/photos/corrupt.png')}}" />
                                @endif
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
                            </a>
                        </div>
                @endforeach
        </div>
    </div>
    <!----- End of Catalogue ----->
    
</div>

@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>

</script>
@endsection
@extends('template.app')

<!-- link css external -->
@section('custom-css')

@endsection

<!-- Coding HTML sini gais -->
@section('content')
<div class="w-4/5 p-4 pb-10">
    <h1 class=" 
        mt-5
        text-center 
        text-5xl
        font-extrabold text-transparent bg-clip-text bg-gradient-to-l  from-[#3FC1C9] to-[#1f2937]
        mb-5">ABOUT US</h1>
    <div class="relative flex pt-5 items-center">
        <div class="flex-grow border-t border-black"></div>
        <span class="flex-shrink mx-4 text-black text-2xl font-bold">KSPEC MOTOR</span>
        <div class="flex-grow border-t border-black"></div>
    </div>
    <h2 class="
        text-center
        mb-5
        text-lg">Toko aksesoris motor</h2> <br>
    <h3 class="
        text-center"> 
    Kami adalah reseller aksesoris motor yang menjual produk sesuai dengan judul/deskripsi dari Produsen/Pabrik.
    </h3><br>
    <h3 class="
        text-center
        text-3xl
        font-extrabold text-transparent bg-clip-text bg-gradient-to-l  from-[#3FC1C9] to-[#1f2937]"><q>CEPAT KIRIM DAN SEMOGA CEPAT SAMPAI JUGA.</q></h3>
    <section class="h-2/3  text-gray-600 body-font relative mt-4 mb-8 shadow-md">
        <div class="absolute w-2/3 inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.011709614377!2d106.4225311!3d-6.2633432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea281a0543b3452a!2sKSPEC%20MOTOR!5e0!3m2!1sid!2sid!4v1670440594100!5m2!1sid!2sid" style="filter: contrast(1.2) opacity(0.75);"></iframe>
        </div>
        <div class="container h-full mx-auto flex">
            <div class="lg:w-1/3 h-full md:w-1/2 h-full bg-white p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h1 class=" 
                    text-center 
                    text-4xl
                    font-extrabold text-transparent bg-clip-text bg-gradient-to-l  from-[#3FC1C9] to-[#1f2937]
                    ">
                        CONTACT US
                </h1>
                <p class="
                        text-gray-900 
                        text-md mt-4 mb-1 ml-10
                        text-left
                        font-medium">Nomor Telepon:
                </p>
                <ul class="
                        text-gray-900 
                        text-md mb-1 ml-10
                        text-left
                        font-medium">
                    <li>+62 812-1315-0555</li>
                    <li>0812-1315-0555</li>
                </ul>
                <h1 class=" 
                    mt-5
                    text-center 
                    text-4xl
                    font-extrabold text-transparent bg-clip-text bg-gradient-to-l  from-[#3FC1C9] to-[#1f2937]
                    ">
                        OPENING HOURS
                </h1>
                <ul class="
                        list-disc
                        text-gray-900 
                        text-md mt-4 mb-1 ml-10
                        text-left
                        font-medium">
                    <li>Senin - Jumat    : 9:00am - 5:00pm</li>
                    <li>Sabtu dan Minggu : 9:00am - 3:00pm</li>
                </ul>
            </div>
    </section>
    <!-- <h2>Kelompok 3</h2>
    Topik : Aplikasi transaksi dan pendataan barang untuk toko aksesoris motor KSPEC MOTOR <br>
    Anggota Kelompok : <br> -->
    <div class="lg:w-full md:w-full bg-white p-8 flex flex-col md:ml-auto w-full mt-10 mb-10 md:mt-0 mb-10 relative shadow-md">
        <h2 class="
                text-2xl
                text-gray-900
                font-extrabold
                uppercase">Author</h2>
        <h2>Mahasiswa Universitas Multimedia Nusantara</h2>
        <h2>Program Studi Teknik & Informatika Jurusan Informatika</h2>
        <ul class="list-decimal ml-5">
            <li>Koong Hiap (00000055136) </li>
            <li>Christophorus Augusta Wangsa (00000055420) </li>
            <li>Wahyu Dwi Setio Wibowo (00000055320) </li>
            <li>Leonardo Jonathan Fernandez Namlay (00000058084) </li>
            <li>Kenny Haryanto (00000054248) </li>
            <li>Jennifer Arlene Kurniawan (00000056232) </li>
            <li>Orde Gilbert Wiguna (00000055282) </li>
        </ul>
    </div>

</div>
    

@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>

</script>
@endsection
    


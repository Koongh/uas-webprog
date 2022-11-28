@extends('template.app')

<!-- link css external -->
@section('custom-css')
<!-- contoh untuk public -->
<!-- <link rel="stylesheet" href="{{asset('css/home.css')}}" /> -->

<!-- contoh untuk resource -->
<!-- <link rel="stylesheet" href="../../css/home.css" /> -->
@endsection

<div>
    <h1 class="blue">Hello</h1>
</div>
@section('content')

@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>

</script>
@endsection
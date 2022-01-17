@extends('menu.main')
@section('content')
<div class="text-center">
    <h1> Selamat datang {{auth()->user()->name}}</h1>
    <h3> no rek anda adalah {{$norek}}</h3>
</div>    
@push('script')
<script type="text/javascript"> 
   
</script>
@endpush
@endsection
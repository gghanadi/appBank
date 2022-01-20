@extends('menu.main')
@section('content')
<div class="text-center">
    <h1> Selamat datang {{auth()->user()->name}}</h1>
    @foreach ($data as $datas)
        <h4>no rekening anda {{$datas->norekening}}</h4>
        <h4>saldo anda {{$datas->loan}}</h4>
    @endforeach
</div>    
@push('script')
<script type="text/javascript"> 
   
</script>
@endpush
@endsection
@extends('menu.main')
@section('content')
<div class="tabel">
    <table class="table table-border" style="border: 10px">
        <tr>
            <th>Jenis transaksi</th>
            <th>Jumlah uang</th>
            <th>Tanggal transaksi</th>
        </tr>
        @foreach ($data as $datas)
        <tr>
            <td>{{$datas->jenis_transaksi}}</td>
            <td>{{$datas->loan}}</td>
            <td>{{$datas->updated_at}}</td>
        </tr>
        @endforeach
    </table>
</div>

@push('script')
<script type="text/javascript"> 
   
</script>
@endpush
@endsection
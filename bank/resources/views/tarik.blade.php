@extends('menu.main')
@section('content')
    @if(session()->has('ErrorSaldo'))
                <div class="alert alert-danger alert-dismissble fade show" role="alert">
                    {{session('ErrorSaldo')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
    @endif
    <form action="{{route('tarik_uang')}}" method="POST">
        @csrf
    <main class="form-registration">
    <div class="w-20 text-center">
        <div class="card">
        <div class="card-header">
           Form Tarik Tunai
        </div>
        <div class="form-floating mt-2">
            <input type="number" class="form-control " id="pin" name="pin" placeholder="pin">
            <label for="pin">Masukan Pin anda</label>
        </div>
        <div class="form-floating mt-2">
            <input type="number" class="form-control" id="loan" name="loan" placeholder="uang yang ingin di tarik">
            <label for="email">uang yang ingin di tarik</label>
        </div>
        <div class="form-group form-floating mt-2 p-2">
            <button class="w-20 btn btn-primary" type="submit" name="submit" id="submit" > Submit </button>
        </div>
    </div>
</div>
</main>
    </form>
@endsection
@push('script')
<script type="text/javascript">
   $(document).ready(function(){
    var pass = $('#password').val();
    var pass2 = $('#password2').val();
    if(pass!==pass2){
        alert('mohon check kembali password anda');
    }

   });
</script>
@endpush
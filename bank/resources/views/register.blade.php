@extends('menu.main')
@section('content')
    <form action="{{ route('add') }}" method="POST">
        @csrf
    <main class="form-registration">
    <div class="w-20 text-center">
        <div class="card">
        <div class="card-header">
           Form Register
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="username">
            <label for="username">username</label>
          </div>
        <div class="form-floating mt-2">
            <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="password">
            <label for="password">Password</label>
          </div>
          
        <div class="form-floating mt-2">
            <input type="password" class="form-control" id="password2" name="passowrd2" placeholder="password2">
            <label for="password2">Comfirm password</label>
        </div>
        
        <div class="form-floating mt-2">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name">
            <label for="name">Nama anda</label>
          </div>
        <div class="form-floating mt-2">
            <input type="number" class="form-control " id="pin" name="pin" placeholder="pin">
            <label for="pin">Masukan Pin anda</label>
        </div>
        <div class="form-floating mt-2">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
            <label for="email">Email</label>
         </div>
        <div class="form-floating mt-2">
            <input type="number" class="form-control" id="loan" name="loan" placeholder="uang yang ingin di simpan">
            <label for="email">uang yang ingin di simpan</label>
        </div>
        <div class="form-floating mt-2">
            <input type="number" class="form-control" id="phone" name="phone" placeholder="phone">
            <label for="phone">no telfon</label>
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="provinsi">
            <label for="provinsi">Provinsi</label>
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="kota" name="kota" placeholder="kota">
            <label for="Kota">Kota</label>
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
            <label for="alamat">Alamat anda</label>
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="namaibukandung" name="namaibukandung" placeholder="namaibukandung">
            <label for="namaibukandung">Nama ibu anda</label>
        </div>
        <div class="form-group form-floating mt-2 p-2">
            <button class="w-20 btn btn-primary" type="submit" name="submit" id="submit" > Register </button>
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
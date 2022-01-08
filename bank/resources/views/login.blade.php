@extends('menu.menu_bar')
@section('content')
    <div class="row justify-content-center mt-5">
    <div class="col-md-4">
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissble fade show" role="alert">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <div class="card text-center">
        <div class="card-header">
        Masukan username dan password anda
        </div>
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="form-floating mt-2" >
                <input type="text" name="username" id="username" placeholder="username" required><br>
            </div>
            <div class="form-floating mt-2">
                <input type="password" name="password" id="password" placeholder="password" required>
            </div>
            <div class="form-group form-floating mt-2 p-2">
                <button class="w-20 btn btn-primary" type="submit" name="submit" id="submit" > Login </button>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection

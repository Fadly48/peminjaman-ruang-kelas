@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if (session('succes'))
                <p class="alert alert-danger">{{ session('succes') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form method="post" action="{{ route('login.action') }}">
                @csrf
                <div class="mb-3">
                    <label>Username <span class="text-danger"></span></label>
                    <input class="form-control" type="text" name="username" value="{{ old('username') }}">
                </div>
                <div class="mb-3">
                    <label>Password <span class="text-danger"></span></label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                    <a class="btn btn-danger" href="/">Back</a>
                </div>
            </form>
            <div class="mt-3">
                <p>Belum punya akun? 
                    <a href="{{ route('register') }}" class="btn btn-link">Registrasi</a>
                </p>
            </div>
        </div>
    </div>
@endsection

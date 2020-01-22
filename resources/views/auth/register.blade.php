@extends('layouts.app')

@section('title', 'Register Form Page')
@section('body', 'c-app flex-row align-items-center')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mx-4">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="card-body p-4">
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="c-icon cil-user"></i></span></div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" placeholder="Username" autofocus>
                            @error('name')
                            <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="c-icon cil-envelope-open"></i></span></div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Email Address">
                            @error('email')
                            <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="c-icon cil-lock-locked"></i></span></div>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="c-icon cil-lock-locked"></i></span></div>
                            <input id="password-confirm" class="form-control" type="password"
                                name="password_confirmation" placeholder="Repeat password">
                        </div>
                        <button class="btn btn-block btn-success" type="submit">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
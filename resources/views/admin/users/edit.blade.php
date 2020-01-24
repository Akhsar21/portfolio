@extends('layouts.app')

@section('title', 'Edit Post for ' . $user->name)
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">@yield('title')</div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.users.update', $user) }}" accept-charset="UTF-8"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="form-group">
                        <label for="email">E-mail Address</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="">Roles</label>
                        @foreach ($roles as $role)
                        <div class="">
                            <input type="checkbox" name="roles[]" id="" value="{{ $role->id }}"
                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                            <label for="">{{ $role->name }}</label>
                        </div>
                        @endforeach
                    </div>
                    <input type="submit" class="btn btn-primary btn-square" value="Update">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

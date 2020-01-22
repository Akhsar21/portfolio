@extends('layouts.app')

@section('title', 'Edit Profiles')
@section('body','c-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Create New profile</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.create') }}" accept-charset="UTF-8"
                        enctype="multipart/form-data">

                        @include ('admin.profiles.form', ['formMode' => 'create'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
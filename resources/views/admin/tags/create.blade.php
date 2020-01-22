@extends('layouts.app')

@section('title', 'Create New Tag')
@section('body','c-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">@yield('title')</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tags.store') }}">

                        @include ('admin.tags.form')

                        <div class="form-group">
                            <a href="{{ route('tags.index') }}" title="Back">
                                <button class="btn btn-warning btn-square"><i class="cil-arrow-left" aria-hidden="true"></i> Back</button>
                            </a>
                            <input class="btn btn-primary btn-square" type="submit" value="Create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
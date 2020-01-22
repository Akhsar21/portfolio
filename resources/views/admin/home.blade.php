@extends('layouts.app')

@section('title', 'Dashboard')
@section('body','c-app')

@section('content')
<div class="row">
    <div class="col-6 col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body p-0 d-flex align-items-center">
                <div class="bg-primary p-4 mfe-3">
                    <i class="c-icon c-icon-xl cil-settings"></i>
                </div>
                <div>
                    <div class="text-value text-primary">$1.999,50</div>
                    <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-6 col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body p-0 d-flex align-items-center">
                <div class="bg-info p-4 mfe-3">
                    <i class="c-icon c-icon-xl cil-laptop"></i>
                </div>
                <div>
                    <div class="text-value text-info">$1.999,50</div>
                    <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-6 col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body p-0 d-flex align-items-center">
                <div class="bg-warning p-4 mfe-3">
                    <i class="c-icon c-icon-xl cil-moon"></i>
                </div>
                <div>
                    <div class="text-value text-warning">$1.999,50</div>
                    <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-6 col-lg-3">
        <div class="card overflow-hidden">
            <div class="card-body p-0 d-flex align-items-center">
                <div class="bg-danger p-4 mfe-3">
                    <i class="c-icon c-icon-xl cil-bell"></i>
                </div>
                <div>
                    <div class="text-value text-danger">$1.999,50</div>
                    <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="who-we-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="who-we-box white-bg">
                    <div class="section-title">
                        <h2>Who We Are</h2>
                        <h5>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. & Minus, dolor corporis doloribus 
                        </h5>
                        <br>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi hic illum magnam itaque rerum
                        minus similique voluptates recusandae totam voluptate eum qui dignissimos ducimus alias officia
                        explicabo, nam quia neque. Dolores, repellat quasi ipsam soluta quam necessitatibus illo alias
                        ea vitae, quidem accusamus, sint tenetur nostrum. Eius sunt consectetur optio illum explicabo
                        quasi nobis sequi fuga, reprehenderit tempore dicta repudiandae corrupti modi natus officiis
                        eveniet? Repellat, non. 
                    </p>
                    <a href="#" class="btn brand-btn">Contact us 
                        <span><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
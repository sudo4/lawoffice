@extends('layouts.main')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active">Gallery</li>
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                <div class="chart-text m-r-10">
                    <a href="/gallery/create" class="btn btn-info">Tambah</a>
                </div>
            </div>
            
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- start content --}}
<div class="row m-t-40">
    <div class="col-md-12">
        <h4 class="card-title">Gallery </h4>
        <h6 class="card-subtitle m-b-20 text-muted">Tambah Gallery</h6> </div>
</div>
<div class="card-columns el-element-overlay">
    @foreach ($galery as $a)
    <div class="card">
        <div class="el-card-item">
            <div class="el-card-avatar el-overlay-1">
                <a class="image-popup-vertical-fit" href="/storage/gallery/{{$a->img}}"> <img src="/storage/gallery/{{$a->img}}" alt="user" /> </a>
            </div>
            <div class="el-card-content">
                <h3 class="box-title">{{$a->title}}</h3>
                <br/> </div>
        </div>
    </div>
    @endforeach
    
    
    
</div>
@endsection
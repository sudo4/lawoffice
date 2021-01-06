@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="/assets/plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                <div class="chart-text m-r-10">
                    <a href="{{url()->previous()}}" class="btn btn-warning">Kembali</a>
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
        <h6 class="card-subtitle m-b-20 text-muted">Galery Kami</h6> </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About</h4>
                <h6 class="card-subtitle">Tentang Kami</h6>
                <form method="post" action="{{route('about.store')}}">
                    @csrf
                    <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
                    <br>
                    <br>
                    <textarea id="mymce" class="form-control" name="body"></textarea>
                    <br>
                    <br>
                    <button class="btn btn-info" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

    
@endsection

@section('js')
<script src="/assets/plugins/tinymce/tinymce.min.js"></script>
    <script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script>
@endsection

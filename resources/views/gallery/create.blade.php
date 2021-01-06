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
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('gallery.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <h4 class="card-title">Tambah Foto</h4>
                <input type="file" id="input-file-now" class="form-control dropify" name="img" value="/storage/galery/{{old('img')}}" />
                <br>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Masukkan Judul">
                <br>
                <br>
                <hr>
                <button class="btn btn-sm btn-dark" type="submit">Simpan</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

    
@endsection

@section('js')
<script src="/assets/plugins/dropify/dist/js/dropify.min.js"></script>
<script>
$(document).ready(function() {
    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });

    // Used events
    var drEvent = $('#input-file-events').dropify();

    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    drEvent.on('dropify.errors', function(event, element) {
        console.log('Has Errors');
    });

    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e) {
        e.preventDefault();
        if (drDestroy.isDropified()) {
            drDestroy.destroy();
        } else {
            drDestroy.init();
        }
    })
});
</script>
@endsection

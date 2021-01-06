@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('team.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @include('layouts.message')
                        
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 3</label>
                                <input class="form-control" type="file" name="preface_img" value="{{old('preface_img')}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 3 Title</label>
                                <input class="form-control" type="file" name="img" value="{{old('img')}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 3</label>
                                <input class="form-control" type="text" name="title" value="{{old('title')}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 3 Title</label>
                                <input class="form-control" type="text" name="subtitle" value="{{old('subtitle')}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="formFile" class="form-label">About</label>
                                <fieldset>
                                    <textarea id="textarea-ckeditor" name="preface" class="form-control ckeditor" value="{{old('preface')}}"></textarea>
                                </fieldset> 
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-info" type="submit">submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

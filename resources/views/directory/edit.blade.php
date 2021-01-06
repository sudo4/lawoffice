@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('directory.update', $directory->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('patch')
                    @include('layouts.message')
                        
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 3</label>
                                <input class="form-control" type="text" name="title" value="{{$directory->title}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 3 Title</label>
                                <input class="form-control" type="text" name="link" value="{{$directory->link}}" id="formFile">
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

@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('home.update', $data->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('patch')
                    @include('layouts.message')
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 1</label>
                                <input class="form-control" type="file" name="a" value="{{$data->a}}" id="formFile">

                                <img src="/storage/img/{{$data->a}}" style="width: 50%;" alt="">

                            </div>
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 1 Icon</label>
                                <input class="form-control" type="file" name="aa" value="{{old('aa')}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 2</label>
                                <input class="form-control" type="file" name="b" value="{{old('b')}}" id="formFile">
                            </div>
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 2 Title</label>
                                <input class="form-control" type="text" name="bb" value="{{$data->bb}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 3</label>
                                <input class="form-control" type="file" name="c" value="{{old('c')}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 3 Title</label>
                                <input class="form-control" type="text" name="cc" value="{{$data->cc}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 4</label>
                                <input class="form-control" type="file" name="d" value="{{old('d')}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 4 Title</label>
                                <input class="form-control" type="text" name="dd" value="{{$data->dd}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" value="{{$data->address}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Phone</label>
                                <input class="form-control" type="number" name="phone" value="{{$data->phone}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Email</label>
                                <input class="form-control" type="mail" name="mail" value="{{$data->mail}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Office Hour</label>
                                <input class="form-control" type="text" name="office_hour" value="{{$data->office_hour}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="formFile" class="form-label">About</label>
                                <input class="form-control" type="text" name="about_title" value="{{$data->about_title}}" id="formFile">
                            </div>
                            <div class="col-md-12">
                                <label for="formFile" class="form-label"></label>
                                    <input style="text-align: justify;" class="form-control" value="{!! $data->about !!}" name="about">
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

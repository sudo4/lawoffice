@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('home.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @include('layouts.message')
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Slide 1</label>
                                <input class="form-control" type="file" name="a" value="{{old('a')}}" id="formFile">
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
                                <input class="form-control" type="text" name="bb" value="{{old('bb')}}" id="formFile">
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
                                <input class="form-control" type="text" name="cc" value="{{old('cc')}}" id="formFile">
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
                                <input class="form-control" type="text" name="dd" value="{{old('dd')}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" value="{{old('address')}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Phone</label>
                                <input class="form-control" type="number" name="phone" value="{{old('phone')}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="formFile" class="form-label">Email</label>
                                <input class="form-control" type="mail" name="mail" value="{{old('mail')}}" id="formFile">
                            </div>
    
                            <div class="col">
                                <label for="formFile" class="form-label">Office Hour</label>
                                <input class="form-control" type="text" name="office_hour" value="{{old('office_hour')}}" id="formFile">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="formFile" class="form-label">About Title</label>
                                <input class="form-control" type="text" name="about_title" value="{{old('about_title')}}" id="formFile">
                            </div>
                            <div class="col-md-12">
                                <label for="formFile" class="form-label">About</label>
                                <fieldset>
                                    <textarea id="textarea-ckeditor" name="about" class="form-control ckeditor" value="{{old('about')}}"></textarea>
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

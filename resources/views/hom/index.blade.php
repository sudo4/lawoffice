@extends('layouts.main')

@section('content')
@foreach ($hom as $a)
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
                    <a href="{{route('home.edit', $a->id)}}" class="btn btn-info">Ubah</a>
                </div>
            </div>
            
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- start content --}}

<div class="row">
                    
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Timeline</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="#" class="link">John Doe</a>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 m-b-20"><img src="/storage/img/{{$a->a}}" alt="user" class="img-responsive radius" /></div>
                                            <div class="col-lg-6 col-md-6 m-b-20"><img src="/storage/img/{{$a->aa}}" alt="user" class="img-responsive radius" /></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div> <a href="#" class="link">John Doe</a>
                                        <div class="m-t-20 row">
                                            <div class="col-md-3 col-xs-12"><img src="/storage/img/{{$a->b}}" alt="user" class="img-responsive radius" /></div>
                                            <div class="col-md-9 col-xs-12">
                                                <p> {{$a->bb}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div> <a href="#" class="link">John Doe</a>
                                        <div class="m-t-20 row">
                                            <div class="col-md-3 col-xs-12"><img src="/storage/img/{{$a->c}}" alt="user" class="img-responsive radius" /></div>
                                            <div class="col-md-9 col-xs-12">
                                                <p> {{$a->cc}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div> <a href="#" class="link">John Doe</a>
                                        <div class="m-t-20 row">
                                            <div class="col-md-3 col-xs-12"><img src="/storage/img/{{$a->d}}" alt="user" class="img-responsive radius" /></div>
                                            <div class="col-md-9 col-xs-12">
                                                <p> {{$a->dd}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12"> <strong>About Me</strong>
                                <br>
                                <p class="text-muted text-center">{{$a->about_title}}</p>
                            </div>
                            
                        </div>
                        <hr>
                        <p class="m-t-30" style="text-align: justify;">{!! $a->about !!}</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="text-center m-t-30"> <img src="../assets/images/users/5.jpg" alt="img" class="img-circle" width="150" />
                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <span class="font-medium">254</span></a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <span class="font-medium">54</span></a></div>
                    </div>
                </div>
            </div>
            <div>
                <hr> </div>
            <div class="card-body"> <small class="text-muted">Email address </small>
                <h6>{{$a->mail}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                <h6>{{$a->phone}}</h6> <small class="text-muted p-t-30 db">Address</small>
                <h6>{{$a->address}}</h6>
                <div class="map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6490197512376!2d106.7638304142258!3d-6.17771576225339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7aa0d9c8c21%3A0xf5ef49376ec9ea8f!2sJl.%20Panjang%20No.18%2C%20RT.11%2FRW.1%2C%20Kedoya%20Sel.%2C%20Kec.%20Kb.%20Jeruk%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011520!5e0!3m2!1sid!2sid!4v1609910706479!5m2!1sid!2sid" height="150" class="w-100" style="border:0" allowfullscreen></iframe>
                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                <br/>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
            </div>
        </div>
    </div>
    <!-- Column -->
</div> 
@endforeach

@endsection
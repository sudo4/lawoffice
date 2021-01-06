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
                    <a href="/about/create" class="btn btn-info">Tambah</a>
                </div>
            </div>
            
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
    </div>
</div>
{{-- start content --}}
  <!-- ============================================================== -->
  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tentang Kami</h4>
                <h6 class="card-subtitle"></h6>
                @foreach ($about as $a)
                <div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne11">
                            <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">
                              {{$a->title}}
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne11" class="collapse show" role="tabpanel" aria-labelledby="headingOne11">
                            <div class="card-body">
                                {!! $a->body !!}
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach
                
            </div>
        </div>
    </div>
</div>

@endsection
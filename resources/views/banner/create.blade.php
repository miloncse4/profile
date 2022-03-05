@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
            @if(session('InsErr'))
            <div class="alert alert-danger alert-dismissable fade show">
                <strong>{{session('InsErr')}}</strong>
            </div>
            @endif
            @if(session('Insert'))
            <div class="alert alert-success alert-dismissable fade show">
                <strong>{{session('Insert')}}</strong>
            </div>
            @endif
                <div class="card-header bg-info text-light">
                    <h3 class="card-title">Create Banner</h3>
                </div>
            
                <div class="card-body">

                <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-labe text-uppercase mb-2">Title</label>
                        <input class="form-control" type="text" name="title"/>
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label class="form-labe text-uppercase mb-2">Sub title</label>
                        <input class="form-control" type="text" name="sub_title"/>
                        @error('sub_title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                      <label class="form-labe text-uppercase mb-2">background image</label>
                        <input class="form-control" type="file" name="bc_img"/>
                        @error('bc_img')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <small class="text-info d-block mt-2">Banner image dimantion: W- 270 H-310 px</small>
                    </div>
                    <div class="div-3">
                        <button class="btn btn-danger" type="submit">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
</div>
@endsection


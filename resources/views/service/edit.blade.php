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
            @if(session('update'))
            <div class="alert alert-success alert-dismissable fade show">
                <strong>{{session('update')}}</strong>
            </div>
            @endif
                <div class="card-header bg-success text-light">
                    <h3 class="card-title text-center"><i>Edit Services</i></h3>
                </div>
          
                <div class="card-body">
                <form action="{{ route('service.update',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label class="form-labe text-uppercase mb-2">Icon</label>
                        <input class="form-control" type="text" name="icon" value="{{$data->icon}}"/>
                        @error('icon')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label class="form-labe text-uppercase mb-2">Title</label>
                        <input class="form-control" type="text" name="title" value="{{$data->title}}"/>
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                      <label class="form-labe text-uppercase mb-2">Description</label>
                        <input class="form-control" type="text" name="description" value="{{$data->description}}"/>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="div-3">
                        <button class="btn btn-success" type="submit">Service Edit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
</div>
@endsection


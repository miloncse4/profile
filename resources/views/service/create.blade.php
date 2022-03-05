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
            @if(session('Done'))
            <div class="alert alert-success alert-dismissable fade show">
                <strong>{{session('Done')}}</strong>
            </div>
            @endif
                <div class="card-header bg-warning text-light">
                    <h3 class="card-title">Services Create</h3>
                </div>
            
                <div class="card-body">

                <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">

                        <div class="mb-3">
                      <label for="icon" class="form-labe mb-2">Font Awesome icon</label>
                        <input class="form-control" type="text" name="icon"/>
                        @error('icon')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                      <label for="title" class="form-labe mb-2">Title</label>
                        <input class="form-control" type="text" name="title"/>
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                      <label for="description" class="form-labe mb-2">Description</label>
                        <textarea class="form-control" type="text" name="description"></textarea>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                        </div>
                        <div class="div-3">
                        <button class="btn btn-warning" type="submit">Submit</button>
                    </div>
                    </div>
                   
                </form>
                </div>
            </div>
        </div>
</div>
@endsection


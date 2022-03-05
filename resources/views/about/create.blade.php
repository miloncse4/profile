@extends('dashboard.master')
@section('content')
<div class="container">
     <div class="card mt-5">
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
       <div class="card-header bg-success text-light d-sm-flex align-items-center justify-content-between">
         <h2><i>Create About information</i></h2>
         <a href="{{route('about.info')}}" class="btn btn-sm btn-danger text-light" style="font-weight:bold;">All information</a>
       </div>
       <div class="card-body">
         <table class="table table-bordered">
           <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
             <label class="form-labe text-uppercase mb-2">About image</label>
                <input class="form-control" type="file" name="ab_img"/>
                  @error('ab_img')
                    <small class="text-danger">{{$message}}</small>
                     @enderror
                    <small class="text-danger d-block mt-2">About image dimantion: W- 270 H-310 px</small>
                </div>

            <div class="mb-3">
              <label class="form-labe text-uppercase mb-2">Heading</label>
             <input class="form-control" type="text" name="title"/>
                @error('title')
                 <small class="text-danger">{{$message}}</small>
                 @enderror
                </div>

            <div class="mb-3">
              <label class="form-labe text-uppercase mb-2">Description</label>
                 <input class="form-control" type="text" name="description"/>
                    @error('description')
                          <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>

                   
             <button type="submit" class="btn btn-success">Create</button>
           </form>
         </table>
       </div>
     </div>
   </div>
@endsection
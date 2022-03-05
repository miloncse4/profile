@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="card mt-5">
      <div class="card-header bg-dark text-light d-sm-flex align-items-center justify-content-between">
        <h2><i>Biodata Edit</i></h2>
        <a href="{{ route('contact.create') }}" class="btn btn-sm btn-light text-dark" style="font-weight:bold;"><i>Create Biodata</i></a>
      </div>
      <div class="card-body">
       @if(Session::has('update'))
       <div class="alert alert-success">
         <strong>{{Session::get('update')}}</strong>
       </div>
       @endif
        <table class="table table-bordered">
            <form action="{{ route('contact.update',$info->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
            
            
                <div class="mb-3">
                  <label for="title" class="form-labe mb-2"><i>Name</i></label>
                    <input class="form-control" type="text" name="name" value="{{ $info->name }}"/>
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="title" class="form-labe mb-2"><i>Email</i></label>
                      <input class="form-control" type="text" name="email" value="{{ $info->email }}"/>
                      @error('email')
                          <small class="text-danger">{{$message}}</small>
                      @enderror
                  </div>

                  <div class="mb-3">
                    <label for="title" class="form-labe mb-2"><i>Address</i></label>
                      <input class="form-control" type="text" name="address" value="{{ $info->address }}"/>
                      @error('address')
                          <small class="text-danger">{{$message}}</small>
                      @enderror
                  </div>
            
                    </div>
                    <div class="div-3">
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
                </div>
               
            </form>
        </table>
      </div>
    </div>
  </div>
@endsection



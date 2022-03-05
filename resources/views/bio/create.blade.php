@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="card mt-5">
      <div class="card-header bg-dark text-light d-sm-flex align-items-center justify-content-between">
        <h2><i>Biodata Add</i></h2>
        <a href="{{ route('contact.index') }}" class="btn btn-sm btn-light text-dark" style="font-weight:bold;"><i>All Biodata</i></a>
      </div>
      <div class="card-body">
       @if(Session::has('success'))
       <div class="alert alert-success">
         <strong>{{Session::get('success')}}</strong>
       </div>
       @endif
        <table class="table table-bordered">
            <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
            
            
                <div class="mb-3">
                  <label for="title" class="form-labe mb-2"><i>Name</i></label>
                    <input class="form-control" type="text" name="name"/>
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="title" class="form-labe mb-2"><i>Email</i></label>
                      <input class="form-control" type="text" name="email"/>
                      @error('email')
                          <small class="text-danger">{{$message}}</small>
                      @enderror
                  </div>

                  <div class="mb-3">
                    <label for="title" class="form-labe mb-2"><i>Address</i></label>
                      <input class="form-control" type="text" name="address"/>
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



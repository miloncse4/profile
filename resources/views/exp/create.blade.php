@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="card mt-5">
      <div class="card-header bg-primary text-light d-sm-flex align-items-center justify-content-between">
        <h2><i>Create Expriance</i></h2>
        <a href="{{ route('expriance.index') }}" class="btn btn-sm btn-warning" style="font-weight:bold;">View Expriance</a>
      </div>
      <div class="card-body">
       @if(Session::has('success'))
       <div class="alert alert-success">
         <strong>{{Session::get('success')}}</strong>
       </div>
       @endif
        <table class="table table-bordered">
            <form action="{{ route('expriance.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
            
            
                <div class="mb-3">
                  <label for="title" class="form-labe mb-2">Skill title</label>
                    <input class="form-control" type="text" name="sk_title"/>
                    @error('sk_title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="title" class="form-labe mb-2">Skill Expriance</label>
                      <input class="form-control" type="text" name="sk_exp"/>
                      @error('sk_exp')
                          <small class="text-danger">{{$message}}</small>
                      @enderror
                  </div>
            
                    </div>
                    <div class="div-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                </div>
               
            </form>
        </table>
      </div>
    </div>
  </div>
@endsection



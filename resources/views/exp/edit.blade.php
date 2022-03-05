@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="card mt-5">
      <div class="card-header bg-info text-light d-sm-flex align-items-center justify-content-between">
        <h2><i>Edit expriance</i></h2>
        <a href="{{ route('expriance.index') }}" class="btn btn-sm btn-warning" style="font-weight:bold;">Update expriance</a>
      </div>
      <div class="card-body">
       @if(Session::has('update'))
       <div class="alert alert-success">
         <strong>{{Session::get('update')}}</strong>
       </div>
       @endif
        <table class="table table-bordered">
            <form action="{{ route('expriance.update',$info->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
            
                <div class="mb-3">
                  <label for="title" class="form-labe mb-2">Skill title</label>
                    <input class="form-control" type="text" name="sk_title" value="{{ $info-> sk_title}}"/>
                    @error('sk_title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="title" class="form-labe mb-2">Skill Expriance</label>
                      <input class="form-control" type="text" name="sk_exp" value="{{ $info->sk_exp }}"/>
                      @error('sk_exp')
                          <small class="text-danger">{{$message}}</small>
                      @enderror
                  </div>
            
                    </div>
                    <div class="div-3">
                    <button class="btn btn-info text-light" type="submit">Edit</button>
                </div>
                </div>
               
            </form>
        </table>
      </div>
    </div>
  </div>
@endsection

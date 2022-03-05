@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header bg-success text-light d-sm-flex align-items-center justify-content-between">
                  <h2 class="text-center"><i>Team Edit</i></h2>
                  <a href="{{ route('team.index') }}" class="btn btn-sm btn-danger" style="font-weight:bold;">View Team</a>
                </div>
                <div class="card-body">
                 @if(Session::has('success'))
                 <div class="alert alert-success">
                   <strong>{{Session::get('success')}}</strong>
                 </div>
                 @endif
                  <table class="table table-bordered">
                      <form action="{{ route('team.update',$info->id) }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                              <div class="form-group col-md-12">
          
                                <div class="mb-3">
                                    <img width="150px;" src="{{ asset('uploads/team/'.$info->t_img) }}" alt="{{ $info->title  }}"/>
                                </div>
                                  <div class="mb-3">
                                      <label for="icon" class="form-labe mb-2">Team image</label>
                                        <input class="form-control" type="file" name="t_img"/>
                                        @error('t_img')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                  </div>
                      
                              <div class="mb-3">
                            <label for="icon" class="form-labe mb-2">Title</label>
                              <input class="form-control" type="text" name="title" value="{{ $info->title }}"/>
                              @error('title')
                                  <small class="text-danger">{{$message}}</small>
                              @enderror
                          </div>
                      
                          <div class="mb-3">
                              <label for="description" class="form-labe mb-2">Description</label>
                                <textarea class="form-control" type="text" name="description" rows="5">{{ $info->description }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>           
                      
                              </div>
                              <div class="div-3">
                              <button class="btn btn-success" type="submit">Submit</button>
                          </div>
                          </div>
                         
                      </form>
                  </table>
                </div>
              </div>
        </div>
    </div>
  </div>
@endsection



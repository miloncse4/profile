@extends('dashboard.master')
@section('content')
<div class="container">
     <div class="card bg-info mt-5">
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
       <div class="card-header bg-warning d-sm-flex align-items-center justify-content-between">
         <h2><i>All information</i></h2>
       </div>
       <div class="card-body">
         <table class="table table-bordered">
           <thead>
             <tr>
               <td>Sl</td>
               <td>About Image</td>
               <td>Heading</td>
               <td>Description</td>
               <td>Action</td>
             </tr>
           </thead>
           <tbody>
         @foreach($alls as $all)
             <tr>
               <td>{{$loop->index+1}}</td>
               <td>
               <img src="{{ asset('uploads/about_photo') }}/{{$all->ab_img}}" alt="not found" width="100">
               </td>
               <td>{{$all->title}}</td>
               <td>{{$all->description}}</td>
               <td>
                 <a href="{{route('about.edit',$all->id)}}" class="btn btn-sm btn-primary">Edite</a>
               </td>
             </tr>
           @endforeach
           </tbody>
         </table>
       </div>
     </div>
   </div>
@endsection
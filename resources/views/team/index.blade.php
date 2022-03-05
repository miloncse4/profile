@extends('dashboard.master')
@section('content')
<div class="container">
     <div class="card mt-5">
       <div class="card-header bg-success text-light d-sm-flex align-items-center justify-content-between">
         <h2><i>Team Overview</i></h2>
         <a href="{{ route('team.create') }}" 
         class="btn btn-sm btn-info" style="font-weight: bold;">Create Team</a>
       </div>
       <div class="card-body">
         @if(Session::has('dele'))
        <div class="alert alert-danger">
          <strong>{{Session::get('dele')}}</strong>
        </div>
        @endif
         <table class="table table-bordered">
           <thead>
             <tr>
               <td>#</td>
               <td>Team image</td>
               <td>Title</td>
               <td>Description</td>
               <td>Option</td>
             </tr>
           </thead>
           <tbody>
            @foreach($tem_infos as $tem_info)
             <tr>
               <td>{{$loop->index+1}}</td>
               <td>
                   <img width="150px;" src="{{ asset('uploads/team/'.$tem_info->t_img) }}" alt="{{$tem_info->title}}"/>
               </td>
               <td>{{$tem_info->title}}</td>
               <td>{{$tem_info->description}}</td>
               <td>
                 
                 <a href="{{ route('team.edit',$tem_info->id) }}" class="btn btn-sm btn-success">Edite</a><br><br>
                 <a href="{{ route('team.delete',$tem_info->id) }}" class="btn btn-sm btn-danger">Delete</a>
                
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>
   </div>
@endsection
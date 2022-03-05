@extends('dashboard.master')
@section('content')
<div class="container">
     <div class="card mt-5">
       <div class="card-header bg-success text-light d-sm-flex align-items-center justify-content-between">
         <h2><i>Skill Overview</i></h2>
         <a href="{{ route('expriance.create') }}" 
         class="btn btn-sm btn-info" style="font-weight: bold;">Create Expriance</a>
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
               <td>Skill-Title</td>
               <td>Expriance</td>
               <td>Option</td>
             </tr>
           </thead>
           <tbody>
            @foreach($sill_data as $data)
             <tr>
               <td>{{$loop->index+1}}</td>
               <td>{{$data->sk_title}}</td>
               <td>{{$data->sk_exp}}</td>
               <td>
                 
                 <a href="{{ route('expriance.edit',$data->id) }}" class="btn btn-sm btn-success">Edite</a>
                 <a href="{{ route('expriance.delete',$data->id) }}" class="btn btn-sm btn-danger">Delete</a>
                
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>
   </div>
@endsection
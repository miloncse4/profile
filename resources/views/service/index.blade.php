@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
        <div class="card">
                <div class="card-header bg-danger text-light">
                    Service information
                </div>
                <div class="card-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <th>SL</th>
                        <th>icon</th>
                        <th>Title</th> 
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @if(count($data) > 0)
                        @forelse($data as $info)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$info->icon}}</td>
                            <td>{{$info->title}}</td>
                            <td>{{$info->description}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a  href="{{route('service.edit',$info->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a   href="{{route('service.delete',$info->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td class="text-danger text-center" colspan="10">No data add yeat</td>
                        </tr>
                        @endforelse
                        @endif
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>
</div>
@endsection

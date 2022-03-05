@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 m-auto">
        <div class="card">
                <div class="card-header bg-primary text-light">
                    information of Banner
                </div>
                <div class="card-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Sub title</th> 
                        <th>Background image</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse($all_info as $info)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$info->title}}</td>
                            <td>{{$info->sub_title}}</td>
                            <td>
                              <img src="{{ asset('uploads/banner_photo') }}/{{$info->bc_img}}" alt="not found" width="100">
                            </td>
                            <td>{{$info->created_at->format('d-m-Y')}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a  href="{{url('/banner/edit',$info->id)}}" class="btn btn-info btn-sm">Edit</a>
                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td class="text-danger text-center" colspan="10">No data add yeat</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>
</div>
@endsection

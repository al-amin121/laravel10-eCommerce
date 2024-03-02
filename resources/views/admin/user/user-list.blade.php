@extends('admin.layouts.app')
@section('css')

@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header pt-3">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{route('admin.addUser')}}"><button class="btn btn-primary">+ Add New User</button></a>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-12 ms-3 ms-5">
        @include('admin.includes.message')
    </div>
    <!-- /.content-header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Users</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($getRecord as $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{($value->status == 0) ? 'Active' : 'Inactive'}}</td>
                                        <td style="text-align: center" >
                                            <a href="{{url('admin/user/edit/'.$value->id)}}"><button class="btn btn-primary">Edit</button></a>
                                            <a href="{{url('admin/user/delete/'.$value->id)}}"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection

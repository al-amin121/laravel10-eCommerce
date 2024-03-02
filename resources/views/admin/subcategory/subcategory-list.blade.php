@extends('admin.layouts.app')
@section('css')

@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header pt-3">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sub_Category List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href=" {{route('subcategory.add')}}"><button class="btn btn-primary">+ Add New Sub_Category</button></a>
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
                                    <th>Category Name</th>
                                    <th>Sub_Category Name</th>
                                    <th>Slug</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Meta Keywords</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($getRecord as $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->category_name }}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->slug}}</td>
                                        <td>{{$value->meta_title}}</td>
                                        <td>{{$value->meta_description}}</td>
                                        <td>{{$value->meta_keywords}}</td>
                                        <td>{{$value->created_by_name}}</td>
                                        <td>{{($value->status == 0) ? 'Active' : 'Inactive'}}</td>
                                        <td>{{ date('d-m-y', strtotime($value->created_at))}}</td>
                                        <td style="text-align: center" >
                                            <a href="{{url('admin/subcategory/edit/'.$value->id)}}"><button class="btn btn-primary">Edit</button></a>
                                            <a href="{{url('admin/subcategory/delete/'.$value->id)}}"><button class="btn btn-danger">Delete</button></a>
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

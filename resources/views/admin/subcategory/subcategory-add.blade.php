@extends('admin.layouts.app')
@section('css')

@endsection
@section('content')
    <section class="content-header pt-3">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Add New Sub_Category</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Sub_Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('subcategory.insert')}}" method="post">
                            @csrf
                            <div class="card-body ">
                                <div class="form-group">
                                    <label for="exampleInputName">Category Name <span style="color: red">*</span> </label>
                                    <input type="text" name="name" value="{{ old('name')}}" class="form-control" id="exampleInputName" required placeholder="Enter Category Name">
                                </div>
                                <div class="form-group">
                                    <label >Slug <span style="color: red">*</span> </label>
                                    <input type="text" name="slug" value="{{ old('slug')}}" class="form-control" required placeholder="Enter Category slug">
                                    <div style="color: red">{{ $errors->first('slug') }}</div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status <span style="color: red">*</span> </label>
                                    <select class="form-control" name="status" required>
                                        <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                                        <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="exampleInputName">Meta title <span style="color: red">*</span> </label>
                                    <input type="text" name="meta_title" value="{{ old('meta_title')}}" class="form-control" id="exampleInputName" required placeholder="Enter Meta title">
                                </div>
                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" rows="3" class="form-control" placeholder="Enter Meta Description">{{ old('meta_description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Meta Keywords</label>
                                    <input type="text" name="meta_keywords" value="{{ old('meta_keywords')}}" class="form-control" id="exampleInputName"  placeholder="Enter Meta Keywords">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@endsection

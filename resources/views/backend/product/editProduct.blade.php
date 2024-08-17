@extends('backend.layouts.main')
@section('title')
    {{ 'Edit Product' }}
@endsection
@section('main-container')
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Product</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="inputName" name="name" class="form-control"
                                value="{{ old('name', $product->name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control"
                                value="{{ old('order_no', $product->order_no) }}" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="imageUploadFields">
                            <div class="form-group">
                                <label for="inputImage">Product Image</label>
                                <input type="file" id="inputImage" name="image" class="form-control-file"
                                    accept="image/*">
                                <div id="imagePreview" class="mt-2">
                                    @if ($product->image)
                                        <img src="{{ asset('uploads/products/' . $product->image) }}" alt="Home Page Image"
                                            style="width: 100px; height: auto; margin-top: 10px;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('admin.listproducts') }}" class="btn btn-secondary float-right">Cancel</a>
                <input type="submit" value="Submit" class="btn btn-success float-right">
            </div>
        </div>
    </form>
@endsection

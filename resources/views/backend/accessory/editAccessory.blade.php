@extends('backend.layouts.main')
@section('title')
    {{ 'Edit Accessory' }}
@endsection
@section('main-container')
    <form action="{{ route('accessory.update', $accessory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Accessory</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="inputName" name="name" class="form-control"
                                value={{ old('name', $accessory->name) }} required>
                        </div>
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control"
                                value={{ old('order_no', $accessory->order_no) }} required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" name="description" class="form-control" rows="4">{{ old('description', $accessory->description) }}</textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-body">
                        <div id="imageUploadFields">
                            <div class="form-group">
                                <label for="inputImage1">Upload Slider Images</label>
                                <input type="file" id="inputImage1" name="images[]" class="form-control-file"
                                    accept="image/*">
                                <div id="imagePreview1" class="mt-2">
                                    @foreach (explode(',', $accessory->images) as $image)
                                        <img src="{{ asset('images/' . $image) }}" alt="Image"
                                            style="width: 100px; height: auto; margin-top: 10px;">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="addImageUploadField()">Add Another
                            Image</button>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('admin.listaccessories') }}" class="btn btn-secondary float-right">Cancel</a>
                <input type="submit" value="Submit" class="btn btn-success float-right">
            </div>
        </div>
    </form>
@endsection

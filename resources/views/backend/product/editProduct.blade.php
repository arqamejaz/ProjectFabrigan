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
                        <div class="form-group">
                            <label for="typeSelect">Type</label>
                            <select id="typeSelect" name="type" class="form-control"
                                onchange="showRelevantDropdown(this.value)">
                                <option value="" disabled>Select Type</option>
                                <option value="accessory"
                                    {{ old('type', $product->type) == 'accessory' ? 'selected' : '' }}>Accessories</option>
                                <option value="category" {{ old('type', $product->type) == 'category' ? 'selected' : '' }}>
                                    Categories</option>
                            </select>
                        </div>

                        <div class="form-group" id="categoryDropdown"
                            style="display: {{ old('type', $product->type) == 'category' ? 'block' : 'none' }};">
                            <label for="categorySelect">Select Category</label>
                            <select id="categorySelect" name="category_id" class="form-control">
                                <option value="" disabled
                                    {{ old('category_id', $product->category_id) ? '' : 'selected' }}>Select Category
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" id="accessoryDropdown"
                            style="display: {{ old('type', $product->type) == 'accessory' ? 'block' : 'none' }};">
                            <label for="accessorySelect">Select Accessory</label>
                            <select id="accessorySelect" name="accessory_id" class="form-control">
                                <option value="" disabled
                                    {{ old('accessory_id', $product->accessory_id) ? '' : 'selected' }}>Select Accessory
                                </option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}"
                                        {{ old('accessory_id', $product->accessory_id) == $accessory->id ? 'selected' : '' }}>
                                        {{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="imageUploadFields">
                            <div class="form-group">
                                <label for="inputImage">Home Page Image</label>
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
                    <div class="card-body">
                        <div id="imageUploadFields">
                            <div class="form-group">
                                <label for="inputImage1">Upload Slider Images</label>
                                <input type="file" id="inputImage1" name="images[]" class="form-control-file"
                                    accept="image/*">
                                <div id="imagePreview1" class="mt-2">
                                    @foreach (explode(',', $product->images) as $image)
                                        <img src="{{ asset('uploads/products/' . $image) }}" alt="Image"
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
                <a href="{{ route('admin.listproducts') }}" class="btn btn-secondary float-right">Cancel</a>
                <input type="submit" value="Submit" class="btn btn-success float-right">
            </div>
        </div>
    </form>
    <script>
        function showRelevantDropdown(selectedType) {
            document.getElementById('categoryDropdown').style.display = (selectedType === 'category') ? 'block' : 'none';
            document.getElementById('accessoryDropdown').style.display = (selectedType === 'accessory') ? 'block' : 'none';
        }

        // Initialize the form based on the current type
        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.getElementById('typeSelect');
            showRelevantDropdown(typeSelect.value);
        });
    </script>
@endsection

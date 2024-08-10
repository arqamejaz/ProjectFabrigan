@extends('backend.layouts.main')
@section('title')
    {{ 'Add Product' }}
@endsection
@section('main-container')
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Product</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" id="inputName" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="typeSelect">Type</label>
                            <select id="typeSelect" name="type" class="form-control"
                                onchange="showRelevantDropdown(this.value)">
                                <option value="" disabled {{ old('type') ? '' : 'selected' }}>Select Type</option>
                                <option value="accessory" {{ old('type') == 'accessory' ? 'selected' : '' }}>Accessories
                                </option>
                                <option value="category" {{ old('type') == 'category' ? 'selected' : '' }}>Categories
                                </option>
                            </select>
                        </div>

                        <div class="form-group" id="categoryDropdown" style="display: none;">
                            <label for="categorySelect">Select Category</label>
                            <select id="categorySelect" name="category_id" class="form-control">
                                <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>Select Category
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" id="accessoryDropdown" style="display: none;">
                            <label for="accessorySelect">Select Accessory</label>
                            <select id="accessorySelect" name="accessory_id" class="form-control">
                                <option value="" disabled {{ old('accessory_id') ? '' : 'selected' }}>Select Accessory
                                </option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}"
                                        {{ old('accessory_id') == $accessory->id ? 'selected' : '' }}>
                                        {{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-body">
                        <div id="imageUploadFields">
                            <div class="form-group">
                                <label for="inputImage">Home Page Image</label>
                                <input type="file" id="inputImage" name="image" class="form-control-file"
                                    accept="image/*">
                                <div id="imagePreview" class="mt-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="imageUploadFields">
                            <div class="form-group">
                                <label for="inputImage1">Upload Slider Images</label>
                                <input type="file" id="inputImage1" name="images[]" class="form-control-file"
                                    accept="image/*">
                                <div id="imagePreview1" class="mt-2"></div>
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
                <a href="#" class="btn btn-secondary float-right">Cancel</a>
                <input type="submit" value="Submit" class="btn btn-success float-right">
            </div>
        </div>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const type = "{{ old('type') }}";
            showRelevantDropdown(type);
        });

        function showRelevantDropdown(type) {
            document.getElementById('categoryDropdown').style.display = 'none';
            document.getElementById('accessoryDropdown').style.display = 'none';

            if (type === 'category') {
                document.getElementById('categoryDropdown').style.display = 'block';
            } else if (type === 'accessory') {
                document.getElementById('accessoryDropdown').style.display = 'block';
            }
        }
    </script>
@endsection

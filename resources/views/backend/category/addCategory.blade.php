@extends('backend.layouts.main')
@section('title')
    {{ 'Add Category' }}
@endsection
@section('main-container')
<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Name *:</label>
                        <input type="text" id="inputName" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="inputOrderNo">Order Number *:</label>
                        <input type="number" id="inputOrderNo" name="order_no" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Description *:</label>
                        <textarea id="inputDescription" name="description" class="form-control" rows="4" required></textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-body">
                    <div id="imageUploadFields">
                        <div class="form-group">
                            <label for="inputLPImage">Upload Image for Landing Page *:</label>
                            <input type="file" id="inputLPImage" name="LPImage" class="form-control-file"
                                accept="image/*" required>
                            <div id="imagePreview" class="mt-2"></div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="serviceImageUploadFields">
                        <div class="form-group">
                            <label for="inputServiceImage">Upload Service Images *:</label>
                            <input type="file" id="inputServiceImage" name="serviceImages[]" class="form-control-file"
                                accept="image/*" multiple>
                            <div id="serviceImagePreview" class="mt-2"></div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="sliderImageUploadFields">
                        <div class="form-group">
                            <label for="inputSliderImage">Upload Slider Images *:</label>
                            <input type="file" id="inputSliderImage" name="sliderImages[]" class="form-control-file" accept="image/*" multiple>
                            <div id="sliderImagePreview" class="mt-2"></div>
                        </div>
                    </div>
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
    // Preview selected images for service images
    document.getElementById('inputServiceImage').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('serviceImagePreview');
        previewContainer.innerHTML = ''; // Clear any previous images

        Array.from(files).forEach(file => {
            const imgElement = document.createElement('img');
            imgElement.src = URL.createObjectURL(file);
            imgElement.style.maxWidth = '100px';
            imgElement.style.height = 'auto';
            imgElement.style.marginTop = '10px';
            imgElement.style.marginRight = '10px';
            previewContainer.appendChild(imgElement);
        });
    });

    // Preview selected images for slider images
    document.getElementById('inputSliderImage').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('sliderImagePreview');
        previewContainer.innerHTML = ''; // Clear any previous images

        Array.from(files).forEach(file => {
            const imgElement = document.createElement('img');
            imgElement.src = URL.createObjectURL(file);
            imgElement.style.maxWidth = '100px';
            imgElement.style.height = 'auto';
            imgElement.style.marginTop = '10px';
            imgElement.style.marginRight = '10px';
            previewContainer.appendChild(imgElement);
        });
    });
</script>
@endsection

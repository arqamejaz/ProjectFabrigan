@extends('backend.layouts.main')
@section('title')
    {{ 'Add Why Choose Us' }}
@endsection
@section('main-container')
    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Why Choose Us</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputImage">Upload Home Page Image</label>
                            <input type="file" id="inputImage" name="image" class="form-control-file" accept="image/*" required>
                            <div id="imagePreview" class="mt-2"></div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('admin.listsliders') }}" class="btn btn-secondary float-right">Cancel</a>
                        <input type="submit" value="Submit" class="btn btn-success float-right mr-2">
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        // Preview the image before uploading
        document.getElementById('inputImage').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imagePreview = document.getElementById('imagePreview');
                    imagePreview.innerHTML = `<img src="${e.target.result}" alt="Image preview" style="width: 100px; height: auto;">`;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection

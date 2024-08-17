@extends('backend.layouts.main')
@section('title')
    {{ 'Edit Why Choose Us' }}
@endsection
@section('main-container')
    <form action="{{ route('whychooseus.update', $wcu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Why Choose Us</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number *:</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control" value="{{ old('order_no', $wcu->order_no) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputImageText">Image Text *:</label>
                            <input type="text" id="inputImageText" name="ImageText" class="form-control" value="{{ old('ImageText', $wcu->image_text) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputImage">Upload Image *:</label>
                            <input type="file" id="inputImage" name="image" class="form-control-file" accept="image/*">
                            <div id="imagePreview" class="mt-2">
                                @if ($wcu->image)
                                    <img src="{{ asset('uploads/whychooseus/' . $wcu->image) }}" alt="Image" style="width: 100px; height: auto; margin-top: 10px;">
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('admin.listwhychooseus') }}" class="btn btn-secondary float-right">Cancel</a>
                        <input type="submit" value="Update" class="btn btn-success float-right mr-2">
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

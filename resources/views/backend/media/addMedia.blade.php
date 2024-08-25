@extends('backend.layouts.main')
@section('title')
    {{ 'Add Media' }}
@endsection
@section('main-container')
<form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Media</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Heading *:</label>
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
                    <div class="form-group">
                        <label for="inputFeatured">
                            <input type="hidden" name="featured" value="0">
                            <input type="checkbox" id="inputFeatured" name="featured" value="1"
                            onchange="this.previousElementSibling.value = this.checked ? '1' : '0';">                            Featured Video
                        </label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-body">
                    <div id="videoUploadFields">
                        <div class="form-group">
                            <label for="inputVideo">Upload Media Video *:</label>
                            <input type="file" id="inputVideo" name="video" class="form-control-file" accept="video/*" required>
                            <div id="videoPreview" class="mt-2">
                                <video controls id="videoPlayer" style="max-width: 15%; display: none;">
                                    <source id="videoSource" src="">
                                    Your browser does not support the video tag.
                                </video>
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
            <a href="#" class="btn btn-secondary float-right">Cancel</a>
            <input type="submit" value="Submit" class="btn btn-success float-right">
        </div>
    </div>
</form>

<script>
    document.getElementById('inputVideo').addEventListener('change', function(event) {
        const videoFile = event.target.files[0];
        if (videoFile) {
            const videoSource = document.getElementById('videoSource');
            videoSource.src = URL.createObjectURL(videoFile);

            const videoPlayer = document.getElementById('videoPlayer');
            videoPlayer.style.display = 'block';
            videoPlayer.load();
        }
    });
</script>
@endsection

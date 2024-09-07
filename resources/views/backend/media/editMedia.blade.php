@extends('backend.layouts.main')
@section('title')
    {{ 'Edit Media' }}
@endsection
@section('main-container')
    <form action="{{ route('media.update', $media->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Media</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Name *:</label>
                            <input type="text" id="inputName" name="name" class="form-control"
                                value="{{ old('name', $media->name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number *:</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control"
                                value="{{ old('order_no', $media->order_no) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description *:</label>
                            <textarea id="inputDescription" name="description" class="form-control" rows="4" required>{{ old('description', $media->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputFeatured">
                                <input type="checkbox" id="inputFeatured" name="featured" value="1" {{ old('featured', $media->featured) ? 'checked' : '' }}>
                                Featured Video
                            </label>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-body">
                        <div id="videoUploadFields">
                            <div class="form-group">
                                <label for="inputVideo">Upload Media Video *:</label>
                                <input type="file" id="inputVideo" name="video" class="form-control-file" accept="video/*" required>
                                <div id="videoThumbnailPreview" class="mt-2">
                                    @if ($media->video)
                                        @php
                                            $parts = explode('/', $media->video);
                                            $videoId = end($parts);
                                        @endphp
                                        <iframe id="" src="{{ "https://player.vimeo.com/video/".$videoId }}" style="width: 40%; height: auto;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                        allowfullscreen></iframe>
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
                <a href="{{ route('admin.listmedia') }}" class="btn btn-secondary float-right">Cancel</a>
                <input type="submit" value="Submit" class="btn btn-success float-right">
            </div>
        </div>
    </form>

    <script>
        document.getElementById('inputVideo').addEventListener('change', function(event) {
            const videoFile = event.target.files[0];
            if (videoFile) {
                const videoThumbnail = document.getElementById('videoThumbnail');
                const videoPlayer = document.getElementById('videoPlayer').querySelector('source');

                videoPlayer.src = URL.createObjectURL(videoFile);

                // Use video element to capture the thumbnail
                const video = document.createElement('video');
                video.src = URL.createObjectURL(videoFile);
                video.currentTime = 1; // Capture the thumbnail at 1 second

                video.addEventListener('loadeddata', function() {
                    const canvas = document.createElement('canvas');
                    canvas.width = 100; // Thumbnail width
                    canvas.height = canvas.width * (video.videoHeight / video.videoWidth); // Maintain aspect ratio

                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

                    videoThumbnail.src = canvas.toDataURL('image/jpeg');
                });

                document.getElementById('videoPreview').style.display = 'block';
            }
        });
    </script>
@endsection

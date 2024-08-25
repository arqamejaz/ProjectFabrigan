@extends('backend.layouts.main')
@section('title')
    {{ 'About Settings' }}
@endsection
@section('main-container')
<form action="{{ route('aboutus.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputAboutImage">Upload About Image</label>
                        <input type="file" id="inputAboutImage" name="aboutimage" class="form-control-file" accept="image/*">
                        @if ($about && $about->image1)
                            <img src="{{ asset('uploads/aboutus/' . $about->image1) }}" alt="About Image" class="img-fluid mt-2" style="width: 10%; height: auto">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="inputWhoWeAre">Who we are</label>
                        <textarea id="inputWhoWeAre" name="WhoWeAre" class="form-control" rows="4">{{ $about->WhoWeAre ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputDirectorMessage">Director Message</label>
                        <textarea id="inputDirectorMessage" name="directorMessage" class="form-control" rows="4">{{ $about->directorMessage ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputImageDirector">Upload Image for Director's Message</label>
                        <input type="file" id="inputImageDirector" name="imagedirector" class="form-control-file" accept="image/*">
                        @if ($about && $about->image2)
                            <img src="{{ asset('uploads/aboutus/' . $about->image2) }}" alt="Director's Message Image" class="img-fluid mt-2"  style="width: 10%; height: auto">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="inputAbout">About</label>
                        <textarea id="inputAbout" name="about" class="form-control" rows="4">{{ $about->about ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputImageAbout">Upload Image for About</label>
                        <input type="file" id="inputImageAbout" name="imageabout" class="form-control-file" accept="image/*">
                        @if ($about && $about->image3)
                            <img src="{{ asset('uploads/aboutus/' . $about->image3) }}" alt="About Image" class="img-fluid mt-2" style="width: 10%; height: auto">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="inputJourney">Journey</label>
                        <textarea id="inputJourney" name="journey" class="form-control" rows="4">{{ $about->journey ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputImageJourney">Upload Image for Journey</label>
                        <input type="file" id="inputImageJourney" name="imagejourney" class="form-control-file" accept="image/*">
                        @if ($about && $about->image4)
                            <img src="{{ asset('uploads/aboutus/' . $about->image4) }}" alt="Journey Image" class="img-fluid mt-2" style="width: 10%; height: auto">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="inputVision">Vision</label>
                        <textarea id="inputVision" name="vision" class="form-control" rows="4">{{ $about->vision ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputImageVision">Upload Image for Vision</label>
                        <input type="file" id="inputImageVision" name="imagevision" class="form-control-file" accept="image/*">
                        @if ($about && $about->image5)
                            <img src="{{ asset('uploads/aboutus/' . $about->image5) }}" alt="Vision Image" class="img-fluid mt-2" style="width: 10%; height: auto">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="inputMission">Mission</label>
                        <textarea id="inputMission" name="mission" class="form-control" rows="4">{{ $about->mission ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputImageMission">Upload Image for Mission</label>
                        <input type="file" id="inputImageMission" name="imagemission" class="form-control-file" accept="image/*">
                        @if ($about && $about->image6)
                            <img src="{{ asset('uploads/aboutus/' . $about->image6) }}" alt="Mission Image" class="img-fluid mt-2" style="width: 10%; height: auto">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const imageInputs = [
            { id: 'inputAboutImage', previewId: 'imagePreview' },
            { id: 'inputImageDirector', previewId: 'imagePreview2' },
            { id: 'inputImageAbout', previewId: 'imagePreview3' },
            { id: 'inputImageJourney', previewId: 'imagePreview4' },
            { id: 'inputImageVision', previewId: 'imagePreview5' },
            { id: 'inputImageMission', previewId: 'imagePreview6' }
        ];

        imageInputs.forEach(({ id, previewId }) => {
            const inputElement = document.getElementById(id);
            const previewElement = document.getElementById(previewId);

            if (inputElement && previewElement) {
                inputElement.addEventListener('change', function () {
                    if (inputElement.files && inputElement.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            previewElement.innerHTML = `<img src="${e.target.result}" class="img-thumbnail" width="200">`;
                        };
                        reader.readAsDataURL(inputElement.files[0]);
                    } else {
                        previewElement.innerHTML = ''; // Clear preview if no file is selected
                    }
                });
            } else {
                console.error(`Element with id '${id}' or '${previewId}' not found.`);
            }
        });
    });
</script>

@endsection

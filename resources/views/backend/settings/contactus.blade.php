@extends('backend.layouts.main')
@section('title')
    {{ 'Contact Settings' }}
@endsection
@section('main-container')
    <form action="" method="POST" enctype="multipart/form-data">
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
                            <label for="contact_page_image">Contact Page Image</label>
                            <input type="file" class="form-control-file" id="contact_page_image"
                                name="contact_page_image">
                            @if ($contact && $contact->contact_page_image)
                                <div class="mt-2">
                                    <img src="{{ asset('uploads/contactus/' . $contact->contact_page_image) }}" class="img-thumbnail"
                                        width="200">
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="contact_information">Contact Information</label>
                            <textarea class="form-control" id="contact_information" name="contact_information" rows="3">{{ $contact ? $contact->contact_information : '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ $contact ? $contact->address : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="phone_no">Phone No</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no"
                                value="{{ $contact ? $contact->phone_no : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $contact ? $contact->email : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="timing">Timing</label>
                            <input type="text" class="form-control" id="timing" name="timing"
                                value="{{ $contact ? $contact->timing : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="days">Days</label>
                            <input type="text" class="form-control" id="days" name="days"
                                value="{{ $contact ? $contact->days : '' }}">
                        </div>

                        <div class="form-group">
                            <label for="map_link">Map Link</label>
                            <input type="text" class="form-control" id="map_link" name="map_link"
                                value="{{ $contact ? $contact->map_link : '' }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageInputs = [{
                id: 'contact_page_image',
                previewId: 'imagePreview'
            }, ];

            imageInputs.forEach(({
                id,
                previewId
            }) => {
                const inputElement = document.getElementById(id);
                const previewElement = document.getElementById(previewId);

                if (inputElement && previewElement) {
                    inputElement.addEventListener('change', function() {
                        if (inputElement.files && inputElement.files[0]) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                previewElement.innerHTML =
                                    `<img src="${e.target.result}" class="img-thumbnail" width="200">`;
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

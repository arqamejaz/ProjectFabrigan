@extends('backend.layouts.main')
@section('title')
    {{ 'General Settings' }}
@endsection
@section('main-container')
    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General Settings</h3>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">Accessories:</h3><br>
                        <div class="form-group">
                            <label for="accessoryh">Heading</label>
                            <input type="text" id="accessoryh" name="accessoryh" class="form-control" value="{{ $settings->accessoryh }}">
                        </div>
                        <div class="form-group">
                            <label for="accessorysh">Subheading</label>
                            <input type="text" id="accessorysh" name="accessorysh" class="form-control" value="{{ $settings->accessorysh }}">
                        </div>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">Categories:</h3><br>
                        <div class="form-group">
                            <label for="categoryh">Heading</label>
                            <input type="text" id="categoryh" name="categoryh" class="form-control" value="{{ $settings->categoryh }}">
                        </div>
                        <div class="form-group">
                            <label for="categorysh">Subheading</label>
                            <input type="text" id="categorysh" name="categorysh" class="form-control" value="{{ $settings->categorysh }}">
                        </div>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">Catalogue:</h3><br>
                        <div class="form-group">
                            <label for="catalogueh">Heading</label>
                            <input type="text" id="catalogueh" name="catalogueh" class="form-control" value="{{ $settings->catalogueh }}">
                        </div>
                        <div class="form-group">
                            <label for="cataloguesh">Subheading</label>
                            <input type="text" id="cataloguesh" name="cataloguesh" class="form-control" value="{{ $settings->cataloguesh }}">
                        </div>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">Media:</h3><br>
                        <div class="form-group">
                            <label for="mediah">Heading</label>
                            <input type="text" id="mediah" name="mediah" class="form-control" value="{{ $settings->mediah }}">
                        </div>
                        <div class="form-group">
                            <label for="mediash">Subheading</label>
                            <input type="text" id="mediash" name="mediash" class="form-control" value="{{ $settings->mediash }}">
                        </div>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">Event:</h3><br>
                        <div class="form-group">
                            <label for="eventh">Heading</label>
                            <input type="text" id="eventh" name="eventh" class="form-control" value="{{ $settings->eventh }}">
                        </div>
                        <div class="form-group">
                            <label for="eventsh">Subheading</label>
                            <input type="text" id="eventsh" name="eventsh" class="form-control" value="{{ $settings->eventsh }}">
                        </div>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">About:</h3><br>
                        <div class="form-group">
                            <label for="abouth">Heading</label>
                            <input type="text" id="abouth" name="abouth" class="form-control" value="{{ $settings->abouth }}">
                        </div>
                        <div class="form-group">
                            <label for="aboutsh">Subheading</label>
                            <input type="text" id="aboutsh" name="aboutsh" class="form-control" value="{{ $settings->aboutsh }}">
                        </div>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">Contact Us:</h3><br>
                        <div class="form-group">
                            <label for="contacth">Heading</label>
                            <input type="text" id="contacth" name="contacth" class="form-control" value="{{ $settings->contacth }}">
                        </div>
                        <div class="form-group">
                            <label for="contactsh">Subheading</label>
                            <input type="text" id="contactsh" name="contactsh" class="form-control" value="{{ $settings->contactsh }}">
                        </div>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">Header Banner:</h3><br>
                        <div class="form-group">
                            <label for="bannercontact">Contact #</label>
                            <input type="text" id="bannercontact" name="bannercontact" class="form-control" value="{{ $settings->bannercontact }}">
                        </div>
                        <div class="form-group">
                            <label for="bannermsg">Banner Message</label>
                            <input type="text" id="bannermsg" name="bannermsg" class="form-control" value="{{ $settings->bannermsg }}">
                        </div>
                        <div class="form-group">
                            <label for="banneremail">Email</label>
                            <input type="text" id="banneremail" name="banneremail" class="form-control" value="{{ $settings->banneremail }}">
                        </div>
                    </div>
                    <div class="card-body shadow">
                        <h3 class="card-title">Footer Links:</h3><br>
                        <div class="form-group">
                            <label for="footerfb">Facebook</label>
                            <input type="text" id="footerfb" name="footerfb" class="form-control" value="{{ $settings->footerfb }}">
                        </div>
                        <div class="form-group">
                            <label for="footerinsta">Instagram</label>
                            <input type="text" id="footerinsta" name="footerinsta" class="form-control" value="{{ $settings->footerinsta }}">
                        </div>
                        <div class="form-group">
                            <label for="footertwitter">Twitter</label>
                            <input type="text" id="footertwitter" name="footertwitter" class="form-control" value="{{ $settings->footertwitter }}">
                        </div>
                        <div class="form-group">
                            <label for="footeryoutube">YouTube</label>
                            <input type="text" id="footeryoutube" name="footeryoutube" class="form-control" value="{{ $settings->footeryoutube }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@extends('backend.layouts.main')
@section('title')
    {{ 'Add Event' }}
@endsection
@section('main-container')
    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Event</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputDate">Date *:</label>
                            <input type="datetime-local" id="inputDate" name="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputLocation">Location *:</label>
                            <input type="text" id="inputLocation" name="location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputdescription">Description *:</label>
                            <input type="text" id="inputdescription" name="description" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number *:</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-body">
                        <div id="imageUploadFields">
                            <div class="form-group">
                                <label for="inputImage">Upload Event Image *:</label>
                                <input type="file" id="inputImage" name="image" class="form-control-file"
                                    accept="image/*" required>
                                <div id="imagePreview" class="mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary float-right">Cancel</a>
                <input type="submit" value="Submit" class="btn btn-success float-right">
            </div>
        </div>
    </form>
@endsection

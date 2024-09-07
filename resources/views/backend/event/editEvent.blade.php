@extends('backend.layouts.main')
@section('title')
    {{ 'Edit Event' }}
@endsection
@section('main-container')
    <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Event</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputDate">Date *:</label>
                            <input type="datetime-local" id="inputDate" name="date" class="form-control"
                                value="{{ old('date', $event->date) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputLocation">Location *:</label>
                            <input type="text" id="inputLocation" name="location" class="form-control"
                                value="{{ old('location', $event->location) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputdescription">Description *:</label>
                            <input type="text" id="inputdescription" name="description" class="form-control"
                            value="{{ old('description', $event->description) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number *:</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control"
                                value="{{ old('order_no', $event->order_no) }}" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputImage">Upload Event Image *:</label>
                            <input type="file" id="inputImage" name="image" class="form-control-file"
                                accept="image/*">
                            <div id="imagePreview" class="mt-2">
                                @if ($event->image)
                                    <img src="{{ asset('uploads/events/' . $event->image) }}" alt="Image"
                                        style="width: 100px; height: auto; margin-top: 10px;">
                                @endif
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

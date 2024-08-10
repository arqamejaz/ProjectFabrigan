@extends('backend.layouts.main')
@section('title')
    {{ 'Add Catalogue' }}
@endsection
@section('main-container')
    <form action="{{ route('catalogue.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Catalogue</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputname">Catalogue Name</label>
                            <input type="text" id="inputname" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputOrderNo">Order Number</label>
                            <input type="number" id="inputOrderNo" name="order_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputFile">Upload Catalogue (PDF only)</label>
                            <input type="file" id="inputFile" name="file" class="form-control-file" accept=".pdf" required>
                            <div id="filePreview" class="mt-2"></div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{ route('admin.listcatalogues') }}" class="btn btn-secondary float-right">Cancel</a>
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
        // Preview the PDF file before uploading
        document.getElementById('inputFile').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type === 'application/pdf') {
                const filePreview = document.getElementById('filePreview');
                filePreview.innerHTML = `<p><strong>${file.name}</strong> (PDF selected)</p>`;
            } else {
                document.getElementById('filePreview').innerHTML = '<p>Please select a valid PDF file.</p>';
            }
        });
    </script>
@endsection

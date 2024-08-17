@extends('backend.layouts.main')
@section('title')
    {{ 'List why Choose Us' }}
@endsection
@section('main-container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Why Choose Us</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('admin.addwhychooseus') }}" class="btn btn-primary">Add Event</a>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="eventsTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Text</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($wcu as $wcu)
                                        <tr>
                                            <td>{{ $wcu->order_no }}</td>
                                            <td>{{ $wcu->image_text }}</td>
                                            <td>
                                                @if ($wcu->image)
                                                    <img src="{{ asset('uploads/whychooseus/' . $wcu->image) }}" alt="Event Image" style="width: 100px; height: auto;">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.editwhychooseus', $wcu->id) }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('whychooseus.delete', $wcu->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#eventsTable').DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection

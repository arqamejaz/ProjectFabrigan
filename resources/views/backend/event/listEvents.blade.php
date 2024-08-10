@extends('backend.layouts.main')
@section('title')
    {{ 'List Events' }}
@endsection
@section('main-container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Events</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('admin.addevent') }}" class="btn btn-primary">Add Event</a>
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
                                        <th>Date</th>
                                        <th>Location</th>
                                        <th>Order #</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                        <tr>
                                            <td>{{ $event->date }}</td>
                                            <td>{{ $event->location }}</td>
                                            <td>{{ $event->order_no }}</td>
                                            <td>
                                                @if ($event->image)
                                                    <img src="{{ asset('uploads/events/' . $event->image) }}" alt="Event Image" style="width: 100px; height: auto;">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.editevent', $event->id) }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('event.delete', $event->id) }}" method="POST" style="display:inline-block;">
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

@extends('backend.layouts.main')
@section('title')
    {{ 'List Sliders' }}
@endsection
@section('main-container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Sliders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('admin.addslider') }}" class="btn btn-primary">Add Slider</a>
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
                            <table id="slidersTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Slider Image</th>
                                        <th>Order #</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sliders as $slider)
                                        <tr>
                                            <td>
                                                @if ($slider->image)
                                                    <img src="{{ asset('uploads/sliders/' . $slider->image) }}" alt="slider Image" style="width: 100px; height: auto;">
                                                @endif
                                            </td>
                                            <td>{{ $slider->order_no }}</td>
                                            <td>
                                                <form action="{{ route('slider.delete', $slider->id) }}" method="POST" style="display:inline-block;">
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
            $('#slidersTable').DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection

@extends('backend.layouts.main')
@section('title')
    {{ 'List Cagegory' }}
@endsection
@section('main-container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Media</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('admin.addmedia') }}" class="btn btn-primary">Add media</a>
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
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Order #</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($media as $media)
                                        <tr>
                                            <td>{{ $media->name }}</td>
                                            <td>{{ $media->order_no }}</td>
                                            <td>
                                                @if ($media->image)
                                                    <img src="{{ asset('uploads/media/' . $media->image) }}" alt="Media Image" style="width: 100px; height: auto;">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.editmedia', $media->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('media.delete', $media->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
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

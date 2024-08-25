@extends('backend.layouts.main')
@section('title')
    {{ 'List Media' }}
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
                                        <th>Featured</th>
                                        <th>Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($media as $media)
                                    @php
                                        $parts = explode('/', $media->video);
                                        $videoId = end($parts);
                                    @endphp
                                        <tr>
                                            <td>{{ $media->name }}</td>
                                            <td>{{ $media->order_no }}</td>
                                            <td>{{ ($media->featured ? 'Yes' : 'No') }}</td>
                                            <td>
                                                @if ($media->video)
                                                    {{-- <video src="{{ asset('uploads/media/videos/' . $media->video) }}" alt="Media Image" style="width: 100px; height: auto;"></video> --}}
                                                    <iframe id="" src="https://player.vimeo.com/video/.{{ $videoId }}" style="width: 40%; height: auto;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                                    allowfullscreen></iframe>
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

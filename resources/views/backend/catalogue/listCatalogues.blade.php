@extends('backend.layouts.main')
@section('title')
    {{ 'List Catalogues' }}
@endsection
@section('main-container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Catalogues</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('admin.addcatalogue') }}" class="btn btn-primary">Add Catalogue</a>
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
                            <table id="cataloguesTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Catalogue Name</th>
                                        <th>Catalogue File</th>
                                        <th>Order #</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($catalogues as $catalogue)
                                        <tr>
                                            <td>{{ $catalogue->name }}</td>
                                            <td>
                                                @if ($catalogue->file_path)
                                                    <a href="{{ asset('pdfs/' . $catalogue->file_path) }}" target="_blank">
                                                        {{ pathinfo($catalogue->file_path, PATHINFO_BASENAME) }}
                                                    </a>
                                                @else
                                                    No File
                                                @endif
                                            </td>
                                            <td>{{ $catalogue->order_no }}</td>
                                            <td>
                                                <form action="{{ route('catalogue.delete', $catalogue->id) }}" method="POST" style="display:inline-block;">
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
            $('#cataloguesTable').DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection

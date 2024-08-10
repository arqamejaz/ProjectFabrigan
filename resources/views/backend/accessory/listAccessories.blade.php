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
            <h1>List Accessories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{ route('admin.addaccessory') }}" class="btn btn-primary">Add Accessory</a>
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
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($accessories as $accessory)
                    <tr>
                        <td>{{ $accessory->name }}</td>
                        <td>{{ $accessory->order_no }}</td>
                        <td>
                            <a href="{{ route('admin.editaccessory', $accessory->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('accessory.delete', $accessory->id) }}" method="POST" style="display:inline-block;">
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

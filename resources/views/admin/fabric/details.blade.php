@extends('admin.layout.layout')

@section('style')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ ucwords($fabric_name) }} Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('view-fabrics') }}">Fabrics</a></li>
            <li class="breadcrumb-item active">{{ ucwords($fabric_name) }} Details</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  @if (session('success'))
  <div class="card-body">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5 class="mb-0">{{ Session::get('success') }}</h5>
      <?php Session::forget('success');?>
    </div>
  </div>
  @endif
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="{{ route('view-add-image', str_replace(' ', '-', $fabric_name)) }}">
                  <button type="button" class="btn btn-block bg-gradient-primary">Add Color</button>
                </a>
              </h3>
            </div>
            <div class="card-header">
              <h5 class="card-title">
                <span class="font-weight-bold">Fabric Name : </span>
                {{ $fabric_name }}
              </h5>
              <br>
              <h5 class="card-title mt-2">
                <span class="font-weight-bold">Total Color : </span>
                {{ count($fabric) }}
              </h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Color</th>
                    <th>Color Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($fabric as $fabric_image)
                  <tr>
                      <td style="background-color: rgb(248, 252, 255);"><img src="{{ url('assets/user/images/'.$fabric_image['image']) }}" alt="{{ $fabric_image['image'] }}" style="height: 100px; width: 100px;" /></td>
                    <td>{{ ucwords(strstr($fabric_image['image'], '.', true)) }}</td>
                    <td>
                      <a href="{{ route('delete-image', [$fabric_image['image'], $fabric_image['id']]) }}">
                        <button type="button" class="btn bg-gradient-danger">Delete Color</button>
                      </a>
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
</div>
@endsection

@section('script')
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection
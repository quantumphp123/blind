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
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
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
          <!-- /.card-header -->
          <div class="card-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Fabrics</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td>{{ ucwords($product['name']) }}</td>
                  <td>
                    @foreach (explode(',', $product['fabrics']) as $fabric)
                    {{ ucwords($fabric) }}<br>
                    @endforeach
                  </td>
                  <td>
                    <a href="{{ route('add-fabric-in-product', str_replace(' ', '-', $product['name'])) }}">
                      <button type="button" class="btn bg-gradient-primary">Add Fabric</button>
                    </a>
                    <a href="{{ route('remove-fabric', str_replace(' ', '-', $product['name'])) }}">
                      <button type="button" class="btn bg-gradient-danger">Remove Fabric</button>
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
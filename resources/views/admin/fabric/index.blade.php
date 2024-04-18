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
          <h1>Fabrics</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Fabric</li>
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
                <a href="{{ route('add-fabric') }}">
                  <button type="button" class="btn btn-block bg-gradient-primary">Add Fabric</button>
                </a>
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Fabric/Type</th>
                    <th>Added On</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($fabrics as $fabric)
                  <tr>
                    <td>{{ ucwords($fabric['name']) }}</td>
                    <td>{{ $fabric['created_at'] }}</td>
                    <td>
                      <a href="{{ route('view-fabric-details', str_replace(' ', '-', $fabric['name'])) }}">
                        <button type="button" class="btn bg-gradient-primary">View Fabric</button>
                      </a>
                      <a href="{{ route('delete-fabric', str_replace(' ', '-', $fabric['name'])) }}">
                        <button type="button" class="btn btn-del-fab bg-gradient-danger">Delete Fabric</button>
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
<script>
  let btnDelFab = document.querySelectorAll('.btn-del-fab');
  Array.from(btnDelFab).forEach(btn => {
    btn.addEventListener('click', (e)=>{
      let con = confirm("Are You Sure?\nThis will Permanently Delete all the Fabric Content as Well")
      if (con == false) {
        e.preventDefault()
      }
    })
  });
  console.log(btnDelFab)
</script>
@endsection
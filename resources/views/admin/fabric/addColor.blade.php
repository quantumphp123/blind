@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Color</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Add Color {{ ucwords($fabric_name) }}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  @if ($errors->any())
  <div class="card-body pt-0">
      @foreach ($errors->all() as $error)
      <p class="mb-0 text-danger"><span>* </span>{{ $error }}</p>
      @endforeach
  </div>

  @endif
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Color to {{ ucwords($fabric_name) }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('post-add-image')}} " role="form" id="quickForm" method="post"
              enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="fabric_name" value="{{ $fabric_name }}">
              <div class="card-body pb-0">
                <div class="form-group">
                  <label for="exampleInputFile">Fabric Color Images</label>
                  <br>
                  <label class="font-italic text-secondary">Image Name will be Displayed as Color Name, So be Ensure that All Images have the Name of their Corresponding Color Before Upload</label>
                  <br>
                  <input type="file" name="files[]" class="form-input mt-1" id="exampleInputFile" placeholder="Choose Fabric Color Image"
                    multiple>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Color</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
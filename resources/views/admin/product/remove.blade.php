@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Fabric in {{ ucwords($product_name) }} </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('view-products') }}">Product</a></li>
            <li class="breadcrumb-item active">Remove Fabric from {{ ucwords($product_name) }} </li>
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
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Remove Fabric From {{ ucwords($product_name) }} </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('post-remove-fabric')}} " role="form" id="quickForm" method="post">
              @csrf
              <input type="hidden" name="product_name" value="{{ $product_name }}">
              <div class="card-body pb-0">
                @php
                    $i = 0
                @endphp
                @foreach ($fabrics as $fabric)
                <div class="form-group">
                  <input type="checkbox" id="{{ 'exampleFabric'.$i }}"  name="fabrics[]" value="{{ $fabric }}">
                  <label for="{{ 'exampleFabric'.$i }}" class="mx-1">{{ ucwords($fabric) }}</label>
                  @php
                      $i++
                  @endphp
                </div>
                  @endforeach
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer pt-0">
                <button type="submit" class="btn btn-danger">Remove</button>
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
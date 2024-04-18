@extends('admin.layout.layout')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Events</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Events</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mx-auto">

                        @if(session()->has('success'))
                        <div class="alert alert-success p-2">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header"><a href="{{ url('add-new-event') }}" class="btn btn-success float-right btn-sm"><i class="fas fa-plus fa-xs"></i> Add New</a></div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SR. No.</th>
                                            <th>Event</th>
                                            <th>Date of Creation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($event as $e)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $e->event }}</td>
                                                <td>{{ $e->created_at->format('D Y M') }}</td>
                                                <td>
                                                    {{-- <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a> --}}
                                                    <a href="{{ url('delete-parent-event/'.$e->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection

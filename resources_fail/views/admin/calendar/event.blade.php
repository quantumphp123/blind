@extends('admin.layout.layout')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Posted Events</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Posted Events</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ url('post-new-event') }}" class="btn btn-success float-right btn-sm"><i class="fas fa-plus fa-xs"></i> Post Event</a>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SR. No.</th>
                                            <th>Date</th>
                                            <th>Event</th>
                                            <th>Date of Creation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($storedEvents as $se)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $se->date }}</td>
                                                <td>{{ $se->event }}</td>
                                                <td>{{ $se->created_at->format('D Y M') }}</td>
                                                <td>
                                                    {{-- <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a> --}}
                                                    <a href="{{ url('delete-event/'.$se->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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

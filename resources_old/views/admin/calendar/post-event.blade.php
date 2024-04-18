@extends('admin.layout.layout')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add Event</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Event</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-6 mx-auto connectedSortable">

                        <div class="card bg-gradient-primary d-none">

                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div id="sparkline-1"></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div id="sparkline-2"></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div id="sparkline-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form>
                            <div class="card bg-gradient-success">
                                <div class="card-header border-0">

                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        Calendar
                                    </h3>
                                    <div class="card-tools">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-toggle="dropdown">
                                                <i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu float-right" role="menu">
                                                <a href="#" class="dropdown-item">Add new event</a>
                                                <a href="#" class="dropdown-item">Clear events</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">View calendar</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="calendar" style="width: 100%"></div>
                                </div>
                            </div>


                            <div class="mt-2">
                                {{-- <label for="">Event</label> --}}
                                <select id="event" class="form-control" required>
                                    <option selected disabled>Select event</option>
                                    @foreach ($events as $e)
                                        <option value="{{ $e->event }}">{{ $e->event }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-success mt-3 mb-5" id="submit">Submit</button>
                            </div>

                        </form>

                    </section>

                </div>
            </div>
        </section>
    </div>
@endsection


@section('script')
    {{-- <script>
        setInterval(function (){
            $('#fetchdata').load(window.location.href + ' #fetchdata');
        },5000);
    </script> --}}
    <script>
        $(document).ready(function() {
            var date;
            $("tbody").on('click', 'td', function(e) {
                date = $(this).closest('td').attr('data-day');
                // alert(date);
            });

            $('#submit').on('click', function(e) {
                e.preventDefault();
                var datevalue = date;
                var event = $('#event').val();
                if (date != "" && event != "") {
                    $.ajax({
                        url: "{{ route('event-post') }}",
                        type: "GET",
                        data: {
                            date: datevalue,
                            event: event
                        },
                        cache: false,
                        success: function(data) {
                            if (data.code == 200) {
                                location.replace("{{ route('events') }}");
                                // console.log("Event added successfully!");
                            } else {
                                console.log("Something Gone Wrong!");
                            }
                        }
                    });
                } else {
                    alert('Please fill the details properly!');
                }
            });

        });
    </script>




    <script src="{{ url('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('assets/adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('assets/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ url('assets/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection

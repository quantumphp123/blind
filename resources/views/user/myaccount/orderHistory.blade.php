@extends('user.myaccount.layout')

@section('main-content')

<div id="orhSection" class="col-sm-6">
    <h3 class="fs-24">Order History</h3>
    <p class="fs-16">This is a TEMPLATE. NOT FUNCTIONING<br></p>
    <section class="content">
        <div class="container-fluid">
            @if (false)
            <table id="myTable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Price</td>
                        <td>Order On</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            @endif
        </div>
    </section>
</div>
<script>
    document.querySelector('#orhSection').scrollIntoView()
</script>
@endsection

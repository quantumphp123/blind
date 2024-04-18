@extends('admin.layout.layout')
@section('content')
  <div class="content-wrapper">
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Professional</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Professionals</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	@if (session('success'))
	<div class="card-body">
	<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5>{{ Session::get('success') }}</h5>
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
                <h3 class="card-title"><a href="{{url('add-professional')}}"><button type="button" class="btn btn-block bg-gradient-primary">Add Professional</button></a></h3>
                <h3 class="card-title"><a href="{{url('ExportProfessional')}}"><button style="margin-left:10px;" type="button" class="btn btn-block bg-gradient-success">Export</button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Registered Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($professional as $key => $orderDetails)
                  <tr>
                    <td>{{$key + 1}}</td>
                    <td><img src="{{$orderDetails->image}}" style="height:50px;width:50px;"></td>
                    <td>{{$orderDetails->name}}</td>
                    <td>{{$orderDetails->email}}</td>
                    <td>{{$orderDetails->mobile}}</td>
					<td> 
						<div class="form-group">
							<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="status<?php echo $orderDetails->id;?>" <?php if($orderDetails->status=='1'){echo 'checked';} ?>>
							<label class="custom-control-label" for="status<?php echo $orderDetails->id;?>"></label>
							</div>
						</div>
					</td>
					<td>{{$orderDetails->created_at}}</td>
                    <input type="hidden" id="statusval<?php echo $orderDetails->id;?>" value="<?php echo $orderDetails->status; ?>">
                    <input type="hidden" id="proff_id<?php echo $orderDetails->id;?>" value="<?php echo $orderDetails->id; ?>">
                    <td>
						 
						<a href="{{url('view-professional/'.$orderDetails->id)}}"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>
						<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal-delete<?php echo $orderDetails->id; ?>"><i class="fa fa-trash"></i></button>
						<a href="{{url('generate-pdf')}}"><button type="button" class="btn btn-primary">Download</button></a>

					  </td>
                  </tr>
				  
					<script>
					$(document).ready(function(){
					$("#status<?php echo $orderDetails->id;?>").change(function(){
						
						var status = $('#statusval<?php echo $orderDetails->id;?>').val();
						var proff_id = $('#proff_id<?php echo $orderDetails->id;?>').val();
					if(status == '1'){
						
					$.ajax({
					url:'{{url("change-status")}}',
					method:'POST',
					data:{status:status,proff_id:proff_id,'_token':"{{csrf_token()}}"},
					success:function(data){
					//alert(data);
					//$('#child_id').html(data);
					}
					});
			
					}else{
						$.ajax({
					url:'{{url("change-status")}}',
					method:'POST',
					data:{status:status,proff_id:proff_id,'_token':"{{csrf_token()}}"},
					success:function(data){
					//alert(data);
					//$('#child_id').html(data);
					}
					});
					}

					});
					});
					</script>
     
				  
				  <div class="modal fade" id="modal-delete<?php echo $orderDetails->id; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Alert</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are You Sure You Want To Delete This Item ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="{{url('delete-professional/'.$orderDetails->id)}}"><button type="button" class="btn btn-primary">Yes</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
				  
				  @endforeach	
                  
                  </tbody>
                  <tfoot>
                   <tr>
                    <th>S.No</th>
					<th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
					<th>Status</th>
					<th>Registered Date</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
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
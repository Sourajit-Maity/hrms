@extends('backend.layouts.dashboard')

@section('content')


<div class="row">
	<div class="col-lg-12 col-md-12">
	   <h1 class="page-header"> DashBoard</h1>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-comments fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">View </div>
						<div>Total Messages !</div>
					</div>
				</div>
			</div>
			<a href="{{ url('messages') }}">
				<div class="panel-footer">
					<span class="pull-left">View Details</span> <span
						class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-tasks fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">Order</div>
						<div>New Orders!</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">View Details</span> <span
						class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-shopping-cart fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">Details</div>
						<div>Delivered Orders!</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">View Details</span> <span
						class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-users fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">View</div>
						<div>Total Subscribers !</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">View Details</span> <span
						class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- /.row -->



<div class="row">
 <div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="fa fa-area-chart"></i> Growth Chart Report
		</div>
		<div class="panel-body" id="pop_div"></div>
	</div>
</div>
</div>
<canvas id="myChart"> </canvas>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

 @endsection

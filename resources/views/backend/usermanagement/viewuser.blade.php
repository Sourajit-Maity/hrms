@extends('backend.layouts.dashboard')
@section('content')
<div class="row"><br style="margin-bottom:30px;"/></div>
<div class="panel panel-default">
        <div class="panel-body">
        <div class="row">
            <div class="form-group col-md-6">
                <h1>User List</h1>
                
            </div>
			
            <div  class="form-group col-md-6"; align="right" >
			<a href="{{ route('add-user') }}" class="btn btn-xs btn-info">
               <i class="fa fa-address-card-o" aria-hidden="true"></i></a>
            </div>
			
            
        </div>
           
			<div class="table-responsive">

            <table  class="table table-bordered  table-striped {{ count($users) > 0 ? 'datatable' : '' }} pointer">
					<thead>
					<tr>
                       <th>User Name</th>
                        <th>User Role</th>
                        <th>Employee Name</th>
                        <th>Status</th>
                        <th>Actions</th>

					</tr>
					</thead>

					<tbody>
					@if (count($users) > 0)
						@foreach ($users as $key => $value)
							<tr data-entry-id="{{ $value->id }}" data-order="{{$value->id}}">

							
								<td>{{ $value->user_id }}</td>
                                <td>{{ $value->display_name }}</td>
                                <td>{{ $value->u_name }}</td>
                                <td>{{ $value->id }}</td>
                                <td> <a href="{{ route('edit-user',[$value->id]) }}" class="btn btn-xs btn-info">
                                       <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                             <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal{{$value->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>

                                <div class="container">
                                    <div class="modal fade" id="myModal{{$value->id}}" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" style="text-indent: 0;">&times;</button>
                                                    <h4 class="modal-title">User </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Sure about delete this</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{route('deleteuser',['id'=>$value->id])}}" class="btn btn-xs btn-info"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
								@endforeach

							</tr>
							@else
								<tr>
									<td colspan="7">No entries in table</td>
								</tr>
							@endif



					</tbody>
				</table>
			</div>
		</div>
	</div>
    @include('backend.datatable')


@stop


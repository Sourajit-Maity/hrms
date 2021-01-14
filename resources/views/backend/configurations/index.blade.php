@extends('backend.layouts.dashboard')
@section('content')
    <div class="row">
       
        <div class="form-group col-md-6">
                <h2>Check all Corporate Action</h2>
            </div>
            <div class="form-group col-md-6">
                <a class="btn btn-success" href="{{ route('configurations.create') }}"> Create new Configurations</a>
            </div>
        </div>
 
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-striped {{ count($configurations) > 0 ? 'datatable' : '' }} pointer">
        <tr>
            <th>Sl. No.</th>
            <!-- <th>Title</th> -->
            <th>Corporate Action</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($configurations as $configuration)
        <tr>
            <td>{{ ++$i }}</td>
            <!-- <td>{{ $configuration->title }}</td> -->
            <td>{{ $configuration->description }}</td>
            <td>
                <form action="{{ route('configurations.destroy',$configuration->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('configurations.show',$configuration->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('configurations.edit',$configuration->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $configurations->links() !!}

    @include('backend.datatable')
      
@endsection
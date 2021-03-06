@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>{!! $title !!}</h4></div>   
                <div class="panel-body">
                    <br>
                    <br>
                    <table class="table table-hover table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Guest Name</th>
                            <th>Room No</th>
                            <th>Room Type</th>
                            <th>Check In Date</th>
                            <th>Check Out Date</th>
                            <th colspan="3">Actions</th>
                        </tr>
                 </thead>
                 <tbody>
                 <?php $index = 1 ?>    
                 @foreach ($guestroomallotment as $allotment)
                     <tr>
                         <td>{{ $index ++ }}</td>
                         <td>{{ $allotment->name }}</td>
                         <td>{{ $allotment->room_no }}</td>
                         <td>{{ $allotment->room_type }}</td>
                         <td>{{ $allotment->check_in_date }}</td>
                         <td>{{ $allotment->check_out_date }}</td>
<!--                         <td><a href="{{url('guestroomallotment',$allotment->id)}}" class="btn btn-primary"><span aria-hidden="true" class="glyphicon glyphicon-eye-open"></span></a></td>-->
                         <td><a href="{{route('guestroomallotment.show',$allotment->id)}}" class="btn btn-success "><span aria-hidden="true" class="glyphicon glyphicon-print"></span></a></td>
                         <td><a href="{{route('guestroomallotment.edit',$allotment->id)}}" class="btn btn-warning"><span aria-hidden="true" class="glyphicon glyphicon-pencil"></span></a></td>
                         <td>
                         {!! Form::open(['method' => 'DELETE', 'route'=>['guestroomallotment.destroy', $allotment->id]]) !!}                         
                         <button class="btn btn-danger">
                             <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
                         </button>
                         {!! Form::close() !!}
                         </td>
                     </tr>
                 @endforeach

                 </tbody>
                    </table>
                    {!! $guestroomallotment->links() !!}
                </div>
            </div>
        </div>     
    </div> 
</div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center mb-3">
                            <div class="col-sm-4">
                                <a href="{{route('cars.create')}}" class="btn btn-info btn-block">Add Car</a>
                            </div>
                        </div>

                        <table class="table table-bordered table-dark">
                            <thead>
                            <tr>
                                <th>Make</th>
                                <th>Plate</th>
                                <th>Date Added</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{$car->make}}</td>
                                        <td>{{$car->plate}}</td>
                                        <td>{{$car->created_at}}</td>

                                        <td>
                                            @can('Update Car')
                                              <a href="{{route('cars.edit', [$car->id])}}" class="btn btn-info">Update</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('Delete Car')
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['cars.destroy', $car->id] ]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endcan

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
@endsection
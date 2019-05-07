@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Car</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="col-sm-8">
                                <form action="{{route('cars.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Make</label>
                                        <input type="text" class="form-control" name="make">
                                    </div>

                                    <div class="form-group">
                                        <label>Plate</label>
                                        <input type="text" class="form-control" name="plate">
                                    </div>

                                    <button class="btn btn-block btn-info">Create Car</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
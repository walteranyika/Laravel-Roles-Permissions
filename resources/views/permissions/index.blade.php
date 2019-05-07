@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Permissions</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="col-sm-8">
                                <form action="{{route('permissions.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>

                                    @if(!$roles->isEmpty())
                                    <h4>Add Permission to roles</h4>
                                       @foreach($roles as $role)
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}">{{$role->name}}
                                                </label>
                                            </div>
                                       @endforeach
                                    @endif

                                    <button class="btn btn-block btn-info">Create Permissions</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
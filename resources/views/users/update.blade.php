@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add User</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="col-sm-8">
{{--                                <form action="{{route('users.update')}}" method="post">--}}
                                    {!! Form::open(['method' => 'PATCH', 'route' => ['users.update', $user->id] ]) !!}
{{--                                    @csrf--}}
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                    </div>


                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"  value="{{$user->email}}">
                                    </div>


                                    @foreach ($roles as $role)
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="roles[]" class="form-check-input" value="{{$role->id}}">{{ucfirst($role->name)}}
                                            </label>
                                        </div>
                                    @endforeach

                                    <br>
                                    <button class="btn btn-block btn-info">Update User</button>
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
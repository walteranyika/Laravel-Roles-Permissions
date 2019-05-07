@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add User</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <form action="{{route('users.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>


                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>

                                    @foreach ($roles as $role)
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="roles[]" class="form-check-input" value="{{$role->id}}">{{ucfirst($role->name)}}
                                            </label>
                                        </div>
                                    @endforeach

                                    <br>

                                    <button class="btn btn-block btn-info">Create User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
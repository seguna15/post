@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content center">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below for errors. <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Edit user
                <span class="float-right">
                    <a href="{{route('users.index')}}" class="btn btn-primary">Users</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($user,['route' => ['users.update', $user->id], 'method' => 'PATCH']) !!}
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email', 'class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Password:</strong>
                    {!! Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password', 'class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control', 'multiple')) !!}
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
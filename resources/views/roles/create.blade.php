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
            <div class="card-header">Create role
                <span class="float-right">
                    <a href="{{route('roles.index')}}" class="btn btn-primary">Roles</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => 'roles.store', 'method' => 'POST')) !!}
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Permission:</strong>
                    <br>
                    @foreach($permission as $value)
                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}{{ $value->name }}</label>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
   
        <div class="card">
            <div class="card-header">User
                @can('user-create')
                    <span class="float-right">
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ $user->name }}
                </div>
                <div class="lead">
                    <strong>Email:</strong>
                    {{ $user->email }}
                </div>
                <div class="lead">
                    <strong>Password:</strong>
                    ********
                </div>
                <div class="lead">
                    <strong>Role:</strong>
                    @if(!empty($user->getRoleNames()))

                        @foreach($user->getRoleNames() as $v)

                            <label class="badge bg-success">{{ $v }}</label>

                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
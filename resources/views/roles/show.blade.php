@extends(.layouts.app)
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card-header">User
            @can('role-create')
                <span class="float-right">
                    <a href="{{ route('roles.index') }}" class="btn-primary">Back</a>
                </span>
            @endcan
        </div>
        <div class="card-body">
            <div class="lead">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
            
            <div class="lead">
                <strong>Permissions:</strong>
                @if(!empty($rolePermissions))

                    @foreach($rolePermissions as $permission)

                        <label class="badge bg-success">{{ $permission->name }}</label>

                    @endforeach

                @endif
            </div>
             

        </div>
    </div>
</div>
@endsection
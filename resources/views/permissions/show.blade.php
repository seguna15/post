@extends(.layouts.app)
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
    
        <div class="card">
            <div class="card-header">Permission
                @can('permission-create')
                    <span class="float-right">
                        <a href="{{ route('permissions.index') }}" class="btn-primary">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ $permission->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
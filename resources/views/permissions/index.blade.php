@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content center">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Permissions
                @can('permission-create')
                    <span class="float-right">
                        <a href="{{ route('permissions.create') }}" class="btn btn-primary">New Permissions</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>{{ $permission->name }}</td>
                              
                                <td>
                                    <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-success">Show</a>
                                    @can('permission-edit')
                                        <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary">Edit</a>
                                    @endcan
                                    @can('permission-delete')
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id], 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{ $data->appends($_GET)->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
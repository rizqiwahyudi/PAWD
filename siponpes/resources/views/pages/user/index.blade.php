@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('User List') }}
                    @can('user.create')
                    <a href="{{ route('users.create') }}" class="btn btn-primary float-right">Create</a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->getRoleNames()->first() }}</td>
                                        <td>
                                            @can('user.edit')
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                            @endcan
                                            @can('user.delete')
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

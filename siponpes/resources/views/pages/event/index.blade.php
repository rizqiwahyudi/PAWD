@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Event List') }}
                    @can('event.create')
                    <a href="{{ route('events.create') }}" class="btn btn-primary float-right">Create</a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $event->name }}</td>
                                        <td>{{ $event->description }}</td>
                                        <td>{{ $event->status }}</td>
                                        <td>
                                            @can('event.edit')
                                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit</a>
                                            @endcan
                                            @can('event.delete')
                                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
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

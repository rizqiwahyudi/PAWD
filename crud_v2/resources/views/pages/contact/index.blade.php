@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary">Create</a>
                    <table border="1" cellspacing="2" cellpadding="2">
                        <thead>
                            <th>No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Mobile</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Web</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->first }}</td>
                                    <td>{{ $contact->last }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->mobile }}</td>
                                    <td>{{ $contact->fax }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->web }}</td>
                                    <td>
                                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('contacts.destroy', $contact->id) }}" type="button" class="btn btn-dange" onclick="event.preventDefault();
                                            document.getElementById('delete').submit();">Delete</a>

                                        <form id="delete" action="{{ route('contacts.destroy', $contact->id) }}" class="d-none" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
@endsection

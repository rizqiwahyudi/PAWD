@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" placeholder="First Name" name="first" value="{{ $contact->first}}">
                        <input type="text" placeholder="Last Name" name="last" value="{{ $contact->last}}">
                        <input type="text" placeholder="phone" name="phone" value="{{ $contact->phone}}">
                        <input type="text" placeholder="mobile" name="mobile" value="{{ $contact->mobile}}">
                        <input type="text" placeholder="fax" name="fax" value="{{ $contact->fax}}">
                        <input type="text" placeholder="email" name="email" value="{{ $contact->email}}">
                        <input type="text" placeholder="web" name="web" value="{{ $contact->web}}">
                        <br><br>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

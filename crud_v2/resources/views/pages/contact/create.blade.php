@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('contacts.store') }}" method="post">
                        @csrf
                        <input type="text" placeholder="First Name" name="first">
                        <input type="text" placeholder="Last Name" name="last">
                        <input type="text" placeholder="phone" name="phone">
                        <input type="text" placeholder="mobile" name="mobile">
                        <input type="text" placeholder="fax" name="fax">
                        <input type="text" placeholder="email" name="email">
                        <input type="text" placeholder="web" name="web">
                        <br><br>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Event Create') }}
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <form action="{{ route('events.store') }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="name" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Description" name="description" class="form-control @error('description') is-invalid @enderror">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="">-- Select Status --</option>
                                    <option value="soon">Soon</option>
                                    <option value="live">Live</option>
                                    <option value="finish">Finish</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

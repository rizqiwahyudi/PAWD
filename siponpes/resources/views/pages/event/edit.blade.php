@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Event Edit') }}
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <form action="{{ route('events.update', $event->id) }}" method="POST" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" value="{{ $event->name }}" placeholder="Name" name="name" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $event->description }}" placeholder="Description" name="description" class="form-control @error('description') is-invalid @enderror">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="">-- Select Status --</option>
                                    <option value="soon" {{ $event->status == 'soon' ? 'selected' : '' }}>Soon</option>
                                    <option value="live" {{ $event->status == 'live' ? 'selected' : '' }}>Live</option>
                                    <option value="finish" {{ $event->status == 'finish' ? 'selected' : '' }}>Finish</option>
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

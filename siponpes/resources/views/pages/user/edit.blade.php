@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('User List') }}
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <form action="{{ route('users.update', $user->id) }}" method="POST" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" value="{{ $user->name }}" placeholder="Name" name="name" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" value="{{ $user->email }}" placeholder="Email" name="email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="role" class="form-control @error('role') is-invalid @enderror">
                                    <option value="">-- Select Role --</option>
                                    @foreach ($roles as $role)
                                        @php
                                            if ($role->id == $userRole->id) {
                                                $select = "selected";
                                            }else{
                                                $select = "";
                                            }
                                        @endphp
                                        <option {{ $select }} value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>

                                @error('role')
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

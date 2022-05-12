@extends('admin.layouts.new')

@section('title')

    Change Password
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Change password </h3>
        </div>
        <div class="card-body">
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account-change-password">

                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session()->get('message') }}</div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">{{ session()->get('error') }} </div>
                        @endif
                        <form action="{{ route('admin.password.store') }}" method="POST">
                            @csrf
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label" style="color:black; font-size:15px">Current
                                        password</label>
                                    <input type="password" class="form-control" name="current_password" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" style="color:black; font-size:15px">New
                                        password</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" style="color:black; font-size:15px">Repeat new
                                        password</label>
                                    <input type="password" class="form-control" name="confirm_password" required>
                                </div>
                                <div class="text-right mt-3">
                                    <button type="submit" class="btn btn-primary">Change
                                        Password</button>&nbsp;
                                    <a href="{{ route('home') }}"><button type="button"
                                            class="btn btn-default">Cancel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

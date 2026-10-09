@extends('members.layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Change Password</h3>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="current-password">Current Password</label>
                            <input id="current-password" name="current_password" type="password" class="form-control" placeholder="Enter current password">
                        </div>

                        <div class="form-group">
                            <label for="new-password">New Password</label>
                            <input id="new-password" name="new_password" type="password" class="form-control" placeholder="Enter new password">
                        </div>

                        <div class="form-group mb-4">
                            <label for="confirm-password">Confirm New Password</label>
                            <input id="confirm-password" name="confirm_password" type="password" class="form-control" placeholder="Confirm new password">
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
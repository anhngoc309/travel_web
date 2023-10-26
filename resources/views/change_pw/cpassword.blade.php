@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner1')
<!--- contact ---->
<!--- privacy ----><div class="privacy">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Change Password</h3>
        <form method="POST" action="{{ route('change-password') }}">
            @csrf

            <div class="form-group" style="width: 350px;">
                <label for="current_password">Current Password</label>
                <input type="password" name="current_password" class="form-control" id="current_password" placeholder="Current Password" required>
            </div>

            <div class="form-group" style="width: 350px;">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password" required>
            </div>

            <div class="form-group" style="width: 350px;">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
            </div>

            <button type="submit" name="submit5" class="btn btn-primary">Change</button>
        </form>
    </div>
</div>

<!--- /contact ---->
@endsection

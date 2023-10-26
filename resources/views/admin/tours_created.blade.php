@extends('layouts.admin_layout.app')

@section('content')
<div class="container">
    <h3>Create Package</h3>

    <form method="POST" action="/create-package" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="packagename">Package Name</label>
            <input type="text" class="form-control" id="packagename" name="packagename" required>
        </div>
        <div class="form-group">
            <label for="packagetype">Package Type</label>
            <input type="text" class="form-control" id="packagetype" name="packagetype" required>
        </div>
        <div class="form-group">
            <label for="packagelocation">Package Location</label>
            <input type="number" class="form-control" id="packagelocation" name="packagelocation" required>
        </div>
        <div class="form-group">
            <label for="packageprice">Package Price</label>
            <input type="text" class="form-control" id="packageprice" name="packageprice" required>
        </div>
        <div class="form-group">
            <label for="packagedetails">Package Details</label>
            <input type="text" class="form-control" id="packagedetails" name="packagedetails" required>
        </div>
        <div class="form-group">
            <label for="date_start">Date Start</label>
            <input type="date" class="form-control" id="date_start" name="date_start" required>
        </div>
        <div class="form-group">
            <label for="date_end">Date End</label>
            <input type="date" class="form-control" id="date_end" name="date_end" required>
        </div>
        <div class="form-group">
            <label for="total_member">Menber</label>
            <input type="number" class="form-control" id="total_member" name="total_member" required>
        </div>
        <!-- Add other form fields here -->
        <div class="form-group">
            <label for="packageimage">Package Image</label>
            <input type="file" class="form-control-file" id="packageimage" name="packageimage" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection

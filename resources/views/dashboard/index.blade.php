@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Welcome to Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Users</div>
                <div class="card-footer">View Details</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Reports</div>
                <div class="card-footer">View Details</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Settings</div>
                <div class="card-footer">View Details</div>
            </div>
        </div>
    </div>
</div>
@endsection

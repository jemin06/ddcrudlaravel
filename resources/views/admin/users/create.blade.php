@extends('layouts.app')

@section('title', 'Add New product')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add New User</h1>
        <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                     placeholder="Enter name">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                     placeholder="Enter email">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                     placeholder="Enter password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
                    <option value="0" {{ 'role' == '0' ? 'selected' : '' }}>User</option>
                    <option value="1" {{ 'role' == '1' ? 'selected' : '' }}>Admin</option>
                </select>
                @error('role')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                     placeholder="Enter phone number">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="leave_type" class="form-label">Leave Type</label>
                <select class="form-control @error('leave_type') is-invalid @enderror" id="leave_type" name="leave_type">
                    <option value="pending" {{ old('leave_type') == 'pending' ? 'selected' : '' }}>pending</option>
                    <option value="approve" {{ old('leave_type') == 'approve' ? 'selected' : '' }}>approve</option>
                </select>
                @error('leave_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save User</button>
            <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection


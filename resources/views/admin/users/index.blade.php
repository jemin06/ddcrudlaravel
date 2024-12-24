@extends('layouts.app')

<style>
    .btn-group {
        display: inline-block;
    }
    .btn-group .btn {
        display: inline-block;
        margin-right: 5px;
    }
</style>

@section('content')
<div class="container">
    @section('title', 'User')

    <!-- Success message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="successMessage">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Error message -->
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorMessage">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="mb-4">User List</h1>
    <a href="{{ route('admin.user.create') }}" class="btn btn-primary mb-3">Add New user</a>
    <table id="categoryTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>password</th>
                <th>role</th>
                <th>phone</th>
                <th>gender</th>
                <th>leave_type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->leave_type }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Actions">
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
<script>
    $(document).ready(function () {
        $('#categoryTable').DataTable();
        setTimeout(function () {
            const successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.classList.add('fade');
                successMessage.style.opacity = 0;
            }
        }, 3000);
        setTimeout(function () {
            const errorMessage = document.getElementById('errorMessage');
            if (errorMessage) {
                errorMessage.classList.add('fade');
                errorMessage.style.opacity = 0;
            }
        }, 3000);
    });
</script>
@endpush
@endsection

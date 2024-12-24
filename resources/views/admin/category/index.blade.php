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
    @section('title', 'Categories')

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

    <h1 class="mb-4">Category List</h1>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">Add New Category</a>
    <table id="categoryTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>price</th>
                <th>description</th>
                <th>tag</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->price }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->tag }}</td>
                <td>
                    @if ($category->image)
                        <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" style="width: 100px; height: 100px;">
                    @else
                        <span>No Image</span>
                    @endif
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Actions">
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;" id="deleteForm{{ $category->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $category->id }})">Delete</button>
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
<script>
    function confirmDelete(categoryId) {
        const deleteCategory = confirm('Are you sure you want to delete this category?');
        if (deleteCategory) {
            const deleteProducts = confirm('Do you also want to delete all the products associated with this category?');
            const form = document.getElementById('deleteForm' + categoryId);
            if (deleteProducts) {
                form.action = form.action + '?delete_products=true';
            }
            form.submit();
        }
    }
</script>
@endpush
@endsection

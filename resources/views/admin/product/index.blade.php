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
    @section('title', 'Products')

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

    <h1 class="mb-4">Product List</h1>
    <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-3">Add New Product</a>
    <table id="categoryTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Category Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Status</th>
                <th>Tag</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->status == 1 ?  'Active' : 'Inactive' }}</td>
                <td>{{ $product->tag }}</td>
                <td>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="product Image" style="width: 100px; height: 100px;">
                    @else
                        <span>No Image</span>
                    @endif
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Actions">
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

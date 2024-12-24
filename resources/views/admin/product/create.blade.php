@extends('layouts.app')

@section('title', 'Add New product')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add New product</h1>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                     placeholder="Enter product name">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                    id="price" name="price"  placeholder="Enter product price">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Product Status</label>
                <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                    <option value="1" {{('status') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ ('status') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    placeholder="Enter product description"></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tag" class="form-label">Product Tag</label>
                <input type="text" class="form-control @error('tag') is-invalid @enderror" id="tag" name="tag"
                     placeholder="Enter product tag">
                @error('tag')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Product</button>
            <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Back</a>
        </form>

    </div>
@endsection

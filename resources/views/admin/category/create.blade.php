@extends('layouts.app')

@section('title', 'Add New Category')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Category</h1>
    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Enter category name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Category Price</label>
            <input
                type="number"
                step="0.01"
                class="form-control @error('price') is-invalid @enderror"
                id="price"
                name="price"
                value="{{ old('price') }}"
                placeholder="Enter category price">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Category Description</label>
            <textarea
                class="form-control @error('description') is-invalid @enderror"
                id="description"
                name="description"
                placeholder="Enter category description">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Category Tag</label>
            <input
                type="text"
                class="form-control @error('tag') is-invalid @enderror"
                id="tag"
                name="tag"
                value="{{ old('tag') }}"
                placeholder="Enter category tag">
            @error('tag')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Category Image</label>
            <input
                type="file"
                class="form-control @error('image') is-invalid @enderror"
                id="image"
                name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

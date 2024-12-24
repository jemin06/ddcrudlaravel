@extends('layouts.app')

@section('title', 'Add New Category')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Category</h1>
    <form action="{{ route('admin.categories.update' , $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ $category->name }}"
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
                value="{{ $category->price }}"
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
                placeholder="Enter category description">{{ $category->description }}</textarea>
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
                value="{{ $category->tag }}"
                placeholder="Enter category tag">
            @error('tag')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Category Image</label>
            @if ($category->image)
                <div>
                    <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" style="width: 100px; height: 100px;">
                </div>
            @endif
            <input
                type="file"
                class="form-control @error('image') is-invalid @enderror"
                id="image"
                name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

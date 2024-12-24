<div class="sidebar">
    <h5 class="text-center py-3">Menu</h5>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    @if (Auth::check() && Auth::user()->role == 1)
    <a href="{{ route('admin.categories.index') }}">Category</a>
    <a href="{{ route('admin.product.index') }}">Product</a>
    <a href="{{ route('admin.user.index') }}">User</a>
    @endif
    <a href="#">Settings</a>
    <a href="#">Reports</a>
    <a href="#">Help</a>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if (Auth::check())
                    <!-- Display profile link for logged-in users -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <!-- Display logout button for logged-in users -->
                    <li class="nav-item">
                        <form action="{{ route('user.logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="fa fa-sign-out"></i> Logout
                            </button>
                        </form>
                    </li>
                @else
                    <!-- Display login and register links if not logged in -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.register') }}">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

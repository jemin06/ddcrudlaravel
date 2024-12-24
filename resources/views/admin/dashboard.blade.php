<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard UI #2</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <aside>
        <header>
            <div>
                <img class="profile-picture" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_10.png"
                    alt="Profile Picture" />
                <p>Jane Doe</p>
            </div>
        </header>
        <nav class="side-navigation">
            <ul>
                <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="{{ URL::To('/admin/categories') }}"><i class="fa fa-ship"></i> Category</a></li>
                <li><a href="#"><i class="fa fa-users"></i>Users</a></li>
                <li><a href="#"><i class="fa fa-comments"></i>Comments</a></li>
                <li><a href="#"><i class="fa fa-area-chart"></i>Stats</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <header class="main-head">
            <div class="icons">
                <i class="fa fa-user-md"></i>
                <i class="fa fa-comments-o"></i>
                <i class="fa fa-bell-o"><span class="number-alert">3</span></i>
            </div>
            <div class="search logout">
                <form action="{{ route('user.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">
                        <i class="fa fa-sign-out"></i> Logout
                    </button>
                </form>
            </div>
        </header>
        <div class="wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </main>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('script.js') }}"></script>
</body>

</html>

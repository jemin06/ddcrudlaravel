<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .content-wrapper {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        /* Sidebar style */
        .sidebar {
            position: fixed; /* Fix the sidebar */
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: white;
            height: 100vh;
            overflow-y: auto;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        /* Content area style */
        .content {
            margin-left: 250px; /* Offset content for sidebar */
            flex: 1;
            padding: 20px;
            overflow-y: auto; /* Make content scrollable */
            /* height: 100vh; */
        }

        /* Fixed header style */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: #343a40;
            color: white;
            padding: 10px 15px;
        }

        /* Footer style */
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #343a40;
            color: white;
            padding: 10px 15px;
        }

        /* Adjust content spacing for header and footer */
        .content-wrapper {
            margin-top: 60px; /* Add margin for fixed header */
            margin-bottom: 60px; /* Add margin for fixed footer */
        }

        .btn-group {
            display: inline-block;
        }

        .btn-group .btn {
            display: inline-block;
            margin-right: 5px;
        }
    </style>

    @stack('styles')
</head>
<body>
    @include('partials.header')

    <div class="content-wrapper">
        @include('partials.sidebar')

        <div class="content">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')

    <!-- jQuery and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    @stack('scripts')
</body>
</html>

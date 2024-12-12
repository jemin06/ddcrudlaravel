<html lang="en">
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
    <meta charset="UTF-8">


    <link rel="apple-touch-icon" type="image/png"
        href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg"
        color="#111">






    <title>Bootstrap Responsive table</title>

    <link rel="canonical" href="https://codepen.io/md-asaduzzaman-muhid/pen/wvvjebE">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">


    <script>
        window.console = window.console || function(t) {};
    </script>




</head>

<body>
    <h1 class="text-center pt-4">Full Bootstrap Responsive table By <a
            href="https://md-asaduzzaman-muhid.github.io/portfolio/" target="_blank" class="hover-1">Asaduzzaman</a>
    </h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="container table-responsive py-5">
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Primary</a>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name
                        <a href="{{ route('categories.index', ['sort_by' => 'name', 'sort_order' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}" class="text-decoration-none">
                            {{ $sortOrder === 'asc' ? '↑' : '↓' }}
                        </a>
                    </th>
                    <th scope="col">Price
                        <a href="{{ route('categories.index', ['sort_by' => 'price', 'sort_order' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}" class="text-decoration-none">
                            {{ $sortOrder === 'asc' ? '↑' : '↓' }}
                        </a>
                    </th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $categor )
                    <tr>
                        <td>{{ $categor->name }}</td>
                        <td>{{ $categor->price }}</td>
                        <td><a href="{{ route('categories.edit' , $categor->id) }}" class="btn btn-secondary">Edit</a></td>
                        <td>
                            <form action="{{ route('categories.destroy', $categor->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>
</body>

</html>

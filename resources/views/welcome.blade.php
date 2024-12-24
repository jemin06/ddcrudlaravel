<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Responsive Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        :root {
            --accent-color: #f5a841;
        }

        section [class^="container"] {
            padding: 4rem 2rem;
        }

        @media screen and (min-width: 1024px) {
            section [class^="container"] {
                padding: 4rem;
            }

            nav [class^="container"] {
                padding: 0 4rem;
            }
        }

        .card-img-top {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin: 5px auto;
        }

        section:not(:first-of-type) {
            text-align: center;
        }

        section:nth-child(2n) {
            background-color: #ecf2ff;
        }

        .container a {
            color: #000000;
            text-decoration: none;
        }

        .container a:hover {
            color: var(--accent-color);
        }

        section .card,
        .btn-outline-dark {
            border: 2px solid #000000;
            box-shadow: 4px 4px #000000;
            transition: all 0.4s;
        }

        .btn-outline-dark:hover {
            box-shadow: 4px 4px var(--accent-color);
        }

        /* NAVBAR */

        .navbar {
            background-color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #000000;
            font-size: 1.1rem;
            transition: all 0.5s;
        }

        .navbar-nav .nav-link:hover {
            color: var(--accent-color);
        }

        @media screen and (min-width: 1024px) {
            .navbar-nav .nav-item {
                padding: 0 1rem;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }
        }

        /* HERO */

        section.hero {
            padding-top: 72px;
        }

        @media screen and (max-width: 576px) {
            section.hero {
                text-align: center;
            }

            section.hero img {
                width: 80%;
                margin: 0.5rem 0;
            }
        }

        /* category */

        section.category i {
            font-size: 2rem;
            margin: 1rem auto 0;
            border: 2px solid #000000;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--accent-color);
        }

        section .card {
            max-width: 22rem;
            margin-inline: auto;
        }

        /* ABOUT */
        @media screen and (min-width: 1024px) {

            section.about .container,
            section.testimonials .container {
                width: 60%;
            }
        }

        /* PROJECTS */
        section.projects .card {
            max-width: 17rem;
            text-align: left;
        }

        section.projects .card img {
            max-width: 70%;
            margin: 1rem auto;
        }

        /* TESTIMONIALS */

        section.testimonials .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        section.testimonials .carousel-item p {
            max-width: 80%;
            border-left: 5px solid var(--accent-color);
            padding-left: 1rem;
            text-align: left;
        }

        section.testimonials .carousel-item h5 {
            text-align: left;
        }

        section.testimonials .carousel-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        section.testimonials .carousel.carousel-fade .carousel-item {
            transition: opacity 0.5s;
        }

        /* CONTACT */
        section.contact .social-media a {
            padding: 0 0.5rem;
            font-size: 1.3rem;
        }
    </style>>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
        <div class="container-lg">
            <a class="navbar-brand fw-bold" href="#">Jane Doe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item" href="#">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                @if (Auth::check())
                    <a class="btn btn-outline-dark d-none d-lg-block" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        style="margin-left: 10px;">
                        Log Out
                    </a>
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a class="btn btn-outline-dark d-none d-lg-block" href="{{ route('user.login') }}">Sign IN</a>
                    <a class="btn btn-outline-dark d-none d-lg-block" href="{{ route('user.register') }}"
                        style="margin-left: 10px;">Sign UP</a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    @if(Auth::check())
                    <p>Welcome, {{ Auth::user()->name }}!</p>
                    <p>Your email: {{ Auth::user()->email }}</p>
                    @if(Auth::user()->leave_type == 'approve')
                        <p>Your leave is approved.</p>
                    @else
                        <p>Your leave is pending.</p>
                    @endif
                @else
                    <p>Welcome, Guest! Please <a href="{{ route('user.login') }}">login</a> to access more features.</p>
                @endif
                    <h1 class="display-2 fw-bold">Jane Doe</h1>
                    <p>Lorem ipsum dolor sit amet...</p>
                    <button class="btn btn-outline-dark btn-lg">Projects</button>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="https://codingyaar.com/wp-content/uploads/barista.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="category" id="category">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">category</h2>
            <div class="row">
                @foreach ($categorieItem as $categorie)
                    <div class="col-lg col-sm-6 mt-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $category->image) }}" class="card-img-top"
                                alt="{{ $category->name }} Image">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $categorie->name }}</h5>
                                <p class="card-text">{{ $categorie->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum est id pulvinar mollis. Nullam
                rhoncus dignissim ipsum, ac pulvinar tellus sodales ut. Vestibulum tincidunt malesuada consectetur.
                Nulla vel fermentum leo. Mauris rhoncus blandit justo, at congue dui rhoncus sit amet.</p>
            <p>Proin molestie
                sapien vel nulla accumsan, sit amet viverra metus ornare. Mauris iaculis ex vitae mollis pulvinar.
                Phasellus fringilla neque sed ligula lacinia iaculis.</p>
        </div>
    </section>

    <section class="projects" id="projects">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">product</h2>
            <div class="row">
                @foreach ($product as $pro )
                <div class="col-lg col-sm-6 mt-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $pro->image) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{$pro->name}}</h5>
                            <p class="card-text">{{$pro->description}}</p>
                            <a href="#" class="btn btn-outline-dark">Click More </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Testimonials</h2>
            <div id="carouselExample" class="carousel slide carousel-dark carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis orci enim, ac
                            auctor ex iaculis ut. Mauris ut elit mi. Sed nec quam bibendum, congue augue ut, molestie
                            tellus. Fusce vel semper dolor." </p>
                        <h5>John Doe</h5>
                    </div>
                    <div class="carousel-item">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at tortor a massa facilisis
                            venenatis sit amet non libero. Etiam vel sem venenatis tellus laoreet feugiat eu in mi."
                        </p>
                        <h5>June Doe</h5>
                    </div>
                    <div class="carousel-item">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non metus eu sem ultrices
                            tincidunt sit amet ac nisi. In hac habitasse platea dictumst. Aliquam pellentesque diam non
                            eros feugiat maximus." </p>
                        <h5>Johnny Doe</h5>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Contact Me</h2>
            <div class="row">
                <div class="col-sm-4 mt-4">
                    <a href="#"><i class="bi bi-envelope-fill"></i> jane@mymail.com</a>
                </div>
                <div class="col-sm-4 mt-4">
                    <div class="social-media">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 mt-4">
                    <a href="#"><i class="bi bi-telephone-fill"></i> +1234567890</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center p-3 bg-body-tertiary">
        <div>© 2023. All Rights Reserved.</div>
    </footer>

    <!-- Include Bootstrap and Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>

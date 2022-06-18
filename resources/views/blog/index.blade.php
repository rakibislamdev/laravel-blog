<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Navbar brand -->
                    <a class="navbar-brand nav-item" href="https://mdbgo.com/">
                        <h3 class="fw-bold">bLoG</h3>
                    </a>
                </div>
                <!-- Left links -->

                <!-- Right links -->
                <div class="d-flex align-items-center">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="/" class="px-3 me-2 text-decoration-none">
                            Home
                        </a>
                        <a href="/create" class="px-3 me-2 text-decoration-none">
                            Create
                        </a>
                        <a href="{{ url('/dashboard') }}" class="px-3 me-2 text-decoration-none">Dashboard</a>
                        @else
                        <a href="/" class="px-3 me-2 text-decoration-none">
                            Home
                        </a>
                        <a href="/create" class="px-3 me-2 text-decoration-none">
                            Create
                        </a>
                        <a href="/login" class="px-3 me-2 text-decoration-none">
                            Login
                        </a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-3 me-2 text-decoration-none">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <section class="text-center">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <h1>Our Blog List</h1>
        </div>
        <div class="row mt-5 p-4">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <a href="/posts/{{ $post->id }}" class="text-decoration-none">
                    <h4 class="fw-bold">{{ $post->title }}</h4>
                </a>
                <small>{{ $post->date }}</small>
                <p>{{ $post->description }}</p>
                <span><i>writen by--</i> {{ $post->author_name }}</span>
            </div>
            @endforeach
        </div>
    </section>

    <footer class="bg-dark p-4 text-center">
        <p class="text-white">&copy; all right reserved by <a class="text-decoration-none"
                href="https://www.facebook.com/rakibislm.dev"><i>Rakib</i></a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>

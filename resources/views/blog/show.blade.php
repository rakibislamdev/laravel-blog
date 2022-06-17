<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bLoG</title>
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
                    {{-- <a href="/" class="px-3 me-2 text-decoration-none">
                        Home
                    </a>
                    <a href="/create" class="px-3 me-2 text-decoration-none">
                        Create
                    </a>
                    <a href="/login" class="px-3 me-2 text-decoration-none">
                        Login
                    </a>
                    <a href="/register" class="px-3 me-2 text-decoration-none">
                        Register
                    </a> --}}
                </div>
                <!-- Right links -->

                {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="/" class="px-3 me-2 text-decoration-none">
                        Home
                    </a>
                    <a href="/create" class="px-3 me-2 text-decoration-none">
                        Create
                    </a>
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
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
                    <a href="/register" class="px-3 me-2 text-decoration-none">
                        Register
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                    @endauth
                </div>
                @endif --}}


            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <section class="d-flex justify-content-center">
        <div class="container">
            <h1>{{ $post->title }}</h1>
            <small>Date:- {{ $post->date }}</small>
            <p>{{ $post->description }}</p>
            <span>Author name: <i>{{ $post->author_name }}</i></span>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>

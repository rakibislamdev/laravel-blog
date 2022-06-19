<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bLoG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
            <br><br><br>
            <form action="/posts/{{ $post->id }}/comment" style="width: 600px" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment:</label>
                    <textarea class="form-control" name="comment" id="comment" cols="10" rows="3"></textarea>
                </div>
                <div class="float-end">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-send-fill"></i></button>
                </div>
            </form>
            <div>
                <h4>all comment</h4>

                {{-- @foreach ($comments as $comment)
                <p>{{ $comment->comment }}</p>
                <p>{{ $comment->user_id }}</p>
                @endforeach --}}

            </div>
        </div>

    </section>

    <p class="hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat accusantium, atque deleniti ab
        iusto aliquid optio velit sunt. Totam ex adipisci illum corrupti quaerat harum fugiat impedit, nulla praesentium
        libero?</p>

    <footer class="bg-dark p-4 text-center fixed-bottom">
        <p class="text-white">&copy; all right reserved by <a class="text-decoration-none"
                href="https://www.facebook.com/rakibislm.dev"><i>Rakib</i></a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>

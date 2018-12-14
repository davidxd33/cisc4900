<nav class="navbar navbar-expand-lg navbar-theme">
    <div class="container">
        <a href="#" class="navbar-brand" id="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Recipe" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-right" id="navbar-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/recipes" class="nav-link" style="margin-right: 25px">All Recipes</a></li>

                @auth
                <li class="nav-item"><a href="/recipes/create" class="nav-link">Submit A Recipe</a></li>
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li>
                @else
                <li class="nav-item guest-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="nav-item guest-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
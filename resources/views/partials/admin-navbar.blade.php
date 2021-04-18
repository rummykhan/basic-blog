<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('user-home') }}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">
                    Posts
                </a>
            </li>

        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    User
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if(auth()->user())
                        <a class="dropdown-item" href="{{ route('user-home') }}">Dashboard</a>
                        <a class="dropdown-item" href="{{ route('home') }}">Frontend</a>
                        <a class="dropdown-item" href="#"
                           onclick="if(confirm('Are you sure?')){$('#logout-form').submit();}">Logout</a>

                        <form action="{{ route('user-logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    @endif
                </div>
            </li>

        </ul>
    </div>
</nav>

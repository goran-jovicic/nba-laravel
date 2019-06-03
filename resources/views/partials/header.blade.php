<nav style="background-color: black;">
        <div class="container">
            <div class="row">
                <a class="nav-link" href="/teams">
                    <h2 style="color: white;">Teams</h2>
                </a>
                @if(!Auth::check())
                <a class="nav-link" href="/register">
                    <h2 style="color: white;">Register</h2>
                </a>
                @endif
                @if(!Auth::check())
                <a class="nav-link" href="/login">
                    <h2 style="color: white;">Login</h2>
                </a>
                @endif
                @if(Auth::check())
                <a class="nav-link" href="/logout">
                    <h2 style="color: white;">Logout</h2>
                </a>
                @endif
            </div>
        </div>
        <hr>
    </nav>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">  
        {{-- to change app name, change it inside .env --}}
    <a class="navbar-brand" href="{{url('/')}}">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{url('/projects')}}">Projects</a>
                </li>
                {{-- <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
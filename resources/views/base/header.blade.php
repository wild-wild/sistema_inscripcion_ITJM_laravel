
    <nav class="navbar itjm">
        <div class="container-fluid">
            <!--logo itjm-->
            <a class="navbar-brand itjm" href="{{ url('/') }}">
                <img src="{{ asset('img/logo.svg') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
                <p class="h3 itjm m-1">Instituto Tegnológico Jesus Maria</p>
            </a>
             <!--menu usuario-->
            <div class="dropdown pb-6 h3">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('img/logo.svg') }}" alt="hugenerd" width="30" height="30"
                        class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1">usuario</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">ajustes</a></li>
                    <li><a class="dropdown-item" href="#">perfil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Cerrar</a></li>
                </ul>
            </div>
        </div>
    </nav>


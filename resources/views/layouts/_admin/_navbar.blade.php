<nav class="navbar navbar-expand navbar-light navbar-bg">
    <div style="font-size: 16pt;">
        EventManager
        <sup><small class="badge bg-primary text-uppercase">Pro</small></sup>
    </div>

    <ul class="navbar-nav d-none d-lg-flex">

    </ul>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">

            @if (Auth::user())
                <li class="nav-item">
                    <a class="nav-icon js-fullscreen d-none d-lg-block" href="#" title="Tela Cheia">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="maximize"></i>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-none d-lg-block" href="{{route('app.root')}}"><i class="fal fa-home fa-fw"></i>
                        Início
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="align-middle me-1" data-feather="power"></i> Sair</a>
                    </div>
                </li>
            @endif

        </ul>
    </div>
</nav>

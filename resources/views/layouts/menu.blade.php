<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <span class="logo-dashboard">CGRAE</span>
                    </span>
            <span class="logo-lg">
                        <span class="logo-dashboard">CGRAE</span>
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <span class="logo-dashboard">CGRAE</span>
                    </span>
            <span class="logo-lg">
                        <span class="logo-dashboard">CGRAE</span>
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Gestion des Formations</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route("liste_objectifs") }}">
                        <i class="mdi mdi-image-filter-center-focus-weak"></i> <span>Objectifs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route("liste_formations") }}">
                        <i class="mdi mdi-bookshelf"></i> <span>Formations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route("liste_formateurs") }}">
                        <i class="mdi mdi-bus-stop-uncovered"></i> <span>Formateurs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route("liste_cabinets") }}">
                        <i class="mdi mdi-bus-stop-uncovered"></i> <span>Cabinet</span>
                    </a>
                </li>

                <li class="menu-title"><span data-key="t-menu">Gestion des Agents</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="mdi mdi-account-supervisor"></i> <span>Agents</span>
                    </a>
                </li><!-- end Dashboard Menu -->


                <li class="menu-title"><span data-key="t-menu">Evaluations Des formations</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="mdi mdi-notebook-edit"></i> <span>Evaluation Chaud</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="mdi mdi-notebook-multiple"></i> <span>Evaluation Froid</span>
                    </a>
                </li>

                <li class="menu-title"><span data-key="t-menu">Gestion des utilisateurs</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route("liste_utilisateurs") }}">
                        <i class="mdi mdi-account-circle-outline"></i> <span>Utilisateurs</span>
                    </a>
                </li>

                <li class="menu-title"><span data-key="t-menu">Gestion Authentification</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="mdi mdi-logout"></i> <span>Déconnexion</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>

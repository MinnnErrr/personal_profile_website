<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        .navbar,
        .profile-background {
            background-color: #0B131A !important;
        }

        .navbar .nav-link,
        .navbar .navbar-brand {
            color: white !important;
            /* margin-left: 25px;
            margin-right: 25px; */
            font-weight: 600;
        }

        .navbar .nav-link.active {
            background-color: #81CBC0 !important;
            color: #0B131A !important;
            border-radius: 5px !important;
            font-weight: 500;
        }

        .navbar .nav-link:hover {
            background-color: #81CBC0 !important;
            color: #0B131A !important;
            border-radius: 5px !important;
            transition: 0.3s;
            font-weight: 500;
        }

        .navbar .dropdown-menu {
            background-color: #0B131A;
        }

        .navbar .dropdown-item {
            color: white;
        }

        .navbar .dropdown-item:hover,
        .navbar .dropdown-item.active {
            background-color: #81CBC0;
            color: #0B131A;
            font-weight: 500;
        }

        .navbar-toggler {
            color: white;
            font-size: 36px;
        }

        .navbar-toggler:focus,
        .navbar-toggler:active {
            outline: none;
            box-shadow: none;
        }
        
        .btn.btn-hover:hover {
            background-color: #81CBC0 !important;
            color: #0B131A !important;
            transition: 0.3s;
        }
    </style>
</head>

<body> 
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="{{ route('home') }}">Personal Profiles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mt-2">
                    <li class="nav-item me-4 ms-4 mb-2 ms-lg-0 mb-lg-0">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown me-4 ms-4 mb-2 ms-lg-0 mb-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ request()->routeIs('CA22062') ? 'active' : '' }}"
                                    href="{{ route('CA22062') }}">Loh Min Er</a></li>

                            <li><a class="dropdown-item {{ request()->routeIs('CD22076') ? 'active' : '' }}"
                                    href="{{ route('CD22076') }}">Tai Xiao Ying</a></li>
                            <li><a class="dropdown-item" href="#">member 3</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('CB24017') ? 'active' : '' }}"
                                    href="{{ route('CB24017') }}">Tan Cheong Han</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-4 ms-4 mb-2 ms-lg-0 mb-lg-0">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0" style="overflow-x:hidden;">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
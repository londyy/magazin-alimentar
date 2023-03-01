<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Magazin Alimentar</title>
    <!-- jQuery -->
    <script src="{{ asset('front/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('front/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{ asset('front/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('front/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{ asset('front/plugins/owlcarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('front/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
    <script src="{{ asset('front/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- custom style -->
    <link href="{{ asset('front/css/ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{ asset('front/js/script.js') }}" type="text/javascript"></script>
</head>

<body>
<header class="section-header">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="/"><img class="logo" src="{{ asset('logo.jpeg') }}" width="90px"></a>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- search-wrap .end// -->
                </div>
                <!-- col.// -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="#" class="icontext">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-shopping-cart"></i></div>
                                <div class="text-wrap">
                                    <small>Basket</small>
                                    <span>3 items</span>
                                </div>
                            </a>
                        </div>
                        <!-- widget .// -->
                        <div class="widget-header dropdown">
                            <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-user"></i></div>
                                <div class="text-wrap">
                                    <small>Hello.</small>
                                    <span>Login <i class="fa fa-caret-down"></i></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form class="px-4 py-3">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="email@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="#">Have account? Sign up</a>
                                <a class="dropdown-item" href="#">Forgot password?</a>
                            </div>
                            <!--  dropdown-menu .// -->
                        </div>
                        <!-- widget  dropdown.// -->
                    </div>
                    <!-- widgets-wrap.// -->
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>
    <!-- header-main .// -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link pl-0
                        {{ last(request()->segments()) == 'categorii' ? 'active' : '' }}
                    " href="/categorii"> <strong>Toate Categoriile</strong></a>
                    </li>
                    @foreach(\App\Models\Categorie::all() as $categorie)
                    <li class="nav-item">
                        <a class="nav-link pl-0
                        {{ last(request()->segments()) == Str::slug($categorie->nume) ? 'active' : '' }}"
                           href="{{ route('front.categorie.detalii', Str::slug($categorie->nume)) }}">
                            {{ ucfirst(strtolower($categorie->nume)) }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- collapse .// -->
        </div>
        <!-- container .// -->
    </nav>

</header>
<!-- section-header.// -->

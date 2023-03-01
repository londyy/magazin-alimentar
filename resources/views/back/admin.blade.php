<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagina Admin</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
@include('back.inc.header-stiluri')
</head>

<body class="app sidebar-mini rtl">
@include('back.inc.navbar')
@include('back.inc.sidebar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Pagina de Administrare</h1>
            <p>Pe aceasta pagina gasim informatii generale.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="/admin">Pagina de Administrare</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Utilizatori</h4>
                    <p><b>5</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon">
                <i class="icon fa fa-product-hunt fa-3x"></i>
                <div class="info">
                    <h4>Produse</h4>
                    <p><b>10</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon">
                <i class="icon fa fa-list-alt fa-3x"></i>
                <div class="info">
                    <h4>Categorii</h4>
                    <p><b>500</b></p>
                </div>
            </div>
        </div>
    </div>
</main>
@include('back.inc.footer-scripturi')
</body>
</html>

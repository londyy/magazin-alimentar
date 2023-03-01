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
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>Pe aceasta pagina editam <b>{{ $categorie->nume }}.</b></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('success'))
                <div class="bs-component">
                    <div class="alert alert-dismissible alert-success">
                        <button class="close" type="button" data-dismiss="alert">×</button>
                        <h4>Success!</h4>
                        <p>{{ $message }} <a class="alert-link" href="{{ route('categorie.lista') }}">Apasa aici pentru a vedea lista completa de Categorii.</a>.</p>
                    </div>
                </div>
            @endif
            <div class="tile">
                <div class="row">
                    <div class="col-lg-8 offset-2">
                        <form method="post" action="{{ route('categorie.actualizeaza', $categorie->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nume">Nume</label>
                                <input class="form-control" id="nume" value="{{ old('nume', $categorie->nume) }}" type="text" name="nume"  placeholder="Introduceti numele produsului">
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    @if($categorie->imagine)
                                        <img src="{{ asset('imaginicategorii/'.$categorie->imagine)  }}" id="imagineProdus" class="img-fluid">
                                    @endif

                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label class="control-label">Imagine Produs</label>
                                        <input class="form-control @error('image') is-invalid @enderror"  type="file" name="image" onchange="loadFile(event,'imagineProdus')"/>
                                    </div>
                                </div>
                            </div>

                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit">Salveaza Produsul</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@include('back.inc.footer-scripturi')
<script>
    loadFile = function(event, id) {
        var output = document.getElementById(id);
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
</body>
</html>

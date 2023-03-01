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
            <h1><i class="fa fa-dashboard"></i> Pagina de Produse</h1>
            <p>Pe aceasta pagina este lista de produse.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="/categorii">Produse</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-10">
            @if($message = Session::get('success'))
                <div class="bs-component">
                    <div class="alert alert-dismissible alert-success">
                        <button class="close" type="button" data-dismiss="alert">×</button>
                        <h4>Success!</h4>
                        <p>{{ $message }} <a class="alert-link" href="{{ route('produse.lista') }}">Apasa aici pentru a vedea lista completa de Produse.</a>.</p>
                    </div>
                </div>
            @endif
            <div class="tile">
                <h3 class="tile-title">Produse</h3>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Numele Produsului</th>
                        <th>Pret</th>
                        <th>Imagine</th>
                        <th>Categorie</th>
                        <th>Editeaza</th>
                        <th>Sterge</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($produse as $produs)
                        <tr>
                            <td>{{ $produs->id }}</td>
                            <td>{{ $produs->nume }}</td>
                            <td>{{ $produs->pret }}</td>
                            <td><img src="{{ asset('images/'.$produs->categorie->nume .'/'.  $produs->imagine) }}" style="width: 80px"></td>
                            <td>{{ $produs->categorie->nume }}</td>
                            <td><a onmouseover="style='text-decoration:none'"  href="{{ route('produse.editeaza', $produs->id) }}">Editeaza <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                            <td>
                                <form method="POST" action="{{ route('produse.sterge', $produs->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Stergeo'>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="d-block">Nu sint produse la moment.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@include('back.inc.footer-scripturi')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Sigur vrei sa stergi categoria?`,
            text: "categoria va fi stearsa.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });

</script>
</body>
</html>

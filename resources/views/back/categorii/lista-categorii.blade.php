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
            <h1><i class="fa fa-dashboard"></i> Pagina de Categorii</h1>
            <p>Pe aceasta pagina sunt afisate datele despre categorii.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="/categorii">Categorii</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="tile">
                <h3 class="tile-title">Categorii</h3>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Numele Categoriei</th>
                        <th>Imagine</th>
                        <th>Editeaza</th>
                        <th>Sterge</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($categorii as $categorie)
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->nume }}</td>
                        <td><img src="{{ asset('imaginicategorii/'.$categorie->imagine) }}" style="width: 80px"></td>
                        <td><a onmouseover="style='text-decoration:none'"  href="{{ route('categorie.editeaza', $categorie->id) }}">Editeaza <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                        <td>
{{--                            <a class="removeButton" style="color: red" href="">--}}
{{--                                Sterge <i class="fa fa-remove" aria-hidden="true"></i>--}}
{{--                            </a>--}}
                            <form method="POST" action="{{ route('categorie.sterge', $categorie->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Stergeo nahui'>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="d-block">Nu sint categorii la moment.</td>
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
            title: `Sigur doresti sa stergi categoria?`,
            text: "Categoria va fi stearsa.",
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

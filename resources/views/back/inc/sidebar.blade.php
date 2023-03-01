<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item active" href="{{ route('admin') }}"
            ><i class="app-menu__icon fa fa-dashboard"></i
                ><span class="app-menu__label">Dashboard</span></a
            >
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"
            ><i class="app-menu__icon fa fa-product-hunt"></i
                ><span class="app-menu__label">Produse</span
                ><i class="treeview-indicator fa fa-angle-right"></i
                ></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{ route('produse.lista') }}"
                    ><i class="icon fa fa-circle-o"></i>Lista Produselor</a
                    >
                </li>
                <li>
                    <a
                        class="treeview-item"
                        href="{{ route('produse.adauga') }}"
                        rel="noopener"
                    ><i class="icon fa fa-circle-o"></i>Adauga produs</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"
            ><i class="app-menu__icon fa fa-list-alt"></i
                ><span class="app-menu__label">Categorii</span
                ><i class="treeview-indicator fa fa-angle-right"></i
                ></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{ route('categorie.lista') }}"
                    ><i class="icon fa fa-circle-o"></i>Lista Categoriilor</a
                    >
                </li>
                <li>
                    <a
                        class="treeview-item"
                        href="{{ route('categorie.adauga') }}"
                        rel="noopener"
                    ><i class="icon fa fa-circle-o"></i>Adauga categorie</a
                    >
                </li>
            </ul>
        </li>
{{--        <li class="treeview">--}}
{{--            <a class="app-menu__item" href="#" data-toggle="treeview"--}}
{{--            ><i class="app-menu__icon fa fa-users"></i--}}
{{--                ><span class="app-menu__label">Utilizatori</span--}}
{{--                ><i class="treeview-indicator fa fa-angle-right"></i--}}
{{--                ></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li>--}}
{{--                    <a class="treeview-item" href="{{ route('ulitizatori.lista') }}"--}}
{{--                    ><i class="icon fa fa-circle-o"></i>Lista Utilizatorilor</a--}}
{{--                    >--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a--}}
{{--                        class="treeview-item"--}}
{{--                        href="{{ route('utilizatori.adauga') }}"--}}
{{--                        target="_blank"--}}
{{--                        rel="noopener"--}}
{{--                    ><i class="icon fa fa-circle-o"></i>Adauga utilizator</a--}}
{{--                    >--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

    </ul>
</aside>

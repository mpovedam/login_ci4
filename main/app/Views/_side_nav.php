<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only">
    <div class="brand-sidebar sidenav-light"></div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed hide-on-large-only menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="navigation-header"><a class="navigation-header-text">Administrar Usuarios</a><i class="navigation-header-icon material-icons">more_horiz</i></li>
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="Javascript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">User</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="active"><a class="active" href="<?= route_to('user_list') ?>"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">Lista de usuarios</span></a>
                    </li>
                    <li><a href="page-users-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="View">View</span></a>
                    </li>
                    <li><a href="page-users-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<nav class="white hide-on-med-and-down" id="horizontal-nav">
    <div class="nav-wrapper">
        <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
            <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="UsersDropdown"><i class="material-icons">face</i><span><span class="dropdown-title" data-i18n="Usuarios">Usuarios</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
                <ul class="dropdown-content dropdown-horizontal-list" id="UsersDropdown">
                    <li class="active" data-menu=""><a href="<?= route_to('user_list') ?>"><span data-i18n="List">Lista de usuarios</span></a>
                    </li>
                    <li data-menu=""><a href=""><span data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                    <li data-menu=""><a href=""><span data-i18n="Analytics">Analytics</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END: Horizontal nav start-->
</nav>
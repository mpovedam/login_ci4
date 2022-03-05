<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Users List | Materialize - Material Design Admin Template</title>
    <?= link_tag('app-assets/images/favicon/apple-touch-icon-152x152.png', 'apple-touch-icon', 'image/x-icon') ?>
    <?= link_tag('app-assets/images/favicon/favicon-32x32.png', 'shortcut icon', 'image/x-icon') ?>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <?= link_tag('app-assets/vendors/vendors.min.css') ?>
    <?= link_tag('app-assets/vendors/data-tables/css/jquery.dataTables.min.css') ?>
    <?= link_tag('app-assets/vendors/data-tables2/extensions/responsive/css/responsive.dataTables.min.css') ?>
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <?= link_tag('app-assets/css/themes/horizontal-menu-template/materialize.css') ?>
    <?= link_tag('app-assets/css/themes/horizontal-menu-template/style.css') ?>
    <?= link_tag('app-assets/css/layouts/style-horizontal.css') ?>
    <?= link_tag('app-assets/css/pages/page-users.css') ?>
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <?= $this->renderSection('customStyles') ?>

    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?= view('App\Views\_header') ?>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">FILES</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">17kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">550kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">20kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../../../app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">37kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">MEMBERS</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">PAGES</h6>
            </a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
        <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>

    <!-- BEGIN: SideNav-->
    <?= view('App\Views\_side_nav') ?>

    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <?= $this->renderSection('main') ?>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->
    <?= view('App\Views\_footer') ?>
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <?= script_tag('app-assets/js/vendors.min.js') ?>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <?= script_tag('app-assets/vendors/data-tables2/extensions/DataTables/js/jquery.dataTables.min.js') ?>
    <?= script_tag('app-assets/vendors/data-tables2/extensions/responsive/js/dataTables.responsive.min.js') ?>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <?= script_tag('app-assets/js/plugins.js') ?>
    <?= script_tag('app-assets/js/search.js') ?>
    <?= script_tag('app-assets/js/custom/custom-script.js') ?>
    <?= $this->renderSection('customScripts') ?>
    <!-- END THEME  JS-->
</body>

</html>
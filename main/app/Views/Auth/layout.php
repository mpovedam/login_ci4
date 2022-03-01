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
    <title>User Login | Materialize - Material Design Admin Template</title>
    <?= link_tag('app-assets/images/favicon/apple-touch-icon-152x152.png', 'apple-touch-icon', 'image/x-icon') ?>
    <?= link_tag('app-assets/images/favicon/favicon-32x32.png', 'shortcut icon', 'image/x-icon') ?>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <?= link_tag('app-assets/vendors/vendors.min.css') ?>
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <?= link_tag('app-assets/css/themes/vertical-modern-menu-template/materialize.css') ?>
    <?= link_tag('app-assets/css/themes/vertical-modern-menu-template/style.css') ?>
    <?= link_tag('app-assets/css/pages/login.css') ?>
    <!-- END: Page Level CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">

                        <?= $this->renderSection('main') ?>
                        <!-- /.container -->

                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <?= script_tag('app-assets/js/vendors.min.js') ?>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <?= script_tag('app-assets/vendors/jquery-validation/jquery.validate.min.js') ?>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <?= script_tag('app-assets/js/plugins.js') ?>
    <?= script_tag('app-assets/js/search.js') ?>
    <?= script_tag('app-assets/js/custom/custom-script.js') ?>
    <?= script_tag('app-assets/js/scripts/customizer.js') ?>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <?= script_tag('app-assets/js/scripts/ui-alerts.js') ?>
    <?= script_tag('app-assets/js/scripts/form-validation.js') ?>
    <!-- END PAGE LEVEL JS-->
</body>

</html>
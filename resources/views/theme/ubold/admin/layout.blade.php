<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8" />
        <title>>@yield('titulo', 'Orbis') | Somos Orbis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Creamos sitios web y mercadotecnia." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        
        <link href="../assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" />
        
        <!-- App css -->
        <link href="../assets/css/config/saas/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="../assets/css/config/saas/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="../assets/css/config/saas/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="../assets/css/config/saas/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />







</head>

<body class="loading" data-layout-mode="two-column" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": false}'>
    <!-- Site wrapper -->
   
        <!-- Fin Header -->
        <!-- Inicio Aside -->

        
    <div class="wrapper">
        @include('theme.ubold.admin.navbar')
            <!-- Inicio Header -->
        @include("theme/ubold/admin/sidebar")
            <!-- Fin Aside -->
                <!-- Content Header (Page header) -->
                <div class="content-page">
                    <div class="content">
                        <div class="container-fluid">
                    @yield('contenido')
                        </div>
                    </div>
                    
                </div>   
    </div>

        <!-- Vector js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="../assets/libs/nestable2/jquery.nestable.min.js"></script>

        <!-- Nestable init-->
        <script src="../assets/js/pages/nestable.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>

</body>

</html>


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu" >

                <div class="h-100" >

                    <div class="sidebar-content">
                        <div class="sidebar-icon-menu h-100" data-simplebar>
                            <!-- LOGO -->
                            <a href="dashboard" class="logo">
                                <span>
                                    <img src="../assets/images/favicon.png" alt="" height="28">
                                </span>
                            </a>
                            <nav class="nav flex-column" id="two-col-sidenav-main">
                                
                            @foreach ($menus as $item)
                                @if ($item["menu_id"] != 0)
                                    @break
                                @endif
                                @include("theme.ubold.admin.menu-item", ["item" => $item])
                            @endforeach
                        
                                
                                <a class="nav-link" href="#dashboard" title="Dashboard">
                                    <i data-feather="home"></i>
                                </a>
                                <a class="nav-link" href="#apps" title="Apps">
                                    <i data-feather="grid"></i>
                                </a>
                                
                            </nav>
                        </div>
                        <!--- Sidemenu -->
                        <div class="sidebar-main-menu">
                            <div id="two-col-menu" class="h-100" data-simplebar>
                                <div class="twocolumn-menu-item d-block" id="dashboard">
                                    <div class="title-box">
                                        <h5 class="menu-title">Dashboards</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.html">Dashboard 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-2.html">Dashboard 2</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>

                                        
                                <div class="twocolumn-menu-item" id="components">
                                    <div class="title-box">
                                        <h5 class="menu-title">Components</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="#sidebarExtendedui" data-bs-toggle="collapse" class="nav-link">
                                                    <span class="badge bg-info float-end">Hot</span>
                                                    <span> Extended UI </span>
                                                </a>
                                                <div class="collapse" id="sidebarExtendedui">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="extended-nestable.html">Nestable List</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
            
                    </div>
                    <!-- End Sidebar -->
                </div>
            </div>
            
                <!-- Sidebar -left -->
            
            
            <!-- Left Sidebar End -->
<header>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            <img src="./assets/img/car-rent.png" alt="Rent A Car Logo"></i>Rent A Car
        </div>
        <div class="search_bar">
            <input type="text" placeholder="Buscar 🔍" />
        </div>
        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <i class='bx bx-sun' id="darkLight"></i>
            <i class='bx bx-bell'></i>
            <img src="./assets/img/man.png" alt="user profile icon" class="profile" />
        </div>
    </nav>
    <!-- sidebar -->
    <nav class="sidebar">
        <div class="menu_content">
            <ul class="menu_items">
                <div class="menu_title menu_dahsboard"></div>
                <!-- start -->
                <li class="item">
                    <div href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class="bx bx-cog"></i>
                        </span>
                        <span class="navlink">Rentas</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>
                    <ul class="menu_items submenu">
                        <a href="#" class="nav_link sublink">Rentar vehículo</a>
                        <a href="#" class="nav_link sublink">Devolución</a>
                        <a href="#" class="nav_link sublink">Registrar inspección</a>
                    </ul>
                </li>
                <!-- end -->
                <!-- start -->
                <li class="item">
                    <div href="#" class="nav_link submenu_item">
                        <span class="navlink_icon">
                            <i class="bx bx-car"></i>
                        </span>
                        <span class="navlink">Vehículos</span>
                        <i class="bx bx-chevron-right arrow-left"></i>
                    </div>
                    <ul class="menu_items submenu">
                        <a href="./brands.php" class="nav_link sublink">Marcas</a>
                        <a href="./models.php?modelname=mercedes-benz" class="nav_link sublink">Modelos</a>
                        <a href="#" class="nav_link sublink">Tipos de vehículo</a>
                        <a href="#" class="nav_link sublink">Combustible</a>
                    </ul>
                </li>
                <!-- end -->
            </ul>
            <ul class="menu_items">
                <div class="menu_title menu_editor"></div>
                <!-- Start -->
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-user-badge'></i>
                        </span>
                        <span class="navlink">Clientes</span>
                    </a>
                </li>
                <!-- End -->
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-id-card'></i>

                        </span>
                        <span class="navlink">Empleados</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-report'></i>
                        </span>
                        <span class="navlink">Reporte</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-user'></i>
                        </span>
                        <span class="navlink">Usuarios</span>
                    </a>
                </li>
            </ul>
            <ul class="menu_items">
                <div class="menu_title menu_setting"></div>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-info-circle'></i>
                        </span>
                        <span class="navlink">Car Rental info</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-cog"></i>
                        </span>
                        <span class="navlink">Ajustes</span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Open / Close -->
            <div class="bottom_content">
                <div class="bottom expand_sidebar">
                    <span> Expandir</span>
                    <i class='bx bx-log-in'></i>
                </div>
                <div class="bottom collapse_sidebar">
                    <span>Encojer</span>
                    <i class='bx bx-log-out'></i>
                </div>
            </div>
        </div>
    </nav>
</header>
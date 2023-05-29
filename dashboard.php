<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent A Car</title>
    <link rel="shortcut icon" href="./assets/img/car-rent.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="./assets/lib/dataTables/jquery.dataTables.min.css" rel="stylesheet" />
</head>

<body>
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
                            <a href="#" class="nav_link sublink">Marcas</a>
                            <a href="#" class="nav_link sublink">Modelos</a>
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

    <div class="container">
        <div class="cars-info-container">
            <h2>Información de vehículos</h2>
            <div class="car-info-cards">
                <div class="info-cards">
                    <p class="info-cards-title">Vehiculos rentados</p>
                    <span class="counter">7</span>
                    <span class="info-cards-more_info">Más información<i class='bx bx-chevron-right'></i></span>
                </div>
                <div class="info-cards">
                    <p class="info-cards-title">Vehiculos disponi...</p>
                    <span class="counter">12</span>
                    <span class="info-cards-more_info">Más información<i class='bx bx-chevron-right'></i></span>
                </div>
            </div>
            <div class="rentals-info">
                <h2>Información de rentas</h2>
                <div class="table-rentals">

                    <table id="table-rentas">
                        <thead>
                            <tr>
                                <th>No. Renta</th>
                                <th>Empleado</th>
                                <th>Vehículo</th>
                                <th>Cliente</th>
                                <th>Fecha Renta</th>
                                <th>Fecha Devolución</th>
                                <th>Monto x Día</th>
                                <th>Cantidad de días</th>
                                <th>Comentario</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('./app.php') ?>
                            <?php foreach ($rentas as $renta) { ?>
                                <tr>
                                    <td>
                                        <?php echo $renta["id"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["empleado"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["vehiculo"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["cliente"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["fecha_renta"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["fecha_devolucion"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["monto_dia"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["cantidad_dias"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["comentario"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $renta["estado"]; ?>
                                    </td>
                                    <td>
                                        <a href="editar_renta.php?id=<?php echo $renta["id"]; ?>">Editar</a>
                                        <a href="eliminar_renta.php?id=<?php echo $renta["id"]; ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>


                </div><!--Aquí se mostraría una tabla con tadas las rentas -->
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="./assets/js/app.js"></script>
        <script src="./assets/lib/dataTables/jquery.dataTables.min.js"></script>
        <script>//dataTables start
            let table = new DataTable('#table-rentas');
        </script>
</body>

</html>
<?php 

    if (isset($_GET['brandname'])) {
        $brandname = $_GET['brandname'];
        include "./app.php";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/car-rent.png" type="image/x-icon">
    <title>Modelos - Rent A Car</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="./assets/lib/dataTables/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/models.css">
</head>

<body>

    <?php include("./layout.php") ?>

    <?php 
        $modelosFiltrados = obtenerRegistrosModelo($brandname);
    ?>

    <div class="overlay"></div>

    <div class="modal-rental-displayer">
        <button class="close-modal">x</button>
        <h2 class="car-name">
            Vehículo a rentar: 
            <span class="selected-car-name"></span>
        </h2>
        <hr>
        <div class="rental-information">
            <img src="" alt="">
            <div class="rental-form">
                <h3>Información de renta</h3>
                <form action="#" method="post">
                    <input type="text" placeholder="Nombre del cliente">
                    <input type="text" placeholder="Cédula del cliente">
                    <input type="number" placeholder="Cantidad de días">
                    <div>
                        <label for="drivers-license">Licencia de Conducir</label>
                        <input type="file" id="drivers-license">
                    </div>
                    <div class="timeframe">
                        <div>
                            <label for="fecha_entrega">Fecha de Entrega</label>
                            <input type="date" id="fecha_entrega">
                        </div>
                        <div>
                            <label for="fecha_devolución">Fecha de Devolución</label>
                            <input type="date" id="fecha_devolución">
                        </div>
                    </div>
                    <button>Agendar Cliente</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="models-results">
            <h2>Mostrando resultados de la marca: 
            <?php
                if ($brandname == "bmw") { 
                    echo strtoupper($brandname);
                } else if ($brandname == "mercedesbenz") {
                    echo "Mercedes Benz";
                } else
                    echo ucfirst($brandname);
            ?></h2>
            <div class="models-wrapper">
                <?php foreach($modelosFiltrados as $modelo) { ?>
                <div class="model">
                    <div class="model-img">
                        <img src="./assets/img/vehicles-imgs/<?php echo $modelo['imagen_modelo']; ?>" alt="">
                    </div>
                    <div class="model-info">
                        <div class="top">
                            <span class="model-name"><?php echo $modelo['marca_modelo'] . " " . $modelo['nombre_modelo'] ?></span>
                            <button class="rent-car-btn">Rentar</button>
                        </div>
                        <div class="bottom-info">
                            <div class="left-side">
                                <span class="price">
                                    DOP
                                <?php if (strlen($modelo['precio_dia']) >= 3) {
                                        $first_number = substr($modelo['precio_dia'], 0, 1);
                                        $tmp_precio = explode($modelo['precio_dia'][0], $modelo['precio_dia']);
                                        $final_price = $first_number . "," . $tmp_precio[1];
                                        echo $final_price;
                                    }
                                ?>/día
                                </span>
                            </div>
                            <div class="right-side">
                                <div class="people">
                                    <span><?php echo $modelo['cantidad_pasajeros']; ?></span>
                                    <i class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/models.js"></script>
</body>

</html>
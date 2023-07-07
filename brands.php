<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas Vehículos</title>
    <link rel="shortcut icon" href="./assets/img/car-rent.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/brands.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="./assets/lib/dataTables/jquery.dataTables.min.css" rel="stylesheet" />
</head>

<body>

    <?php include("./layout.php") ?>

    <div class="container">
        <div class="brands-info-container">
            <h2>Marcas disponibles para renta</h2>

            <div class="welcome-screen">
                <div class="suggestion-form">
                    <h3>¿Te gustaría ver otras marcas disponbles?</h3>
                    <form action="">
                        <div class="input-container">
                            <input type="text" id="brand" placeholder="Marca sugerida">
                        </div>
                        <div class="input-container">
                            <!-- <label for="reason">Razón</label> -->
                            <textarea name="" id="reason" cols="30" rows="2" 
                            placeholder="Razón por la cual desea que aparezca la marca"></textarea>
                        </div>
                        <button>Enviar sugerencia</button>
                    </form>
                </div>
                <div class="welcome-img"></div>
            </div>
            
            <div class="logo-selector">
                <a href="./models.php?brandname=toyota" class="logo-link">
                    <div>
                        <img src="./assets/img/toyota-logo.png" alt="">
                    </div>
                </a>
                <a href="./models.php?brandname=honda" class="logo-link">
                    <div>
                        <img src="./assets/img/honda-logo.png" alt="">
                    </div>
                </a>
                <a href="./models.php?brandname=changan" class="logo-link">
                    <div>
                        <img src="./assets/img/changan-logo.png" alt="">
                    </div>
                </a>
                <a href="./models.php?brandname=hyundai" class="logo-link">
                    <div>
                        <img src="./assets/img/hyundai-logo.png" alt="">
                    </div>
                </a>
                <a href="./models.php?brandname=bmw" class="logo-link">
                    <div>
                        <img src="./assets/img/bmw-logo.png" alt="">
                    </div>
                </a>
                <a href="./models.php?brandname=mercedesbenz" class="logo-link">
                    <div>
                        <img src="./assets/img/mercedes-benz-logo.png" alt="">
                    </div>
                </a>
                <a href="./models.php?brandname=audi" class="logo-link">
                    <div>
                        <img src="./assets/img/audi-logo.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>
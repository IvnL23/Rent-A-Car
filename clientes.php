<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="shortcut icon" href="./assets/img/car-rent.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="assets\css\clientes.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="./assets/lib/dataTables/jquery.dataTables.min.css" rel="stylesheet" />
</head>

<body>

    <?php include("./layout.php") ?>

    <div class="container">
        <div class="listado-clientes">

            <h1>Clientes</h1>

            <button id="btn-agregar-cliente">Nuevo cliente</button>

            <table class="table-clientes stripe hover" id="table-clientes">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>No. tárjeta de crédito</th>
                        <th>Limite de crédito</th>
                        <th>Tipo de persona</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php include('./app.php') ?>
                    <?php foreach ($clientes as $cliente) { ?>
                        <tr>
                            <td>
                                <?php echo $cliente["nombre"]; ?>
                            </td>
                            <td>
                                <?php echo $cliente["cedula"]; ?>
                            </td>
                            <td>
                                <?php echo $cliente["no_tarjeta_cr"]; ?>
                            </td>
                            <td>
                                <?php echo $cliente["limite_credito"]; ?>
                            </td>
                            <td>
                                <?php echo $cliente["tipo_persona"]; ?>
                            </td>
                            <td>
                                <?php echo $cliente["estado"]; ?>
                            </td>
                            <td>
                                <a href="#" title="Editar"><i class='bx bx-edit-alt bx-sm'></i></a>
                                <a href="#" title="Eliminar"><i class='bx bx-trash bx-sm'></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="agregar-cliente-container" id="agregar-cliente-container">
                <a id="btn-close"><i class='bx bx-x-circle bx-md'></i></a>
                <h2>Nuevo cliente</h2>
                <form method="post">
                    <div>
                        <label for="">Nombre del Cliente:</label><br />
                        <input type="text" name="" id="">

                        <label for="">Cedula de Identidad:</label><br />
                        <input type="text" name="" id="">
                    </div>
                    <div>
                        <label for="">Numero Tarjeta Credito:</label><br />
                        <input type="text" name="" id="">

                        <label for="">Limite de credito:</label><br />
                        <input type="text" name="" id="">
                    </div>
                    <div>
                        <label for="">Tipo de persona:</label><br />
                        <select name="" id="">
                            <option value=""></option>
                            <option value="Física">Física</option>
                            <option value="Jurídica">Jurídica</option>
                        </select><br /><br />

                        <label for="">Estado:</label><br />
                        <select name="" id="">
                            <option value=""></option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select><br /><br />
                    </div>

                    <button>Agregar Cliente</button>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/lib/dataTables/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#table-clientes');

        $(document).ready(function (e) {
            
            const btnAgregarCliente =document.getElementById('btn-agregar-cliente');
            const btnCerrarAgregarCliente =document.getElementById('btn-close');
            const containerAgregarCliente =document.getElementById('agregar-cliente-container')

            btnAgregarCliente.addEventListener('click', (e) => {
                e.preventDefault();
                containerAgregarCliente.style.visibility = "visible";
            });

            btnCerrarAgregarCliente.addEventListener('click', (e) => {
                e.preventDefault();
                containerAgregarCliente.style.visibility = "hidden";
            });
            
        })
    </script>
</body>

</html>
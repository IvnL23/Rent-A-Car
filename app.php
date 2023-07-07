<?php

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentacar";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Función para ejecutar consultas SQL
function ejecutarConsulta($sql)
{
    global $conn;
    $result = $conn->query($sql);
    return $result;
}

// Función para obtener registros de una tabla
function obtenerRegistros($tabla)
{
    $sql = "SELECT * FROM " . $tabla;
    $result = ejecutarConsulta($sql);
    $registros = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $registros[] = $row;
        }
    }
    return $registros;
}

function obtenerRegistrosModelo($marca)
{
    $sql = "SELECT * FROM modelos_tmp WHERE identificador = '" . $marca . "'";
    $result = ejecutarConsulta($sql);
    $registros = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $registros[] = $row;
        }
    }
    return $registros;
}


// Función para insertar un nuevo registro en una tabla
function insertarRegistro($tabla, $datos)
{
    $campos = array_keys($datos);
    $valores = array_map('escaparValor', array_values($datos));
    $sql = "INSERT INTO " . $tabla . " (" . implode(',', $campos) . ") VALUES (" . implode(',', $valores) . ")";
    return ejecutarConsulta($sql);
}

// Función para escapar valores antes de insertar en la base de datos
function escaparValor($valor)
{
    global $conn;
    return "'" . $conn->real_escape_string($valor) . "'";
}

// Obtener todos los tipos de combustible
$tiposCombustible = obtenerRegistros("tipos_combustible");

// Obtener todas las marcas de vehículos
$marcasVehiculos = obtenerRegistros("marcas_vehiculos");

// Obtener todos los modelos de vehículos
$modelosVehiculos = obtenerRegistros("modelos_vehiculos");

// Obtener todos los tipos de vehículos
$tiposVehiculo = obtenerRegistros("tipos_vehiculo");

// Obtener todos los clientes
$clientes = obtenerRegistros("clientes");

// Obtener todos los empleados
$empleados = obtenerRegistros("empleados");

// Obtener todos los vehículos
$vehiculos = obtenerRegistros("vehiculos");

// Obtener todas las rentas
$rentas = obtenerRegistros("rentas");

// Lógica para procesar formularios de inserción de registros

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lógica para procesar el formulario de inserción de tipo de combustible
    if (isset($_POST["tipo_combustible_submit"])) {
        $tipoCombustibleDatos = array(
            "descripcion" => $_POST["tipo_combustible_descripcion"],
            "estado" => $_POST["tipo_combustible_estado"]
        );
        insertarRegistro("tipos_combustible", $tipoCombustibleDatos);
        // Actualizar la lista de tipos de combustible después de la inserción
        $tiposCombustible = obtenerRegistros("tipos_combustible");
    }
    
    // Lógica para procesar el formulario de inserción de marca de vehículo
    if (isset($_POST["marca_vehiculo_submit"])) {
        $marcaVehiculoDatos = array(
            "descripcion" => $_POST["marca_vehiculo_descripcion"],
            "estado" => $_POST["marca_vehiculo_estado"]
        );
        insertarRegistro("marcas_vehiculos", $marcaVehiculoDatos);
        // Actualizar la lista de marcas de vehículos después de la inserción
        $marcasVehiculos = obtenerRegistros("marcas_vehiculos");
    }
    
    // Lógica para procesar el formulario de inserción de modelo de vehículo
    if (isset($_POST["modelo_vehiculo_submit"])) {
        $modeloVehiculoDatos = array(
            "marca_id" => $_POST["modelo_vehiculo_marca"],
            "descripcion" => $_POST["modelo_vehiculo_descripcion"],
            "estado" => $_POST["modelo_vehiculo_estado"]
        );
        insertarRegistro("modelos_vehiculos", $modeloVehiculoDatos);
        // Actualizar la lista de modelos de vehículos después de la inserción
        $modelosVehiculos = obtenerRegistros("modelos_vehiculos");
    }
    
    // Lógica para procesar el formulario de inserción de tipo de vehículo
    if (isset($_POST["tipo_vehiculo_submit"])) {
        $tipoVehiculoDatos = array(
            "descripcion" => $_POST["tipo_vehiculo_descripcion"],
            "estado" => $_POST["tipo_vehiculo_estado"]
        );
        insertarRegistro("tipos_vehiculo", $tipoVehiculoDatos);
        // Actualizar la lista de tipos de vehículo después de la inserción
        $tiposVehiculo = obtenerRegistros("tipos_vehiculo");
    }
    
    // Lógica para procesar el formulario de inserción de cliente
    if (isset($_POST["cliente_submit"])) {
        $clienteDatos = array(
            "nombre" => $_POST["cliente_nombre"],
            "cedula" => $_POST["cliente_cedula"],
            "no_tarjeta_cr" => $_POST["cliente_no_tarjeta_cr"],
            "limite_credito" => $_POST["cliente_limite_credito"],
            "tipo_persona" => $_POST["cliente_tipo_persona"],
            "estado" => $_POST["cliente_estado"]
        );
        insertarRegistro("clientes", $clienteDatos);
        // Actualizar la lista de clientes después de la inserción
        $clientes = obtenerRegistros("clientes");
    }
    
    // Lógica para procesar el formulario de inserción de empleado
    if (isset($_POST["empleado_submit"])) {
        $empleadoDatos = array(
            "nombre" => $_POST["empleado_nombre"],
            "cedula" => $_POST["empleado_cedula"],
            "tanda_labor" => $_POST["empleado_tanda_labor"],
            "porc_comision" => $_POST["empleado_porc_comision"],
            "fecha_ingreso" => $_POST["empleado_fecha_ingreso"],
            "estado" => $_POST["empleado_estado"]
        );
        insertarRegistro("empleados", $empleadoDatos);
        // Actualizar la lista de empleados después de la inserción
        $empleados = obtenerRegistros("empleados");
    }
    
    // Lógica para procesar el formulario de inserción de vehículo
    if (isset($_POST["vehiculo_submit"])) {
        $vehiculoDatos = array(
            "descripcion" => $_POST["vehiculo_descripcion"],
            "no_chasis" => $_POST["vehiculo_no_chasis"],
            "no_motor" => $_POST["vehiculo_no_motor"],
            "no_placa" => $_POST["vehiculo_no_placa"],
            "tipo_vehiculo_id" => $_POST["vehiculo_tipo"],
            "marca_vehiculo_id" => $_POST["vehiculo_marca"],
            "modelo_vehiculo_id" => $_POST["vehiculo_modelo"],
            "tipo_combustible_id" => $_POST["vehiculo_tipo_combustible"],
            "estado" => $_POST["vehiculo_estado"]
        );
        insertarRegistro("vehiculos", $vehiculoDatos);
        // Actualizar la lista de vehículos después de la inserción
        $vehiculos = obtenerRegistros("vehiculos");
    }
    
    // Lógica para procesar el formulario de inspección
    if (isset($_POST["inspeccion_submit"])) {
        // Procesar los datos de la inspección y realizar las acciones necesarias
        // ...
    }
    
    // Lógica para procesar el formulario de renta y devolución
    if (isset($_POST["renta_devolucion_submit"])) {
        // Procesar los datos de la renta/devolución y realizar las acciones necesarias
        // ...
    }
}

?>
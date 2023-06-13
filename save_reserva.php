<?php 

include("db.php");

if (isset($_POST['save_reserva'])){
    $num_carro = $_POST['num_carro'];
    $nombre_profe = $_POST['nombre_profe'];
    $fecha_reserva = $_POST['fecha_reserva'];
    $hora_inicio_r = $_POST['hora_inicio_r'];
    $hora_fin_r = $_POST['hora_fin_r'];

    $query = "INSERT INTO reserva(num_carro, nombre_profe, fecha_reserva, hora_inicio_r, hora_fin_r) VALUES ('$num_carro', '$nombre_profe', '$fecha_reserva', '$hora_inicio_r', '$hora_fin_r')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>
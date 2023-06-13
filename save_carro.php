<?php 

include("db.php");

if (isset($_POST['save_carro'])){
    $num_carro = $_POST['num_carro'];
    $num_pc = $_POST['num_pc'];
    $escuela = $_POST['escuela'];

    $query = "INSERT INTO carros(num_carro, num_pc, escuela) VALUES ('$num_carro', '$num_pc', '$escuela')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>
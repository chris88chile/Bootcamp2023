<?php 

include("db.php");

if (isset($_POST['save'])){
    $rut = $_POST['rut'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO profesor(rut, name, last_name, email, password) VALUES ('$rut', '$name', '$last_name', '$email', '$password')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>

<!-- formulario de operario -->

<?php 

if (isset($_POST['save'])){
    $rut = $_POST['rut'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO operarios(rut, name, last_name, email, password) VALUES ('$rut', '$name', '$last_name', '$email', '$password')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>

<!-- formulario de carro -->


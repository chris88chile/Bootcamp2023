<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container p-4">

        <div class="row">

            <div class="col-md-4">

                <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>

                <div class="card card-body">
                    <form action="save.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="rut" class="form-control" placeholder="Rut" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nombre" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Apellidos" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Correo" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Contraseña" autofocus>
                        </div>
                        
                        <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                    </form>
                </div>
        </div>



  
    <div class="container p-4">

        <div class="row">

            <div class="col-md-4">

                <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>

                <div class="card card-body">
                    <form action="save.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="rut" class="form-control" placeholder="Rut" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nombre" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Apellidos" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Correo" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Contraseña" autofocus>
                        </div>
                        
                        <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                    </form>
                </div>
        </div>


        <!-- Formulario carro -->


        <div class="container p-4">

        <div class="row">

            <div class="col-md-4">

                <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>

                <div class="card card-body">
                    <form action="save_carro.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="num_carro" class="form-control" placeholder="Numero de carro" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="num_pc" class="form-control" placeholder="Numero de computadores" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="escuela" class="form-control" placeholder="Escuela" autofocus>
                        </div>
                        
                        
                        <input type="submit" class="btn btn-success btn-block" name="save_carro" value="Guardar">
                    </form>
                </div>
        </div>

        <!-- Formulario reserva -->

        <div class="container p-4">

        <div class="row">

            <div class="col-md-4">

                <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>

                <div class="card card-body">
                    <form action="save_reserva.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="num_carro" class="form-control" placeholder="Carro" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nombre_profe" class="form-control" placeholder="Nombre profesor" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="date" name="fecha_reserva" class="form-control" placeholder="Fecha de reserva" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="time" name="hora_inicio_r" class="form-control" placeholder="Hora de inicio de reserva" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="time" name="hora_fin_r" class="form-control" placeholder="Hora de fin de reserva" autofocus>
                        </div>
                        
                        <input type="submit" class="btn btn-success btn-block" name="save_reserva" value="Guardar">
                    </form>
                </div>
        </div>

</body>
</html>

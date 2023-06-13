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
</body>
</html>

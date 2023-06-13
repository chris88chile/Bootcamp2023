<!DOCTYPE html>
<html>
<head>
    <title>Control de carros</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="button-container">
        <button onclick="location.href='solicitud_profesor.php';">Solicitud del Profesor</button>
        <button onclick="location.href='control_operarios.php';">Control de Operarios</button>
    </div>
    
    <h1>Control de carros</h1>
    
    <h2>Calendario</h2>
    <table class="calendar">
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
        </tr>
        <?php
        // Obtener los datos del calendario desde la base de datos y generar las filas correspondientes
        // (código para conectarse a la base de datos y obtener los datos del calendario no incluido)
        // Supongamos que los datos del calendario se almacenan en un arreglo llamado $datos_calendario
        
        // Recorrer los datos del calendario y generar las filas de la tabla
        foreach ($datos_calendario as $hora => $dias) {
            echo '<tr>';
            echo '<td>' . $hora . '</td>';
            
            foreach ($dias as $dia => $estado) {
                $clase_estado = ($estado == 'Ocupado') ? 'current-day' : '';
                echo '<td class="' . $clase_estado . '">' . $estado . '</td>';
            }
            
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>

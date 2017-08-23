<?php
$conn = new mysqli("localhost", "root", "123456", "umg");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql    = "SELECT id, nombre, apellido , telefono FROM persona";
$result = $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <link href="bootstrap/favicon.ico" rel="icon">
                            <title>
                                Persona
                            </title>
                            <!-- Bootstrap core CSS -->
                            <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
                                <!-- Custom styles for this template -->
                                <link href="jumbotron.css" rel="stylesheet">
                                </link>
                            </link>
                        </link>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
    <script type="text/javascript">
        function confirmation()
        {
            if(confirm("Realmente desea Eliminar el Registro"))
            {
                return true;
            }
            return false;

        }
    </script>
     <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarsExampleDefault" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <a class="navbar-brand" href="persona.php">
                Home
            </a>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Persona_add.php">
                            Agregar Persona
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron">
            <br>
                <br>
                    <div class="starter-template">
                        <h1>
                            Listado De Personas
                        </h1>
                        <a class="btn btn-success" href="Persona_add.php" role="button">
                            Agregar Persona
                        </a>
                        <br>
                            <br>
                                <table class="table table-striped">
                                    <tr>
                                        <td>
                                            Id
                                        </td>
                                        <td>
                                            Nombre
                                        </td>
                                        <td>
                                            Apellido
                                        </td>
                                        <td>
                                            Telefono
                                        </td>
                                        <td>
                                            Accion
                                        </td>
                                    </tr>

                                  <?php
if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
        ?>
     <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['nombre']; ?> </td>
            <td> <?php echo $row['apellido']; ?> </td>
            <td> <?php echo $row['telefono']; ?> </td>
            <td>


                <a href="persona_add.php?txtId=<?php echo $row['id']; ?>&txtNombre=<?php echo $row['nombre']; ?>&txtApellido=<?php echo $row['apellido']; ?>&txtTelefono=<?php echo $row['telefono']; ?>" class="btn btn-primary">Editar</a>
                <a href="persona_add.php?Action=Eliminar&txtId=<?php echo $row['id']; ?>" class="btn btn-danger" onclick = "return confirmation()">Eliminar</a>

               </td>
          </tr>

        <?php

    }
} else {
    echo "0 results";
}
?>
 <?php
/*if ($result->num_rows > 0) {
// output data of each row

while ($row = $result->fetch_assoc()) {
echo '<tr>  <td>';
echo $row['id'];
echo ' </td> <td>';
echo $row['nombre'];
echo ' </td> <td>';
echo $row['apellido'];
echo ' </td> <td>';
echo $row['telefono'];
echo ' </td> <td>';
echo '<a href="producto_edit.php?id=<?php echo $row[''Idproducto'']; ?>" class="btn btn-warning">Editar</a>'
echo '<a class = "btn btn-primary" href = "producto_edit.php?txtId= .$row[''id'']&txtNombre=ANDRES&txtApellido=PEREZ&txtTelefono=87654321" > Editar</a>';
echo '<a class = "btn btn-danger" href = "producto_del.php?" >Eliminar</a> ';
echo '</td>';
echo '</tr> ';

// echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Apellido: " . $row["apellido"] . "<br>";
}
} else {
echo "0 results";
}
 */?>







                                </table>
                            </br>
                        </br>
                    </div>
                </br>
            </br>
        </div>
        <!-- /.containe
        <!-- /container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script crossorigin="anonymous" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        </script>
        <script>
            window.jQuery || document.write(' < scriptsrc = "bootstrap/docs/assets/js/vendor/jquery.min.js" >  < \ / script > ')
        </script>
        <script crossorigin="anonymous" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
        </script>
        <script src="bootstrap/dist/js/bootstrap.min.js">
        </script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js">
        </script>
    </body>
</html>

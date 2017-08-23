
<?php
$nombre   = '';
$apellido = '';
$telefono = '';
$id1      = '';
$conn     = new mysqli("localhost", "root", "123456", "umg");
if (isset($_GET['txtId'])) {
    $id = $_GET['txtId'];
    echo '<br>';
    if (isset($_GET['Action'])) {
        if ($_GET['Action'] == 'Eliminar') {
            $sql = "DELETE from persona where id =$id ";
            echo $sql;
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query($sql);
            echo '<br> Eliminado Correctamente'; //$sql;
            //header("Location:persona.php");
        }

    }
}
if ($id != "") {
    if (isset($_GET['txtNombre']) and isset($_GET['txtApellido']) and isset($_GET['txtTelefono'])) {
        $nombre   = $_GET['txtNombre'];
        $apellido = $_GET['txtApellido'];
        $telefono = $_GET['txtTelefono'];
        $sql      = "UPDATE  persona set  nombre = '$nombre' ,apellido = '$apellido' ,telefono = $telefono   where id =$id ";

        //echo $sql;

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_GET['Action'])) {
            $result = $conn->query($sql);
            echo '
        <br>
            Actualizado Correctamente'; //$sql;
            header("Location:persona.php");
        }
    }

} else {
    if (isset($_GET['txtNombre']) and isset($_GET['txtApellido']) and isset($_GET['txtTelefono'])) {
        $nombre   = $_GET['txtNombre'];
        $apellido = $_GET['txtApellido'];
        $telefono = $_GET['txtTelefono'];

        $sql = "INSERT INTO persona(id,nombre,apellido,telefono) ";
        $sql .= "select max(id)+1 , '$nombre','$apellido',$telefono from persona ;";
        $conn = new mysqli("localhost", "root", "123456", "umg");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['Action'])) {
            $result = $conn->query($sql);
            echo '
        <br>
            Insertado Correctamente'; //$sql;
            header("Location:persona.php");
        }
    }
}

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
                            <script type="text/javascript">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
                            </script>
                            <script>
                                $(document).ready(function(){
                    $("#btnInsert1").click(function(){
                    alert("Hola");
                    });
                });
                            </script>

                                    <div class="starter-template">
                                        <h1>
  <?php
if (isset($_GET['txtId'])) {
    $id1 = $_GET['txtId'];

    if ($id1 != "") {
        echo "Actualización de Persona";
    } else {
        echo "Creación de Persona";
    }
} else {
    echo "Creación de Persona";
}
?>
                                        </h1>
                                        <br>
                                            <br>
                                                <form action="persona_add.php" id="persona" method="GET" name="">
                                                    Id
                                                    <input class="form-control" id="txtId" name="txtId" placeholder="Id"  value = "<?php echo $id; ?>" size="45/" type="number" value="<?php $id?>">
                                                        Nombre
                                                        <input class="form-control" id="txtNombre" name="txtNombre" value = "<?php echo $nombre; ?>" placeholder="Ingrese Nombre" required="true" type="cantProducto" value=""/>
                                                        Apellido
                                                        <input class="form-control" id="txtApellido" name="txtApellido"  value = "<?php echo $apellido; ?>" placeholder="Ingrese Apellido" required="" type="text" value=""/>
                                                        Telefono
                                                        <input class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingrese Telefono" required=""  value = "<?php echo $telefono; ?>" type="text" value=""/>
                                                    </input>
                                                    <input class="btn btn-success" id="Guardar" name="Action" type="submit" value="Guardar"/>
                                                </form>
                                                <br>
                                                    <br>
                                                    </br>
                                                </br>
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
                            window.jQuery || document.write('<script src="bootstrap/docs/assets/js/vendor/jquery.min.js"><\/script>')
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
            </br>
        </br>
    </br>
</br>

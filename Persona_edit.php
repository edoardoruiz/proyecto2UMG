<?php
if (isset($_GET['txtId'])) {
    $id = $_GET['txtId'];
    echo '<br>
<br>
    <br>
        ';
    if ($id != "") {
        if (isset($_GET['txtNombre']) and isset($_GET['txtApellido']) and isset($_GET['txtTelefono'])) {
            $nombre   = $_GET['txtNombre'];
            $apellido = $_GET['txtApellido'];
            $telefono = $_GET['txtTelefono'];

            $sql = "UPDATE  persona set  nombre = '$nombre' ,apellido = '$apellido' ,telefono = $telefono   where id =$id ";

            //echo $sql;

            $conn = new mysqli("localhost", "root", "123456", "umg");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query($sql);
            echo '
        <br>
            Actualizado Correctamente'; //$sql;
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

            $result = $conn->query($sql);
//$res = mysql_query($sql,$con) or die(mysql_error());
            //header("Location:producto.php");
            //echo $sql;
            echo '
            <br>
                Insertado Correctamente'; //$sql;
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
                            <a class="navbar-brand" href="Inicio.php">
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
                            <br>
                                <br>
                                    <div class="starter-template">
                                        <h1>
                                            Listato De Personas
                                        </h1>
                                        <br>
                                            <br>
                                                <form action="persona_add.php" id="producto" method="GET" name="">
                                                    Id
                                                    <input class="form-control" id="txtId" name="txtId" placeholder="Id" size="45/" type="number" value="<?php $id?>">
                                                        Nombre
                                                        <input class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese Nombre" required="true" type="cantProducto" value=""/>
                                                        Apellido
                                                        <input class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese Apellido" required="" type="text" value=""/>
                                                        Telefono
                                                        <input class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingrese Telefono" required="" type="text" value=""/>
                                                    </input>
                                                    <input class="btn btn-success" id="producto" name="producto" type="submit" value="Agregar Producto"/>
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

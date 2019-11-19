<?php
include('conexion.php');
$us=$_POST['nom'];
$pass=$_POST['pass'];
    // verificar si existe el usuario
    $existe_u=$conexion ->query("select * from usuarios where nom = '$us'");
    $cant= $existe_u->num_rows;
    if ($cant > 0)
    { // sabemos que existe el usuario guardo el pass para comparar
        foreach($existe_u as $p)
        $rpass=$p['pass'];
        //comparo
        if ($rpass==$pass)
        {
            session_start();
            $_SESSION['usuario']=$us;
            header('location:principal.html');
            
        }
        else {
            ?>
                <script type="text/javascript">
                    alert ("Contraseña incorrecta. Ingrese nuevamente","Iventario");
                    window.location= 'login.html';
                </script>
            <?php
        }
    }
    else
    ?>
    <script type="text/javascript">
        alert ("El usuario NO existe","Iventario");
        window.location= 'login.html';
    </script>
    <?php
$con->close();
?>
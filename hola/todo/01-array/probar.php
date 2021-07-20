<?php

if(isset($_POST['correo']) || isset($_POST['contrasenia']))
{

    echo $_POST['correo'];
    echo $_POST['contrasenia'];
    //$correo = $_POST['correo'];
    //$contrasenia = $_POST['contrasenia'];

    //echo "su correo es: ". $correo;
    //echo "su contrasenia es: ". $contrasenia;
}else{
    echo "no existe";
}






<?php 
    
    //Variable
    
    $to = $_POST["email"];// correo del cliente
    //Validacion Email
    if(empty($to)) {
        echo  "<p class='error'>* Agregar tu correo </p>";
        $c = 0;
    } elseif(!filter_var($to, FILTER_VALIDATE_EMAIL)){
        echo "<p class='error'>* El correo es incorrecto </p>";
        $c = 0;
    }else{
        $c = 1;
    }
?>
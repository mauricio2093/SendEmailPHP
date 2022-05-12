<?php  
   
    //Variable
   
    $phone = $_POST["telefono"]; //telefono cliente
    //Validacion Phone
    if(! is_numeric($phone)) {
        echo "<p class='error'>* El telefono debe ser un número </p>";
        $b = 0;
    } else{
        $b = 1;
    }
?>
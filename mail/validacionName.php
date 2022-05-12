
<?php  
    //Validaciones
    $name="";
    $name = $_POST["name"];//nombre cliente        
    if(empty($name)) {
        echo "<p class='error'>* Agregar tu nombre </p>";
        $a = 1;
    } elseif(strlen($name) > 30){
        echo  "<p class='error'>* Tu nombre es muy largo </p>";
        $a = 1;
    }else{
        $a = 1;
    }
?>
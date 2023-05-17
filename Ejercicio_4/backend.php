<?php 
//ENVIANDO UNA VARIABLE DE UN ELEMENTO DE HTML 
if (isset($_POST)){
    echo "Recibido :)".$_POST['nombre'];
}
?>
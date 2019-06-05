<?php 
try{
    $db = new PDO('mysql:host=localhost; dbname=MOON', 'root', '');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exeption $e){
    echo 'imposible de se conecter a la database';    
    echo $e->getMessage();
    die();
}
?>
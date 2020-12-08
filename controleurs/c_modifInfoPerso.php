<?php
if(!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 'modif';
}
$action = $_REQUEST['action'];
switch($action){
    case 'modif':{
        include("vues/v_modifInfoPerso.php");
        break;
    }
    default :{
        include("vues/v_modifInfoPerso.php");
        break;
    }
}
?>
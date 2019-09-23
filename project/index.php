<?php
    include_once('Model/DBconfig.php');
    $db=new Database();
    $db->Connect();

    if(isset($_GET['action'])){
        $action= $_GET['action'];
    }
    else{
        $action='';
    }

    switch($action){
        case 'trangchu':{
            require_once('Views/trangchu/index_trangchu.php');
        }
    }
?>
<?php 

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];


$adminUser = "kim";
$adminPass = "123456";
// ======================================================

$outArray = array();
if( isset($_REQUEST['user']) && isset($_REQUEST['pass'])){
    if (($user==$adminUser)&&($pass==$adminPass)){
        $outArray = array( "login"=>"true", "message"=> "Acesso feito com sucesso" );
    }else{
        $outArray = array( "login"=>"false", "message"=> "Acesso negado" );
    }    
} 


echo json_encode($outArray, JSON_UNESCAPED_UNICODE);

?>
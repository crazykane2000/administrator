<?php session_start();
    include 'administrator/connection.php';
    include 'administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);  
    // error_reporting(E_ALL & ~E_NOTICE);
    // if ($pdo_auth['kyc_approved']=="Pending") {
    //   header('Location:kyc.php?choice=error&value=Your KYC is Pending, You can Trade once KYC Is Approved');
    // }
    $table = "admin_backoffice";
    
    $result = $pdo->exec("UPDATE `$table` SET `status`='Pending' WHERE `id`=".$_REQUEST['id']);
    header('Location:view_admins.php?choice=success&value=Admin Status Updated  Successfully. ');
    exit();
?>
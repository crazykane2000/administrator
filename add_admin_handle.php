<?php session_start();
    include 'administrator/connection.php';
    include 'administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt);  
    // error_reporting(E_ALL & ~E_NOTICE);
    // if ($pdo_auth['kyc_approved']=="Pending") {
    //   header('Location:kyc.php?choice=error&value=Your KYC is Pending, You can Trade once KYC Is Approved');
    // }
    $table = "admin_backoffice";
    $key_list = "`username`, `type`, `pass`, `country`,  `status`, `tx_address`";
    $value_list = "'".$_REQUEST['admin_username']."',";
    $value_list.="'".$_REQUEST['business_partner_type']."',";
    $value_list.="'".$_REQUEST['password']."',";
    $value_list.="'".$_REQUEST['country']."',";
    $value_list.="'Approved',";
    $value_list.="0x'".getToken(43)."'";
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_admins.php?choice=success&value=Admin  Backoffice Personals Added Successfully.');
    exit();
?>
<?php
//Mysql Approach to get Logs, only path to xml file needed
require('../app/helper/mysqlDBOperations.php');
$filepath = '../files/generateReportConfiger.xml';
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
if (!empty($_GET['username'])) {
    $username = $_GET['username'];
    $db = new mysqlDBOperations($filepath);
    $result = $db->getAllLog($username);
    echo json_encode($result);
}
/*OLD DYNAMODB APPROACH
require('../app/helper/DBOperations.php');
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
$args = [];
if (!empty($_GET['username'])) {
    $args[] = $_GET['username'];
    $db = new DBOperations($args);
    $result = $db->getAllLogs();
    echo json_encode($result);
}
/*



/*

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $db = new DBOperations($_GET['username']);
    $result = $db->getAllLogs(); 
    foreach($result as $r) {
        echo $r;
    }
    return $result;
} else {
    echo 'error';
    exit();
}

/*


$args = [];
$args[0] = 'wtang13';
$db = new DBOperations($args);
$result = $db->getAllLogs();
foreach($result as $i){
    echo $i ."\n";
}
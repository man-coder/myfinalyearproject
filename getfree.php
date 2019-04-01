
<?php



session_start();
$password = ""; 
$host = "root"; 
$dbase = "register"; 
$table = "videos"; 
$server_name = "localhost";
$connection= mysqli_connect ($server_name, $host, $password, $dbase);
if($_SERVER['REQUEST_METHOD'] == 'GET'){
$result= mysqli_query( $connection, "SELECT cate, videofile FROM $table ORDER BY cate desc, videofile desc, id desc " );

    $finalResponse = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($finalResponse,$row);
    }
        Header('Content-Type: application/json; charset=UTF8');
        echo json_encode($finalResponse);
        header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);

}
?>





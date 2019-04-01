
<?php
include('connect.php');


//if($_SERVER['REQUEST_METHOD'] == 'GET'){
$sql="select username,file_name from `uploadings` order by id desc";
$result = mysqli_query($con,$sql);
//if($result->num_rows > 0){
    $finalResponse = array();
    while($row =mysqli_fetch_assoc($result)){
        array_push($finalResponse,$row);
    }
        header('Content-Type: application/json; charset=UTF8');
        echo json_encode($finalResponse);
        header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
//}
//}
?>
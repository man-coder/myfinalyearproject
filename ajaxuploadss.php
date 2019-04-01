<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php

//include_once 'connect.php';



 
//$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','txt','mp4','mov'); // valid extensions
$path = 'uploads/'; // upload directory


 
if(!empty($_POST['cate'])  || $_FILES['image'])
{
    $cate=$_POST['cate'];
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
 
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
 
// check's valid format
//if(in_array($ext, $valid_extensions)) 
//{ 
$path = $path.strtolower($final_image); 
 
if(move_uploaded_file($tmp,$path)) 
{
echo "<video src='$path' ></video>";
 echo $path;
//include database configuration file
include_once 'db.php';
 
//insert form data in the database
$insert = $db->query("INSERT into videos (cate,videofile) VALUES ('".$cate."','".$path."')");
 
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'INVALID CONTENT';
}
//}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>


<body>

  <strong><?php echo "DATA SUBMITTED SUCCESSFULLY"?></strong>
                       </body>
</html>

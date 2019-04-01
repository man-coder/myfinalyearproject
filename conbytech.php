    <?php
session_start();
include_once 'connect.php';
if(!isset($_SESSION['user']))
{
    
	header("Location: login.php");
    
}

$res=mysqli_query($con, "SELECT * FROM users WHERE id=".$_SESSION['user']);

$userRow=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
        <!-- CUSTOM STYLES-->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
    <link href="custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script>
       
       

    function getuploads() {
      $.ajax({
        url: 'getupload.php',
        contentType: "application/json; charset=UTF-8",
        success: function (data) {
          var i = 0;
          $("#test").empty();
          while (i < data.length) {
              var filename=data[i].file_name;
            $("#test").append("<tr><td>"+(i+1) + "</td>" + "<td>" + data[i].username + "</td>" + "<td>" + data[i].file_name +"</td>"+"<td><a class='hvr-icon-sink-away' style='color:white' href='download.php?file_name="+filename+"'"+"><i class=' hvr-icon fas fa-file-download fa-2x''></i></a></td> </tr>");
                       i++;
          }
        },
        error: function (error) {
          debugger;

        }
      });
      // title.val() = "";
    }
  </script>
</head>
<body onload="getuploads()">
     
           
          
    <div id="wrapper">
        
        
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="https://res.cloudinary.com/h3av7f1l3s/image/upload/v1546109158/Bscit-logo.png" width="50px" height="50px" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="logout.php?logout" class="hvr-buzz-out" style="color:#fff;">Sign out</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li >
                        <a href="ho.php" ><i class="fas fa-desktop"></i>Dashboard </a>
                    </li>
                   

<!--
                    <li class="active-link">
                        <a href="conbytech.php"><i class="fas fa-chalkboard-teacher"></i>Content by teachers</a>
                    </li>
                     <li>
                        <a href="#"><i class="fas fa-user-graduate"></i>Content by students</a>
                    </li>
                    
-->
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2 style="text-transform:uppercase"><?php echo $userRow['username']; ?>
 DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 text-white ">
                        <div class="alert alert-danger">
                            <strong>Welcome <?php echo $userRow['username']?></strong>
                            
                             <br>
                               <table class="table">
  <thead>
    <tr>
      <th scope="col">SR NO</th>
      <th scope="col">USERNAME</th>
      <th scope="col">CONTENT</th>
     <th scope="col">DOWNLOAD</th>
    
    </tr>
  </thead>
  <tbody id="test">
  </tbody>
</table>                </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                            
                       
                   
                </div>
                  
                  <!-- /
              </div>
                 <!-- /. ROW  -->   
			     <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2019 Bscit.com | <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.Bscit.com</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 
   <!-- BOOTSTRAP SCRIPTS -->
    <script src="bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="custom.js"></script>
    
   
</body>
</html>

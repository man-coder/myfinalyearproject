<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = '';
$mysql_database = "register";

$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) 

or die("Oops some thing went wrong");

if(isset($_REQUEST["submit"]))    
{
    $cate=$_REQUEST["cate"];
    $file_name=["file_name"];
    
$quer="Insert into media(cate,file_name)  values('$cate','$file_name')";
        mysqli_query($con,$quer);
    
    
    
}
    
?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Free lancer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		
		
			<link rel="icon" type="image/png" href="icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="loggin.css">
	
	 <link rel="stylesheet" href="modal.css">

		
		<link rel="stylesheet" href="demo.css">
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html" class="active"><span style="color:white" class="icon fa-home"></span></a></li>
						<li><a href="gallery.html"><span style="color:white" class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.html"><span style="color:white" class="icon fa-file-text-o"></span></a></li>
						<li><button class="btn btn-primary" data-toggle="modal" data-target="#myModals"></button></li>
					
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Banner -->
						<section id="banner">
							<div class="inner">
								<h1>Hey, I'm Freelancer</h1>
								<p class="text-light">    
							    “The life of the developer – like that of any freelance, whether he be a tester or a developer – is predicated on willpower. Without it there simply wouldn’t be any remuneration, period.”
							</p>
								<ul class="actions">
									<li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
								</ul>
							</div>
						</section>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<header class="special">
										<h2>What's New</h2>
									</header>
								<br>	
									
                                    
                                    
 <div class="container">
    <div class="row">
        <div class="col-md-7 col-xl-6">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">New</h6>
                                   <div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/ZXP6lPp-98U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
         

            
              </div>
 
           <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/ZXP6lPp-98U" data-target="#myModal">
  Watch
</button>
                       
                        </div>
        </div>
        
        <div class="col-md-7 col-xl-6">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders Received</h6>
                                        <div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/xVaW-e_eOPs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

           

           
           </div>
           <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/xVaW-e_eOPs" data-target="#myModal">
  Watch
</button>
           
            </div>
        </div>
        
    
        
        
	</div>
	
	
	
	
   <div class="row">
        <div class="col-md-7 col-xl-6">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">New</h6>
                                   <div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/1XmUUa_pWw8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
            
              </div>
                      
           <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/1XmUUa_pWw8" data-target="#myModal">
  Watch
</button>

           
            </div>
        </div>
        
        <div class="col-md-7 col-xl-6">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Orders Received</h6>
                                        <div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/JJSoEo8JSnc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div></div>
           
                    
           <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/JJSoEo8JSnc" data-target="#myModal">
  Watch
</button>

           
            </div>
        </div>
 	</div>
	
	
</div>                                   
                                    
                                    
                                    
                                    
									
									<footer>
										<a href="gallery.html" class="button big">Full Gallery</a>
									</footer>
								</div>
						</section>

					<!-- Contact -->
					<!-- Footer -->
						<!--<footer id="footer">
							<div class="copyright">
								
							</div>
						</footer>-->
				</section>
				
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
        
        
      </div>

    </div>
  </div>
</div> 

           
           	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
        
        
      </div>

    </div>
  </div>
</div> 
       <div id="wrap">
            <div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
                <br><br>        
     		<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('https://res.cloudinary.com/h3av7f1l3s/image/upload/v1546109173/bg-02.jpg');">
			    
			</div>

				<form class="login100-form validate-form"  action="free.php" id="form" enctype="multipart/form-data" method="post">
				
		<select name="cate" id="uploads">
		    
		    <option value="HTML">HTML</option>
		    <option value="C">C</option>
		     <option value="C++">C++</option>
		    <option value="PYTHON">PYTHON</option>
		
		</select>
				
				
		<input  id="uploadImage" type="file" accept="*" name="file_name" />
			
		<br>
		<br>
		<br>
<input type="submit" value="Upload" name="submit">		
		
<!--
<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" value="submit">
								UPLOAD
							</button>
						</div>

					</div>
-->
				</form>
			</div>
		</div>
		

        
           
                 
      </div>

    </div>
  </div>
</div> 
                      
            
            </div>
				
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<script>
        
        $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});



        </script>
	</body>
</html>
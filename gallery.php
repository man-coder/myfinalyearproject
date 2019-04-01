<!DOCTYPE HTML>
<html>
	<head>
		<title>Gallery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		
		
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	
	<link rel="stylesheet" href="assets/css/main.css">
	  <link href="custom.css" rel="stylesheet" />
  
  <script>
       
       

    function getfree() {
      $.ajax({
        url: 'getfree.php',
        contentType: "application/json; charset=UTF-8",
        success: function (data) {
          var i = 0;
          $("#demo").empty();
          while (i < data.length) {
              var videofile=data[i].videofile;
              var cate=data[i].cate;
            $("#demo").append("<table align='center'><tr><td><center><video class=media ALL "+cate+" style='width: 100%;height: auto;border-radius: 10px; overflow: hidden; ' controls src="+videofile+">"+"</video><center></td></tr></table");
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
	<body onload="getfree()">
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="freelan.php"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php" class="active"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Header -->
				
					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">

									<!-- Filters -->
										<header>
											<h1>Gallery</h1>
											<ul class="tabs">
												<li><a href="#" data-tag="ALL" class="button active">ALL</a></li>
											
												<li><a href="#" data-tag="HTML" class="button">HTML</a></li>
												<li><a href="#" data-tag="C" class="button">C</a></li>
												<li><a href="#" data-tag="C++" class="button">C++</a></li>
												<li><a href="#" data-tag="PYTHON" class="button">PYTHON</a></li>
											</ul>
										</header>

                                    
                    
                                    
   <div class="container">
       
         <div class="row">
                    <div class="col-lg-12 text-white ">
                        <div class="alert alert-danger">
                               <table class="table">
  <center><thead>
    <tr>
      <th scope="col">videofile</th>
    </tr>
      </thead></center>
  <tbody id="demo">
  
   <tr>
      <th scope="col">videofile</th>
      </tr>
    
  </tbody>
</table>                </div>
                       
                    </div>
                    </div>
              
       
       
   </div>                                 
                                    
                                    
                                    
                                                                       							</div>
						</section>

					<!-- Contact -->
					
					<!-- Footer -->
						<footer id="footer">
							<div class="copyright">
								
							</div>
						</footer>
				</section>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
			

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
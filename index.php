<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Student Result Management System</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Syahrizaldev"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'><link rel="stylesheet" href="./style.css">

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
       
        <link href="css/styles.css" rel="stylesheet" />
		
		<style>
	.logo {
    width: 50px;
    display: flex;
    position: relative;
    left: -6px;
    top: 1px;
	}
	.slider{
		height:500px;
		border-radius:43px;
		border-style:solid;
		max-width:100%;
		width:100%;
	}
	.slider img{
transition: 1s ease;
}
	.slider:hover{
		-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
transition: 1s ease;
	}
.py-5 {
    padding-top: 0px !important !important;
}
.my-5 {
    margin-top: 0px !important;
}
*,
*::before,
*::after {
  border-radius: 15px;
}

		
		</style>
    </head>
    <body>
      
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
			<a href="http://www.abvgiet.org"><img class="logo" src="images/Logo123.png"></a>
                <a class="navbar-brand" href="index.php"><b>ABVGIET || SRMS</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://www.abvgiet.org">Home</a></li>
						<li class="nav-item"><a class="nav-link active" href="https://www.hptechboard.com/results-polytechnic">Board Site</a></li>
                        <li class="nav-item"><a class="nav-link active" href="find-result.php">Students</a></li>
                        <li class="nav-item"><a class="nav-link active" href="admin-login.php">Admin</a></li>
						<li class="nav-item"><a class="nav-link active" href="mailto:Abvgietian@gmail.com?">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      
        <main class="main">
  <div class="container1">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card-image">
            <img class="slider" src="images/10.jpg" alt="Image Slider" href="www.abvgiet.org">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img class="slider" src="images/20.jpg" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img class="slider" src="images/30.jpg" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img class="slider" src="images/40.jpg" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img class="slider" src="images/50.jpg" alt="Image Slider">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-image">
            <img class="slider" src="images/60.jpg" alt="Image Slider">
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Scrollbar -->
      <div class="swiper-button-next">
        <i class="fas fa-chevron-circle-right arrow-icon"></i>
      </div>
      <div class="swiper-button-prev">
        <i class="fas fa-chevron-circle-left arrow-icon"></i>
      </div>
    </div>
  </div>
</main>
		
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Notice Board</h2>
                        <hr color="#000" />
                        <marquee direction="up"  onmouseover="this.stop();" onmouseout="this.start();">
                   <ul>
 <?php $sql = "SELECT * from tblnotice";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>                      
<li><a href="notice-details.php?nid=<?php echo htmlentities($result->id);?>" target="_blank"><?php echo htmlentities($result->noticeTitle);?></li>
<?php }} ?>

                   </ul>
               </marquee>

                    </div>
                </div>
            </div>
        </section>


      
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Atal Bihari Vajpayee Government Institute of Engineering & Technology 2011<?php ('Y');?></p></div>
        </footer>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script><script  src="./script.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

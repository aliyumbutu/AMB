 <!DOCTYPE html>

 <?php require_once("conn2.php") ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Mentorship</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
	<script src="font-awesome/fontawesome-all.min.js"></script>
	<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Mentorship</title>
        <!-- Mobile Specific Meta -->
         <link rel="stylesheet" href="assets/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body >

        <!-- Preloader -->

        

        <!--End off Preloader -->

        <!-- Header -->
        <header>
            <!-- Top Navbar -->
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li><a href="#"><span class="fa fa-phone"></span> 08068199866</a></li>
                        <li><a href="#"><span class="fa fa-envelope"></span>mentor07@gmail.com</a></li>
                        </ul>
                    <ul class="list-inline social_icon">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href=""><span class="fa fa-behance"></span></a></li>
                        <li><a href=""><span class="fa fa-dribbble"></span></a></li>
                        <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                        <li><a href=""><span class="fa fa-youtube"></span></a></li>
                    </ul>			
                </div>
            </div><!-- Top Navbar end -->

            <!-- Navbar -->
            <nav class="navbar bootsnav">
                <!-- Top Search -->
              

                <div class="container">
                    <!-- Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                   
                    
        </header><!-- Header end -->

        <br/>

 <!-- TESTIMONIAL  ================================================== -->
 



 
   <section class="section" id="section-testimonial">
   	<center><h2>List of Available Mentors</h2></center>
   		<?php 

 	$row = mysqli_query($conn,"SELECT * FROM mentors") or die("cannot update" . mysqli_error($conn)); 

 		while ($fetch = mysqli_fetch_array($row)) {

 			$id = $fetch["id"];
 			$full_name = $fetch["full_name"];
 			$skill = $fetch["skill"];
 			$description = $fetch["description"];

 			?> 
  <div class="container">
               
                    <!-- here -->
          
                    	
                    	<div class="col-md-12">
                                <div class="test-inner ">
                                   <div class="test-author-thumb d-flex">
                                       <img src="images/profile.jpg" alt="Testimonial author" class="img-fluid">

                                       <div class="test-author-info">
                                           <h4><?php echo $full_name?></h4>

                                           <h6> <a style="color:red;"> Skill : </a> 	<?php echo $skill; ?></h6>
                                           <a href="mentorProfile.php?id=<?php echo $id; ?> " ><button class="btn btn-primary">View Full Profile</button></a>
                                       </div>
                                   </div>

    								<?php echo $description; ?>
                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>



               
                    
                       
                           
                        </div>
               




 			<?php  		

 		
 		}
 		
 		


 	?>
          
        </section>
    
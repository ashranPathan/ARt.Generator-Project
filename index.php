<?php include "config.php";?>
<?php 
// define('PATH','');
if(isset($_POST['submit']))
{
    extract($_POST); 
	$query3 = "SELECT * FROM registration WHERE email = '$email' AND name = '$name'";
	$fire2 = mysqli_query($connect,$query3);
	//echo $query3;
	if(mysqli_num_rows($fire2) > 0)
	{
       echo "<script>";
			echo "alert('User Alredy Exsist!');";
			echo "window.location.href='index.php';";
	       echo "</script>";
    }
	else
	{
		 $add="insert into registration(name,email,password) values('$name','$email','$password')";        
         $result=mysqli_query($connect,$add) or die(mysqli_error($connect));
		  if($result)
		  {
			echo "<script>";
			echo "alert('Inserted Successfully..!');";
			//echo "window.location.href='index.php';";
			echo "</script>";
		  }
		  else
		  {
			echo "<script>";
			echo "alert('Error in insert');";
			//echo "window.location.href='index.php';";
			echo "</script>";
		  }
		
	}
}


?>
<?php //include "config.php";?>
<?php session_start();?>
<?php 
if (!isset($_SESSION['user'])){
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($connect,$_POST['email']);
	$password = mysqli_real_escape_string($connect,$_POST['password']);
	$query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
	$fire = mysqli_query($connect,$query);
	if($fire) {
	      if(mysqli_num_rows($fire) == 1) {
           $_SESSION['user'] = true;
		   $_SESSION['email'] = $email;
	echo "<script>";
			echo "alert('Login Successful.!!');";
			
			echo "</script>";
			  
			  
          
       
	}else{
   $vali = '<div id="alert1" class="container col-sm-12 col-lg-6 alert alert-danger"> 
           Username or password is invalid!
           <button type="button" class="close" data-dismiss="alert">&times;</button>
           </div>';
	}
 }
}
}else{
	// header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="demos/html/paper-1.8.2/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>ARt. Generator</title>
    <link rel="stylesheet" href="demos/html/paper-1.8.2/assets/css/app.css">
    <style>.loader{position:fixed;left:0;top:0;width:100%;height:100%;background-color:#f5f8fa;z-index:9998;text-align:center}.plane-container{position:absolute;top:50%;left:50%}
    .dot {
      height: 60px;
      width: 60px;
      background-color: #03a9f4;
      border-radius: 50%;
      display: inline-block;
    }
</style>
</head>

<body>
 
    <div id="app" class="paper-loading">
        <!-- <div class="btn-fixed-top-left"><a href="index.php" class="btn-fab  btn-primary shadow1"><i class="icon icon-clipboard-list"></i></a></div> -->
        <div class="nav-sticky white no-b">
            <nav class="mainnav navbar navbar-default justify-content-between">
                <div class="container relative"><a class="offcanvas dl-trigger paper-nav-toggle" type="button" 
                data-toggle="offcanvas" aria-controls="navbarNav" aria-expanded="false"
                 aria-label="Toggle navigation"><i></i></a> <a class="navbar-brand"
                  href="index.php"><img class="d-inline-block align-top" 
                  alt="" src="#">ARt. Generator</a>
                    <div class="paper_menu">
                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                            <ul class="dl-menu align-items-center">
                                <li ><a href="index.php">Home</a>
                                   
      <?php if (!isset($_SESSION['email'])){
          ?>
          
          <li> <a href="#modalLogin" data-toggle="modal" data-target="#modalLogin">Login</a>
          <?php
                           }
                           else{
                             ?>
                             
                               
                               <li><span><a  style="font-size:17px; font-color:white bold;">
                               
                               <li> <a href="logout.php" >Logout</a>
 
 <?php                          }?>
                               
                            </li>
                                <li><a href="#modalSignUp" class="btn btn-primary nav-btn" data-toggle="modal" 
                                data-target="#modalSignUp">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <main>
            <section>
                <div class="xv-slider-wrap text-white" style="background-image:url('demos/html/paper-1.8.2/assets/img/dummy/b1.jpg');">
                    <div class="lightSlider" data-item="1" data-pager="false" data-slide-margin="0" data-gallery="false" data-pause="8000" data-pauseonhover="true" data-auto="true" data-loop="true">
                        <div class="xv-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-6 fadeInRight animated">
                                        <div class="xv-slider-content clearfix color-white ">
                                        <br><br>    
                                        <h1>ARt. Generator</h1>
                                            <p>Refine Your Content with Flawless Precision:<br> ARt. Generator : <br>Where Formatting Meets Brilliance</p>
                                            <!-- <div class="p-t-40"> <a href="#" class="btn btn-img"><img src="demos/html/paper-1.8.2/assets/img/basic/4.png" alt="" style="width:100px;margin-left:70px;"></a> </div> -->
                                        </div>
                                    </div>
                                    <div class="hidden-sm-down col-lg-6 fadeInLeft animated"> <img src="demos/html/paper-1.8.2/assets/img/demo/slider/Iphone.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                  
              
                    </div>
                </div>
            </section>
            <section class="p-t-b-40 service-blocks animatedParent animateOnce">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-block clearfix">
                               <div class="service-icon"><i class="icon icon-cloud-fog2"></i></div>
                                <div class="service-content">
                                    <h3><a href="#">IEEE Formatting</a></h3>
                                    <p>Achieve precision and adherence to IEEE standards effortlessly. Our system ensures that your papers meet the rigorous formatting requirements set by the Institute of Electrical and Electronics Engineers, allowing you to focus on your research while we take care of the presentation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-block">
                                <div class="service-icon"><i class="icon icon-rainbow2"></i></div>
                                <div class="service-content">
                                    <h3><a href="#">Elsevier Formatting</a></h3>
                                    <p>Navigate the complexities of Elsevier formatting with ease. Our system streamlines the process, ensuring that your papers align perfectly with Elsevier's guidelines. Say goodbye to formatting headaches and hello to professionally presented research.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-block clearfix">
                                <div class="service-icon"><i class="icon icon-sailing-boat-water"></i></div>
									<div class="service-content">
										<h3><a href="#">Benefits</a></h3>
										<p>Efficiency:Save time and effort by automating the formatting process.<br>

Precision:
Ensure accuracy and consistency in your paper formatting every time.<br>

Flexibility:
Adapt to various formatting requirements seamlessly. </p>
									</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-t-b-40 animatedParent animateOnce responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="service-featured-thumbs">
                                <div class="service-thumb animated fadeInUpShort"> <a href="#" class="img-link"><img src="demos/html/paper-1.8.2/assets/img/demo/5.png" alt="service"></a></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="service-featured-content p-t-b-40">
                                <h6 style="color: #8989e2;font-weight: 800;">IEEE</h6>
                                <h3 class="fadeInUpShort animated">IEEE journals — Template for students/Researchers/Professors...</h3><br><br>
                                <p class="fadeInUpShort animated">With ARt. Generator, navigating the complexities of IEEE paper template formatting becomes a breeze.</p>
                                <p class="fadeInUpShort animated">
                                Our system is meticulously designed to streamline the entire process, ensuring that your papers are formatted with precision and in accordance with IEEE standards. Say goodbye to the tedious manual formatting tasks and welcome a seamless experience where your content is transformed into polished, professional papers effortlessly.</p> <p class="fadeInUpShort animated">Whether you're a seasoned researcher or just starting out, ARt. Generator empowers you to focus on your ideas while we take care of the formatting intricacies, saving you time and energy for what truly matters—advancing your research.</p>
                                    <br>
       
      <?php if (!isset($_SESSION['email'])){
          ?>
           <a href="#modalLogin" data-toggle="modal" data-target="#modalLogin" class="btn btn-primary btn-lg fadeInUpShort 
                                    animated">Use This Template</a>
								<a href="https://smallseotools.com/plagiarism-checker/" style="background-color:#4d2ce3;color:white;" class="btn btn-info btn-lg fadeInUpShort 
                                    animated" target="_blank" >Check Plagiarism</a>
          
          <?php
                           }
                           else{
                             ?>
                                    <a href="ieee_format.php" class="btn btn-primary btn-lg fadeInUpShort 
                                    animated">Use/View This Template</a>
								<a href="https://smallseotools.com/plagiarism-checker/" style="background-color:#4d2ce3;color:white;" class="btn btn-info btn-lg fadeInUpShort 
                                    animated" target="_blank" >Check Plagiarism</a>
								
                             
 <?php                          }?> 
                            </div>
                        </div>
						
						<hr>
						        <div class="col-12 col-lg-6">
                            <div class="service-featured-thumbs">
                                <div class="service-thumb animated fadeInUpShort"> <a href="#" class="img-link"><img src="demos/html/paper-1.8.2/assets/img/demo/elsevier.png" alt="service"></a></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="service-featured-content p-t-b-40">
                                <h6 style="color: #8989e2;font-weight: 800;">Elsevier</h6>
                                <h3 class="fadeInUpShort animated">Elsevier journals — Template for students/Researchers/Professors...</h3><br><br>
                                <p class="fadeInUpShort animated">With ARt. Generator, conquering the intricacies of Elsevier template formatting is now effortless.</p>
                                <p class="fadeInUpShort animated">
                                 Our system is intricately crafted to simplify the entire process, guaranteeing that your papers adhere meticulously to Elsevier's formatting requirements. Say farewell to the laborious task of manual formatting and embrace a smooth journey where your content is effortlessly transformed into refined, scholarly papers.</p><p class="fadeInUpShort animated"> Regardless of your level of expertise in research, ARt. Generator empowers you to channel your focus on your ideas, while we meticulously handle the formatting nuances, liberating your time and energy to propel your research endeavors forward.</p>
                                    <br>
       
      <?php if (!isset($_SESSION['email'])){
          ?>
           <a href="#modalLogin" data-toggle="modal" data-target="#modalLogin" class="btn btn-primary btn-lg fadeInUpShort 
                                    animated">Use/View This Template</a>
									<a href="https://smallseotools.com/plagiarism-checker/" style="background-color:#4d2ce3;color:white;" class="btn btn-info btn-lg fadeInUpShort 
                                    animated"  target="_blank">Check Plagiarism</a>
          
          <?php
                           }
                           else{
                             ?>
                                    <a href="elsevier_format.php" class="btn btn-primary btn-lg fadeInUpShort 
                                    animated">Use/View This Template</a>
								<a href="https://smallseotools.com/plagiarism-checker/" style="background-color:#4d2ce3;color:white;" class="btn btn-info btn-lg fadeInUpShort 
                                    animated">Check Plagiarism</a>
                             
 <?php                          }?> 
                            </div>
                        </div>
					
                        <section class="p-t-b-50 s1 masonry-post">
                            <div class="service-blocks no-m white">
                                <div class="container">
                                    <header class="section-heading">
                                        <h4>Get an PDF output to any Journal within seconds</h4>
                                    </header>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="service-block">
                                                <div class="service-icon"><span class="dot" style="margin-top: 20%;">
                                                        <h5 style="margin-left: 35%;margin-top: 30%;color: white;">1</h5>
                                                    </span></div><br>
                                                <div class="service-content" style="margin-left: 15%">
                                                    <h3><a href="#">
                                                            Choose a template</a></h3>
                                                    <p>Select a template from above.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="service-block">
                                                <div class="service-icon"><span class="dot">
                                                        <h5 style="margin-left: 35%;margin-top: 30%;color: white;">2</h5>
                                                    </span></div>
                                                <div class="service-content" style="margin-left: 12%">
                                                    <h3><a href="#">
                                                            Enter Content</a></h3>
                                                    <p>Enter Your Paper Contents</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-block">
                                                <div class="service-icon"><span class="dot">
                                                        <h5 style="margin-left: 35%;margin-top: 30%;color: white;">3</h5>
                                                    </span></div>
                                                <div class="service-content" style="margin-left: 15%">
                                                    <h3><a href="#">View and edit your final output</a></h3>
                                                    <p>Art. Generator will automatically format your output to meet the journal guidelines</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="service-block">
                                                <div class="service-icon"><span class="dot">
                                                        <h5 style="margin-left: 35%;margin-top: 30%;color: white;">4</h5>
                                                    </span></div>
                                                <div class="service-content" style="margin-left: 15%">
                                                    <h3><a href="#">
                                                            Submit directly or Download</a></h3>
                                                    <p>Submit to journal directly or Download in PDF,
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
										    <div class="col-12 col-lg-6">
                            <div class="service-featured-thumbs">
                                <div class="service-thumb animated fadeInUpShort"> <a href="#" class="img-link">
									<img src="demos/html/paper-1.8.2/assets/img/demo/ieee_level.png" alt="service" style="margin-top: -23rem;
    margin-left: 100px;"></a></div>
                            </div>
                        </div>
                                    </div>
									
									
                                </div>
                            </div>
                        </section>
                       <!-- <section class="white lighten-5 p-t-b-80 animatedParent">
                            <div class="row m-t-100">
                                <div class="col-lg-6 col-12  animated fadeInLeftShort"> <img class="shadow1" src="../../../demos/html/paper-1.8.2/assets/img/dummy/appkit2.jpg"></div>
                                <div class="col-lg-4 text-left mx-md-auto p-t-b-40">
                                    <h2 class="p-b-20"> Real Energy & Power of Soul</h2>
                                    <div class="service-blocks animated fadeInUpShort">
                                        <div class="service-block">
                                            <div class="service-icon"><i class="icon-filter_1" aria-hidden="true"></i></div>
                                            <div class="service-content">
                                                <h3><a href="#">Paper Service Heading</a></h3>
                                                <p>Dynamically leverage existing synergistic systems whereas future-proof sources Synergistically formulate</p>
                                            </div>
                                        </div>
                                        <div class="service-block">
                                            <div class="service-icon"><i class="icon-filter_2" aria-hidden="true"></i></div>
                                            <div class="service-content">
                                                <h3><a href="#">Paper Service Heading</a></h3>
                                                <p>Dynamically leverage existing synergistic systems whereas future-proof sources Synergistically formulate</p>
                                            </div>
                                        </div>
                                        <div class="service-block">
                                            <div class="service-icon"><i class="icon-filter_3" aria-hidden="true"></i></div>
                                            <div class="service-content">
                                                <h3><a href="#">Paper Service Heading</a></h3>
                                                <p>Dynamically leverage existing synergistic systems whereas future-proof sources Synergistically formulate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>-->
                    </div>
                </div>
            </section>
            <!--  <section class="p-t-b-40 ">
                <div class="container">
                    <div class="lightSlider" data-item="4" data-item-lg="3" data-item-md="2" data-item-sm="1">
                        <div class="paper-block text-center"> <img class="p-b-20 rounded-circle" src="demos/html/paper-1.8.2/assets/img/dummy/u1.png" alt="">
                            <h5>Doe Joe</h5>
                            <p>Designer</p>
                        </div>
                        <div class="paper-block text-center"> <img class="p-b-20 rounded-circle" src="demos/html/paper-1.8.2/assets/img/dummy/u2.png" alt="">
                            <h5>Doe Joe</h5>
                            <p>Designer</p>
                        </div>
                        <div class="paper-block text-center"> <img class="p-b-20 rounded-circle" src="demos/html/paper-1.8.2/assets/img/dummy/u4.png" alt="">
                            <h5>Doe Joe</h5>
                            <p>Designer</p>
                        </div>
                        <div class="paper-block text-center"> <img class="p-b-20 rounded-circle" src="demos/html/paper-1.8.2/assets/img/dummy/u5.png" alt="">
                            <h5>Doe Joe</h5>
                            <p>Designer</p>
                        </div>
                        <div class="paper-block text-center"> <img class="p-b-20 rounded-circle" src="demos/html/paper-1.8.2/assets/img/dummy/u1.png" alt="">
                            <h5>Doe Joe</h5>
                            <p>Designer</p>
                        </div>
                        <div class="paper-block text-center"> <img class="p-b-20 rounded-circle" src="demos/html/paper-1.8.2/assets/img/dummy/u2.png" alt="">
                            <h5>Doe Joe</h5>
                            <p>Designer</p>
                        </div>
                    </div>
                </div>
            </section> -->
            <section class="p-b-40 p-t-40 animatedParent animateOnce responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="service-featured-content p-t-b-40"><br><br><br><br><br>
                                <h3 class="fadeInUpShort animated">Submit Your Paper with Ease</h3><br><br>
                                <p class="fadeInUpShort animated">ARt. Generator simplifies the submission process by providing direct links to major journal submission platforms. With just a click, you can seamlessly submit your meticulously formatted paper to your desired journal, saving you valuable time and ensuring a smooth transition from content creation to publication.</p><br>
                                <!-- <p class="fadeInUpShort animated">Link Link Link</p> -->
                                <a href="https://www.ieee.org/conferences/index.html" style="background-color:#4d2ce3;color:white;" class="btn btn-info btn-lg fadeInUpShort 
                                    animated">IEEE conference</a> 
                                    <a href="https://www.elsevier.com/en-in/events/conferences/all" style="background-color:#4d2ce3;color:white;" class="btn btn-info btn-lg fadeInUpShort 
                                    animated">Elsevier conference</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="service-featured-thumbs">
                                <div class="service-thumb animated fadeInUpShort"> <a href="#" class="img-link"><img src="demos/html/paper-1.8.2/assets/img/demo/I2.jpg" alt="service"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
        </main>
   <?php include "footer.php";?>
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog width-400" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="text-center p-40 p-b-0"> <img src="demos/html/paper-1.8.2/assets/img/dummy/u4.png" alt="">
                           <br><br> <h3>Welcome Back,</h3>
                            <p class="p-t-b-20">Ready to Unleash Your Research?<br> Let's Get Started!</p>
                        </div>
                        <div class="light p-40 b-t-b">
                            <form action="#" method="post">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i> 
                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address"></div>
                                <div class="form-group has-icon"><i class="icon-user-secret"></i> 
                                <input type="Password" class="form-control form-control-lg" name="password" 
                                placeholder="Password"></div> <input type="submit" name="login"
                                class="btn btn-primary btn-lg btn-block" value="Log In">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="light p-t-b-40">
                                    <div class="p-40">
                                        <h5 class="p-b-20">Create New User Account</h5>
                                        <form action="#" method="post">
                                            <div class="form-group has-icon"><i class="icon-user-circle"></i> 
                                            <input type="text" class="form-control form-control-lg"
                                            name="name" placeholder="Your Name"></div>
                                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                             <input type="text" name="email" class="form-control form-control-lg" placeholder="Email Address"></div>
                                            <div class="form-group has-icon"><i class="icon-user-secret"></i> 
                                            <input type="password"  name="password" class="form-control form-control-lg" placeholder="Password"></div>
                                            <input type="submit" name="submit" 
                                             class="btn btn-primary btn-lg btn-block" value="Sign Up Now">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

        </div>
    </div>
    <script src="demos/html/paper-1.8.2/assets/js/app.js"></script>
   
</body>

</html>
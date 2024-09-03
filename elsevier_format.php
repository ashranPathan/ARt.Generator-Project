<?php include "config.php";?>

<?php
 session_start();

 if ($_SESSION['user']) {
  $email = $_SESSION['email'];
 }else{
  header("Location: index.php");
 }
?>
<?php
$q1 = mysqli_query($connect,"SELECT * FROM registration WHERE email='$email'");
while($all1 = mysqli_fetch_assoc($q1)){
   $id = $all1['id'];
}?>
<?php 
// define('PATH','');
if(isset($_POST['submit']))
{
  extract($_POST);             
  $add="insert into registration(name,email,password) values('$name','$email','$password')";        
  $result=mysqli_query($connect,$add) or die(mysqli_error($connect));
  if($result)
  {
    echo "<script>";
    echo "alert('Inserted Successfully..!');";
    echo "window.location.href='index.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert('Error in insert');";
    echo "window.location.href='index.php';";
    echo "</script>";
  }
}


?>
<?php //include "config.php";?>
<?php// session_start();?>
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
           
            echo 'window.location.href="index.php";';
            echo "</script>";
        //    header("Location: profile.php");
        //    echo "<center><h4 style='color:green'>Success</h4></center>";
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
<?php 
// define('PATH','');
if(isset($_POST['upload']))
{
  extract($_POST);  
  $name=$_FILES['figures']['name'];
  $type=$_FILES['figures']['type'];
  $size=$_FILES['figures']['size'];
  $temp=$_FILES['figures']['tmp_name'];
  if($name){
  
            $upload= "image/elsevier_img/";
            $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $photo= rand(1000,1000000).".".$imgExt;
            move_uploaded_file($temp,$upload.$photo);

            $save = "$upload" . $photo; //This is the new file you saving
                  $file = "$upload" . $photo; //This is the original file

                  list($width, $height) = getimagesize($file) ;

                  $modwidth = 1600;

                  // $diff = $width / $modwidth;

                  // $modheight = $height / $diff;
                  $modheight = 1067;
                  $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  if($imgExt=="jpg" || $imgExt=="jpeg" )
          {
          
          $image = imagecreatefromjpeg($file);

          }
          else if($imgExt=="png")
          {
          
          $image = imagecreatefrompng($file);

          }
                  // $image = imagecreatefromjpeg($file) ;
                  imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

                  imagejpeg($tn, $save, 100) ;
  }
             
  $add="insert into elsevier_content(project_title,author_name_1,author_name_2,author_name_3,author_name_4,abstract,keyword,
  background,implementation,result,conclusion,methods,requirement,figures,u_id,authors_contribution,acknowldgment,reference) 
  values('$project_title','$author_name_1','$author_name_2','$author_name_3','$author_name_4','$abstract',
  '$keyword','$background','$implementation','$result','$conclusion','$methods',
  '$requirement','$photo','$id','$authors_contribution','$acknowldgment','$reference')";
	echo $add;
  $result=mysqli_query($connect,$add) or die(mysqli_error($connect));
  if($result)
  {
    echo "<script>";
    echo "alert('Inserted Successfully..!');";
    echo "window.location.href='elsevier_format.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert('Error in insert');";
    echo "window.location.href='elsevier_format.php';";
    echo "</script>";
  }
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
<script type="text/javascript">
            $(document).ready(function(){
                //Image file input change event
                $("#image").change(function(){
                    readImageData(this);//Call image read and render function
                });
            });
             
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>

    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="l-s-2 blink">LOADING</div>
        </div>
    </div>
    <div id="app" class="paper-loading">
        <!-- <div class="btn-fixed-top-left"><a href="index.php" class="btn-fab  btn-primary shadow1"><i class="icon icon-clipboard-list"></i></a></div> -->
        <div class="nav-sticky white no-b">
            <nav class="mainnav navbar navbar-default justify-content-between">
                <div class="container relative"><a class="offcanvas dl-trigger paper-nav-toggle" type="button" 
                data-toggle="offcanvas" aria-controls="navbarNav" aria-expanded="false"
                 aria-label="Toggle navigation"><i></i></a> <a class="navbar-brand"
                  href="index.php"><img class="d-inline-block align-top" 
                  alt="" src="">ARt. Generator</a>
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
                                                            
                                                         <!-- </li>
                                                             <li><a href="#modalSignUp" class="btn btn-primary nav-btn" data-toggle="modal" 
                                                             data-target="#modalSignUp">Sign Up</a></li>
                                                         </ul> -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <main>            <section class="no-m blue4 text-white p-t-b-80">
                <div class="container">
                    <header class="p-t-50">
                        <h1 class="s-48 font-weight-bolder">Hye, <small class="text-blue">there</small></h1>
                        <p class="s-24">Ready to write your Elsevier Paper.</p>
                    </header>
                </div>
            </section>
            <div class="portfolio container">
                <div class="masonry-container">
                   
                    <section class="p-t-b-50 s4 masonry-post">
                        <div class="container">
                            <header class="section-heading">
								 <h1 class="s-56 font-weight-bolder text-center">View and Download Your Paper <small class="text-blue"> <br> <a href="view_elsevier_paper.php" class="btn btn-primary nav-btn" style="width:200px;">View paper</a></small></h1><br>
								<hr><br>
                                <h2 class="s-64 font-weight-bolder text-center">Add Your Paper Content <small class="text-blue"></small></h2>
                           
                              
                            </header>
                            <div class="row">
                                <div class="col-lg-8" style="margin:auto">
                                    <div class="contactFormWrapper">

                                        <form  method="POST" enctype="multipart/form-data">
                                            <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-lg-12"> <label for="subject" class="required">Project Title</label> <input class="form-control form-control-lg" type="text" name="project_title" id="project_title"></div>
                                                 <div class="col-12 col-lg-12"> <label for="subject" class="required">Author Name 1</label> <input class="form-control form-control-lg" type="text" name="author_name_1" id="author_name_1"></div>
                                                 <div class="col-12 col-lg-12"> <label for="subject" class="required">Author Name 2</label> <input class="form-control form-control-lg" type="text" name="author_name_2" id="author_name_2"></div>
                                                   <div class="col-12 col-lg-12"> <label for="subject" class="required">Author Name 3</label> <input class="form-control form-control-lg" type="text" name="author_name_3" id="author_name_3"></div>
                                                     <div class="col-12 col-lg-12"> <label for="subject" class="required">Author Name 4</label> <input class="form-control form-control-lg" type="text" name="author_name_4" id="author_name_4"></div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Abstract</label><textarea placeholder="Abstract" name="abstract" id="abstract" class="form-control-lg"></textarea>
                                                </div>
                                                <div class="col-12 col-lg-12"> <label for="subject" class="required">keywords</label> <input class="form-control form-control-lg" type="text" name="keyword" id="keyword"></div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Background</label><textarea placeholder="Background" name="background" id="background" class="form-control-lg"></textarea>
                                                </div>
                                               
                                                <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Implementation</label><textarea placeholder="Implementation" name="implementation" id="implementation" class="form-control-lg"></textarea>
                                                </div>
                                                 <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Result</label><textarea placeholder="Result" name="result" id="result" class="form-control-lg"></textarea>
                                                </div>
                                                 <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Conclusion</label><textarea placeholder="Conclusion" name="conclusion" id="conclusion" class="form-control-lg"></textarea>
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Methods</label><textarea placeholder="Methods" name="methods" id="methods" class="form-control-lg"></textarea>
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Requirement </label>
                                                    <textarea placeholder="Requirement" name="requirement" id="requirement" class="form-control-lg"></textarea>
                                                </div>
												 <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Authors Contribution </label>
                                                    <textarea placeholder=" Authors Contribution " name="authors_contribution" id="authors_contribution" class="form-control-lg"></textarea>
                                                </div>
												 <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Acknowledgement </label>
                                                    <textarea placeholder="Acknowledgement " name="acknowldgment" id="acknowldgment" class="form-control-lg"></textarea>
                                                </div>
												 <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Reference </label>
                                                    <textarea placeholder="Reference" name="reference" id="reference" class="form-control-lg"></textarea>
                                                </div>
                                                 <!-- <div class="col-12 col-lg-12">
                                                    <label for="message" class="required">Figures</label>
                                                    <input type="file" placeholder="Figures and Tables" name="figures" 
                                                    id="figures" class="form-control-lg">
                                                </div> -->
                                               
                                                
                                                <!-- <div class="col-12 col-lg-6"> <label for="email" class="required">Email Address</label> <input class="form-control form-control-lg" type="text" name="email" id="email"></div -->
                                                
                                    </div>
                                        </div>
                                  <div class="text-right p-t-20" style="text-align: center!important;"> 
                                        <button class="btn btn-primary btn-lg"  name="upload">
                                            <i class="icon icon-envelope-o"></i>Save</button>
                                    </div>
                                    </form>
                            
                                </div>
                            </div>
                            <!--   <div class="col-lg-4">
                                    <div class="p-t-b-20">
                                        <div class="widget widget-address">
                                            <h3>Location</h3>
                                            <div class="p-t-b-20"><strong>Address:</strong>
                                                <p>1814 NE Miami Gardens Drive, Suite #1007, North Miami Beach, FL, 33179</p> <strong>Email :</strong>
                                                <p>info@avalon.com</p> <strong>Phone:</strong>
                                                <p>00.987.1234 - 800.123.3210</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                </div>
                </section>
            </div>
    </div>
    </main>
  <?php include "footer.php";?>
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog width-400" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="text-center p-40 p-b-0"> <img src="demos/html/paper-1.8.2/assets/img/dummy/u4.png" alt="">
                            <h3>Welcome Back</h3>
                            <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting for you</p>
                        </div>
                        <div class="light p-40 b-t-b">
                            <form action="#" method="post">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i> 
                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address"></div>
                                <div class="form-group has-icon"><i class="icon-user-secret"></i> 
                                <input type="text" class="form-control form-control-lg" name="password" 
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
                                            <input type="text"  name="password" class="form-control form-control-lg" placeholder="Password"></div>
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
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script type="text/javascript">
    $("#contactform").submit(function () {
    var formData = new FormData($("#contactform")[0]);
     $.ajax({
                    type:"POST",
                    url:"add/add_ieee_content.php",
                    data:formData,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(data){
                        console.log(data);
                        if(data=="success")
                        {
                           swal("Success", "Query Submitted !", "success")
                           .then((value) => {
                        if (value) {

                           window.location.href="print_invoice.php";
                           }
                            else {
                                window.location.href="print_invoice.php";
                            }
                    });

                        }
                        else
                        {
                            //alert("Course Not Added !");
                            //window.location.href="manage_course.php";
                        }
                    
                   
                    }
                });
    return false;
  })
</script>

</html>
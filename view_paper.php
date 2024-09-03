
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
<?php //session_start();?>
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
}
?>
<?php 
if(isset($_POST['submit']))
{
  extract($_POST);             
  $add="insert into content(project_title,author_name_1,author_name_2,author_name_3,author_name_4,abstract,keyword,introduction,parposed_system,conclusion,acknowledgment,reference,review_of_related_work,figures) 
  values('$project_title','$author_name_1','$author_name_2','$author_name_3','$author_name_4','$abstract','$keyword','$introduction','$parposed_system','$conclusion','$acknowledgment','$reference','$review_of_related_work','$figures')";        
  $result=mysqli_query($connect,$add) or die(mysqli_error($connect));
  if($result)
  {
    echo "<script>";
    echo "alert('Inserted Successfully..!');";
    echo "window.location.href='ieee_format.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert('Error in insert');";
    echo "window.location.href='ieee_format.php';";
    echo "</script>";
  }
}


?>

<?php 
 $q1 = mysqli_query($connect,"SELECT * FROM registration WHERE email='$email'");
 while($all1 = mysqli_fetch_assoc($q1)){
    $id1 = $all1['id'];
 }
$asd ="SELECT * FROM content WHERE u_id ='$id1'";
$view=mysqli_query($connect,$asd) or die(mysqli_error($connect));
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" integrity="sha512-r9kUVFtJ0e+8WIL8sjTUlHGbTLwlOClXhVqGgu4sb7ILdkBvM2uI+n/Fz3FN8u3VqJX7l9HLiXqXxkx2mZpkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <header class="p-t-30">
                        <h1 class="s-28 font-weight-bolder">Hey, <small class="text-blue">there</small></h1><br>
                        <p class="s-24">Ready to download or edit your IEEE Paper.</p>
                    </header>
                </div>
            </section>
            <div class="portfolio container">
                <div class="masonry-container">
                   
                    <section class="p-t-b-50 s4 masonry-post">
                        
                    <?php 
            $count=1;
            while($fetch=mysqli_fetch_assoc($view)){ 
                    // extract($fetch);
                ?>  
                        <div class="container">
 
               <h4 style="font-weight: bold;"> <?php echo $fetch['project_title']; ?> <?php echo $fetch['date_time']; ?>
               <a href="print_details.php?id=<?php echo $fetch["id"]?>" style="color:red!important;"  target="_blank">PDF<img src="demos/html/paper-1.8.2/assets/img/pdf.png" alt="" style="height:42px;"></a>   
				   <a href="update_paper.php?u_id=<?php echo $fetch['id']; ?>"  class="btn btn-primary nav-btn" style="width:100px;">Edit</a><hr>
				   
              
                    </h4>
                        </div>
                        
            <?php } ?>
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
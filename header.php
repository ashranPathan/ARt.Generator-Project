<?php include "config.php";?>

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
        
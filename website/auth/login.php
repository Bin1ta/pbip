  <script src="../js/jquery.min.js"></script>
<?php
include_once("../classes/application_top.php");


if(isset($_POST['submit'])){
$u=$_POST['email'];
$p=md5($_POST['password']);
$res=$obj->loginChk($u,$p);
if($res){
    session_start();
    $_SESSION['username']=$res['name'];
	$_SESSION['user']=$res['username'];
 ?>
 <script>
     window.location="index.php";
 </script>
 <?php
}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login | डिभिजन बन कार्यालय, बर्दिया </title>
        <link rel="shortcut icon" href="img/logo.png" >
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
    </head>
    <body style="background-color:#d2d6de;">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                      
                        <div class="panel-body">
                            <div class="logo">
                                <img src="img/logo.png" class="img-responsive; center-block" style="width:130px;">
                            </div>
                            <h3 align="center" style="color:red;font-size:21;">डिभिजन बन कार्यालय, बर्दिया <br><span style="font-size:21px"></span></h3>

<div id="wrong" class="form-group"> <?php if(!empty($res)){?><span style="color: red; background-color: #f4c242; padding: 5px;"> <?php echo $res;} ?></span>
</div>

                           
                            <form method="POST" action="#">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="text"  autofocus required="required">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required="required">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Login</button>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>

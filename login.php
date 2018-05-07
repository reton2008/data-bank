<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <?php
        require_once'header.php';
      ?> 

</head>
<body background="data.jpg">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
					<form method="post">
					<?php
					    include "config/config.php";
						if(isset($_POST['username']) && isset($_POST['password'])){
							$username = $_POST['username'];
							$password = $_POST['password'];
							$stmt = $db->prepare("SELECT * FROM user WHERE username=? AND password=? ");
							$stmt->bindParam(1, $username);
							$stmt->bindParam(2, $password);
							$stmt->execute();
							$row= $stmt->fetch();
							$user = $row['username'];
							$name = $row['name'];
							$pass = $row['password'];
							$id = $row['id'];
							$type = $row['type'];
							  if($username==$user && $pass == $password){
							  	session_start();
							  	$_SESSION['username'] = $user ;
								$_SESSION['password'] = $pass;
								$_SESSION['name'] = $name ;
								$_SESSION['id'] = $id;
								$_SESSION['type'] = $type;
							
								?>
								<script>window.location.href='index.php'</script>
								<?php
							  }else{
							  	?><br><br>
							  	
							  	<div class="alert alert-danger">
								  <strong>Oopss!</strong> Please check your username and password.
								</div>
								<?php
							  }
						}
					?>
				
					<hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index.php" >Forget password ? </a> 
                                            </span>
                                        </div>			
									<input type="submit" class="btn btn-info" value="SIGN IN" > <div class="clear"> </div>
				
					<hr/>
				</form>
			</div>
			<!--//End-login-form-->
		
</body>
</html>


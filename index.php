<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location: ../login.php');
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
        require_once'header.php';
?>
</head>
<body>
    <div id="wrapper">
           
           <?php
            require_once'menu.php';
           ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"><?php echo $_SESSION['name']." ".$_SESSION['type']."'s";?> DASHBOARD</h1>
                        <h1 class="page-subhead-line">Today is: <?php echo date("d/m/Y");?></h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-user-plus fa-5x"></i>
                                <?php
                                            include "config/config2.php";
                                            $result = mysqli_query($link,"select Count(*) As Total from client WHERE client='buyer'");
                                            $rows = mysqli_num_rows($result);
                                            if($rows)
                                            {
                                            $rs = mysqli_fetch_assoc($result);
                                            $total = $rs["Total"];
                                            }
                                echo "<h4>".$total." Buyers</h4>";
                                ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-user-circle fa-5x"></i>
                                <?php
                                            include "config/config2.php";
                                            $result = mysqli_query($link,"select Count(*) As Total from client WHERE client='seller'");
                                            $rows = mysqli_num_rows($result);
                                            if($rows)
                                            {
                                            $rs = mysqli_fetch_assoc($result);
                                            $total = $rs["Total"];
                                            }
                                echo "<h4>".$total." Sellers</h4>";
                                ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <i class="fa fa-users fa-5x"></i>
                                <?php
                                            include "config/config2.php";
                                            $result = mysqli_query($link,"select Count(*) As Total from client");
                                            $rows = mysqli_num_rows($result);
                                            if($rows)
                                            {
                                            $rs = mysqli_fetch_assoc($result);
                                            $total = $rs["Total"];
                                            }
                                echo "<h4>Total ".$total." Clients</h4>";
                                ?>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->



            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<?php
        require_once'footer.php';
?>

</body>
</html>

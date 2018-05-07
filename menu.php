<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">
                <img src="../assets/img/data.png" class="img-circle" height="35px" width="35px"/>
                <strong>Data</strong> Bank</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="../assets/img/dev.png" class="img-bg-thumbnail" />

                            <div class="inner-text">
                               <?php echo $_SESSION['name'];?> 
                             <br>   
                               <small>  Your Access :  <strong><?php echo $_SESSION['type'];?> </strong></small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="../index.php"><i class="fa fa-list"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user "></i>User Management <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="../user/all.php"><i class="fa fa-users"></i>All User</a>
                            </li>
                            <?Php if($_SESSION['type']=="admin" || $_SESSION['type']=="editor"){?>
                            <li>
                                <a href="../user/add.php"><i class="fa fa-user-plus"></i>Add User</a>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user-md "></i>Client Management <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="../client/search.php"><i class="fa fa-search"></i>Search Clients</a>
                            </li>
                            <li>
                                <a href="../client/all.php"><i class="fa fa-users"></i>All Clients</a>
                            </li>
                            <?Php if($_SESSION['type']=="admin" || $_SESSION['type']=="editor"){?>
                            <li>
                                <a href="../client/add_client.php"><i class="fa fa-user-plus"></i>Add Client</a>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                  
                    <li>
                        <a href="../logout.php"><i class="fa fa-user-times"></i>Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
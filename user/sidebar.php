<!-- Left side column. contains the logo and sidebar -->
            
<?php
           
?>
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!--<img src=<?php //echo "images/profile/".$_SESSION['profilepicture']; ?> class="img-circle" alt="User Image" />-->
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $_SESSION['SESS_USER_NICKNAME'];?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="../">
                                <i class="fa fa-home"></i> <span>Front Page</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile.php">
                                <i class="fa fa-user"></i> <span>Profile</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Manage Users</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="register.php"><i class="fa fa-angle-double-right"></i> Register New User</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.php">
                                <i class="fa fa-info-circle"></i> <span>About</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
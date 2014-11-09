<?php
	require_once('session.php');
    sessioncheck();
    
    require_once('config.php');
    $qry="SELECT nim, email, fullname, nickname, tahun_angkatan, facebook, twitter, profile, hobby FROM database_mahasiswa_alumni WHERE user_id=".$_SESSION['SESS_USER_ID'];
	$result=mysql_query($qry);
	
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			$member = mysql_fetch_assoc($result);
			$nim=$member['nim'];
			$email=$member['email'];
			$fullname = $member['fullname'];
			$nickname = $member['nickname'];
            $tahun_angkatan = $member['tahun_angkatan'];
            $facebook = $member['facebook'];
            $twitter = $member['twitter'];
            $profile = $member['profile'];
            $hobby = $member['hobby'];
			//exit();
		}else {
		    
		}
	}else {
		die("Query failed");
	}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Staf Matematika UI | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <link href="css/customcssadmin.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php
        include_once("header.php");
        ?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            
        <?php
        include_once("sidebar.php");
        ?>
            
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Profile
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="center">
                        <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Profile</h3>
                                </div>
                                <div class="box-body">
                                    <form name="edit-profile" method="post" onsubmit="return validationForm()" enctype="multipart/form-data">
                                        <div class="form-group" id="session-key">
                                            <label class="control-label" for="inputError"><i class=""></i>Session Key:</label>
                                            <input class="form-control" type="text" placeholder="Session Key" value="<?php echo $_SESSION['SESS_KEY']; ?>" name="session-key" disabled >
                                        </div>
                                        <div class="form-group" id="email">
                                            <label class="control-label" for="inputError"> Email:</label>
                                            <input class="form-control" type="email" placeholder="Your Email" value="<?php echo $_SESSION['SESS_USER_EMAIL'];?>" name="email">
                                        </div>
                                        <div class="form-group" id="password">
                                            <label class="control-label" for="inputError"></i> Password:</label>
                                            <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password"/>
                                        </div>
                                        <div class="form-group" id="repeat-password">
                                            <label class="control-label" for="inputError"></i> Repeat Password:</label>
                                            <input type="password" class="form-control" placeholder="Repeat Password" value="" name="repeat-password"/>
                                        </div>
                                        <div class="form-group" id="fullname">
                                            <label class="control-label" for="inputError"> Full Name:</label>
                                            <input class="form-control" type="text" placeholder="Your Full Name" value="<?php echo $_SESSION['SESS_USER_FULLNAME'];?>" name="fullname">
                                        </div>
                                        <div class="form-group" id="nickname">
                                            <label class="control-label" for="inputError"> Nick Name:</label>
                                            <input class="form-control" type="text" placeholder="Your Nickname" value="<?php echo $_SESSION['SESS_USER_NICKNAME'];?>" name="nickname">
                                        </div>
                                        <div class="form-group" id="nim">
                                            <label class="control-label" for="inputError"> Nomor Induk Mahasiswa (NIM):</label>
                                            <input class="form-control" type="text" placeholder="Your NIM" value="<?php echo $nim;?>" name="nim">
                                        </div>
                                        <div class="form-group" id="angkatan">
                                            <label class="control-label" for="inputError"> Angkatan:</label>
                                            <select class="form-control" name="angkatan">
                                                <?php
                                                $angkatanArray = array();
                                                $i=0; 
                                                $currentYear=date('Y');
                                                for($thn=1945;$thn<=$currentYear;$thn++){
                                                    $angkatanArray[$i]=$thn;
                                                    $i++;
                                                }
                                                
                                                foreach($angkatanArray as $allay){
                                                    echo ($allay==$tahun_angkatan) ? "<option selected='selected' value='$allay'>$allay</option>":"<option value='$allay'>$allay</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group" id="facebook">
                                            <label class="control-label" for="inputError"> Facebook URL:</label>
                                            <input class="form-control" type="text" placeholder="Facebook" value="<?php echo $facebook;?>" name="facebook">
                                        </div>
                                        <div class="form-group" id="twitter">
                                            <label class="control-label" for="inputError"> Twitter URL:</label>
                                            <input class="form-control" type="text" placeholder="Twitter" value="<?php echo $twitter;?>" name="twitter">
                                        </div>
                                        <div class="form-group" id="hobby">
                                            <label class="control-label" for="inputError"> Hobby:</label>
                                            <input class="form-control" type="text" placeholder="Twitter" value="<?php echo $hobby;?>" name="hobby">
                                        </div>                                      
                                                                               
                                        <div class='box'>
                                            <div class="box-header">
                                                <h3 class="box-title"><b>Profil</b></h3>
                                            </div>
                                            <div class='box-body pad'>
                                                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="profil"><?php echo $profile; ?></textarea>
                                            </div>
                                        </div>
                                        Foto:
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                                        <input name="upload_foto" type="file" />
                                        <br>
                                        <input name="submitprofile" type="submit" value="Submit" class="btn btn-primary">
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                    </div><!-- /.center -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        
        <!-- page script -->
        <script src="js/profileValidation.js" type="text/javascript"></script>
        
    </body>
</html>


<?php
if(isset($_POST['submitprofile'])){
    $nim=$_POST['nim'];
    $email=$_POST['email'];
    $fullname=$_POST['fullname'];
    $nickname=$_POST['nickname'];
    $tahun_angkatan = $_POST['angkatan'];
    $password=md5($_POST['password']);
    $facebook=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $hobby=$_POST['hobby'];
    $profil=$_POST['profil'];
    //$SESSION_KEY=md5($password+$nim+$email);
    $profilepicture;
    
    //check that we have a file
    if((!empty($_FILES["upload_foto"])) && ($_FILES['upload_foto']['error'] == 0)) {
        //Check if the file is JPEG image and it's size is less than 350Kb
        $filename = basename($_FILES['upload_foto']['name']);
        $ext = substr($filename, strrpos($filename, '.') + 1);
        if ((($_FILES["upload_foto"]["type"] == "image/jpeg") || ($_FILES["upload_foto"]["type"] == "image/png") ) && ($_FILES["upload_foto"]["size"] < 350000)) {
            //Determine the path to which we want to save this file
            $filename=$_SESSION['SESS_USER_ID'];
            $newname = dirname(__FILE__).'/images/profile/'.$filename.".".$ext;
            $profilepicture=$filename.".".$ext;
            //Check if the file with the same name is already exists on the server
                if (!file_exists($newname)) {
                    //Attempt to move the uploaded file to it's new place
                    if ((move_uploaded_file($_FILES['upload_foto']['tmp_name'],$newname))) {
                        echo "<script type='text/javascript'>
                                    alert('It's done! The file has been saved as: $newname ');
                                </script>";
                    } else {
                        echo "Error: A problem occurred during file upload!";
                    }
                } else {
                    unlink($newname);
                    if ((move_uploaded_file($_FILES['upload_foto']['tmp_name'],$newname))) {
                        echo "<script type='text/javascript'>
                                    alert('It's done! The file has been saved as: $newname ');
                                </script>";
                    } else {
                        echo "Error: A problem occurred during file upload!";
                    }
                }
        } else {
            $profilepicture=$_SESSION['profilepicture'];
            echo "Error: Only .jpg images under 350Kb are accepted for upload";
        }
    } else {
        if($_SESSION['profilepicture']==""){
            $profilepicture="";
        } else {
            $profilepicture=$_SESSION['profilepicture'];
        }
    }
    
    $_SESSION['profilepicture']=$profilepicture;
    
    $qry="UPDATE database_mahasiswa_alumni SET 
                                    nim='$nim',
                                    email='$email',
                                    fullname='$fullname',
                                    nickname='$nickname',
                                    password='$password',
                                    profilepicture = '$profilepicture',
                                    tahun_angkatan='$tahun_angkatan',
                                    facebook='$facebook',
                                    twitter='$twitter',
                                    profile='$profil',
                                    hobby='$hobby'
                                    
                                    WHERE user_id=".$_SESSION['SESS_USER_ID'];
	$result=mysql_query($qry);
    
	echo '<script type="text/javascript">
                window.location = "index.php";
            </script>';
            
    //POSSIBLE EXPLOIT, NOT ADDING PASSWORD HASH TO SESSION
}
?>
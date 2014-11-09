<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Register Matematika</title>
	<link rel="stylesheet" type="text/css" href="user/css/homepage.css" />
	<link rel="stylesheet" type="text/css" href="user/css/frontpage.css" />
</head>

<body>	
	<?php include_once('header.php'); ?>
	<?php include_once('formregister.php');?>
	
	<div id="content" class="clearfix">
		<section id="left">
            <div class="box-body">
                <form name="edit-profile" method="post" onsubmit="return validationForm()" enctype="multipart/form-data">
                <input class="form-control" type="text" placeholder="Session Key" value="<?php echo $_SESSION['SESS_KEY']; ?>" name="session-key" disabled >
                <input class="form-control" type="email" placeholder="Your Email" value="<?php echo $_SESSION['SESS_USER_EMAIL'];?>" name="email">
                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password"/>
                <input type="password" class="form-control" placeholder="Repeat Password" value="" name="repeat-password"/>
                <input class="form-control" type="text" placeholder="Your Full Name" value="<?php echo $_SESSION['SESS_USER_FULLNAME'];?>" name="fullname">
                <input class="form-control" type="text" placeholder="Your Nickname" value="<?php echo $_SESSION['SESS_USER_NICKNAME'];?>" name="nickname">
                <input class="form-control" type="text" placeholder="Your NIM" value="<?php echo $nim;?>" name="nim">
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
                <input class="form-control" type="text" placeholder="Facebook" value="<?php echo $facebook;?>" name="facebook">
                <input class="form-control" type="text" placeholder="Twitter" value="<?php echo $twitter;?>" name="twitter">
                <input class="form-control" type="text" placeholder="Twitter" value="<?php echo $hobby;?>" name="hobby">
                Foto:
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                <input name="upload_foto" type="file" />
                <br>
                    <input name="submitprofile" type="submit" value="Submit" class="btn btn-primary">
                </form>
                </div>
			
		</section>
		
		<?php include_once('sidebar.php');?>
	</div>
	
	<?php include_once('footer.php');?>
</body>
</html>
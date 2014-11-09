<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Dosen dan Staf Matematika UI</title>
	<link rel="stylesheet" type="text/css" href="user/css/profile.css" />
	<link rel="stylesheet" type="text/css" href="user/css/frontpage.css" />
</head>

<body>	
	<?php include_once('header.php'); ?>
	<?php include_once('formregister.php');?>

<?php
require_once('user/config.php');

if(!isset($_GET['id']) || (trim($_GET['id']) == '')){
    header("location: index.php");
} else {
    $user_id=$_GET['id'];
    $qry="SELECT * FROM staff_members WHERE id=".$user_id;
    $result=mysql_query($qry);
    if($result) {
        while($row = mysql_fetch_assoc($result)) {
            $fullname=$row['nama'];
            $nip=$row['nip'];
            $fakultas=$row['satminkal'];
            $profilepicture=$row['file_foto'];
            $profile=$row['profile'];
            $bidang=$row['bidang_minat'];
        }

    } else {
        die("Query failed");
    }
}
?>
	
	<div id="content" class="clearfix">
		<section id="left">
			<div id="userStats" class="clearfix">
				<div class="pic">
					<a href="user/images/profile/<?php echo $profilepicture;?>" target="_blank"><img src="user/images/profile/<?php echo $profilepicture;?>" width="150" height="150" /></a>
				</div>
				
				<div class="data">
					<h1><?php echo $fullname?></h1>
					<h3><?php echo "NIP: ".$nip;?></h3>
					<!--<h4><a href="http://laycode.com/">http://laycode.com/</a></h4>-->
					<div class="sep"></div>
					<h3><?php echo $fakultas;?></h3>
					<h3><?php echo "Bidang minat: ".$bidang;?></h3>                    
					<!--<ul class="numbers clearfix">
						<li>Reputation<strong>185</strong></li>
						<li>Checkins<strong>344</strong></li>
						<li class="nobrdr">Days Out<strong>127</strong></li>
					</ul>-->
				</div>
			</div>
			
            <div>
                <h1>Profile:</h1>
                <?php echo $profile;?>
            </div>
            
		</section>
		
		<?php include_once('sidebar.php');?>
	</div>
	
	<?php include_once('footer.php');?>
</body>
</html>
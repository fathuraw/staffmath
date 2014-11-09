<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Dosen dan Staf Matematika UI</title>
	<link rel="stylesheet" type="text/css" href="user/css/homepage.css" />
	<link rel="stylesheet" type="text/css" href="user/css/frontpage.css" />
</head>

<body>	
	<?php include_once('header.php'); ?>
	<?php include_once('formregister.php');?>
	
	<div id="content" class="clearfix">
		<section id="left">
            <div id="pilih-kelompok-staf">
                Staf:
                <select class="statusStaf">
                    <option>Akademik</option>
                    <option>Non-Akademik</option>
                </select>
            </div>
		    
			<div id="userStats" class="clearfix">
                <table>
<?php
require_once('user/config.php');

$qry="SELECT * FROM staff_members;";
$result=mysql_query($qry);
if($result) {
    while($row = mysql_fetch_assoc($result)) {
        $staff_id[]=$row['id'];
        $staff_nip[]=$row['nip'];
        $fullname[]=$row['nama'];
        $profilepicture[]=$row['file_foto'];
    }
    $data_total=count($staff_id);
    $row_total=ceil($data_total/3);
    echo "Fetched ".$data_total." data successfully\n,".$row_total." row(s).";
    
    $z=0;
    for($x=0;$x<$row_total;$x++){
        echo '<tr>';
        for($y=0;$y<3;$y++){
            echo '
                        <td>
                            <div class="pic">
                                <a href="profile.php?id='.$staff_id[$z].'"><img src="user/images/profile/'.$profilepicture[$z].'" /></a>
                            </div>

                            <div class="data">
                                <h1><a href="profile.php?id='.$staff_id[$z].'">'.$fullname[$z].'</a></h1>
                                <h3>'.$staff_nip[$z].'</h3>
                                <!--<h4><a href="http://laycode.com/">http://laycode.com/</a></h4>-->
                            </div>
                        </td>
                    ';
            if($z<$data_total-1){
                $z=$z+1;
            } else {
                break;
            }
        }
        echo '</tr>';
    }
} else {
    die("Query failed");
}
?>
                   
                    
                </table>
			
			</div>
			
			<div id="page-number">
                <ul id="page-number">
                    <li class="sel"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                </ul>
            </div>
			
		</section>
		
		<?php include_once('sidebar.php');?>
	</div>
	
	<?php include_once('footer.php');?>
</body>
</html>
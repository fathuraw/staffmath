<form name="input" method="post">
    nip:<input type="text" name="nip"><br>
    fullname:<input type="text" name="fullname"><br>
    fakultas:<input type="text" name="fakultas"><br>
    departemen: <input type="text" name="departemen"><br>
    pendidikan: <input type="text" name="pendidikan"><br>
    bidang: <input type="text" name="bidang"><br>
    profil:<input type="text" name="profil"><br>
    status:<input type="text" name="status" value="1"><br>
    <input type="submit" name="submitinput">
    
    
</form>

<?php
require_once('user/config.php');
if(isset($_POST['submitinput'])){
    $nip=$_POST['nip'];
    $fullname=$_POST['fullname'];
    $fakultas=$_POST['fakultas'];
    $departemen=$_POST['departemen'];
    $pendidikan=$_POST['pendidikan'];
    $bidang=$_POST['bidang'];
    $profil=$_POST['profil'];
    $status=$_POST['status'];
    
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
            
    //POSSIBLE EXPLOIT, NOT ADDING PASSWORD HASH TO SESSION
}
?>
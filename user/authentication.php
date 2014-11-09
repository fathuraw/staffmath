<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('config.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$email = clean($_POST['email']);
	$password = md5(clean($_POST['password']));
 
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}

	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../index.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM database_mahasiswa_alumni WHERE email='$email' AND password='$password'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
            $_SESSION['SESS_USER_ID']=$member['user_id'];
			$_SESSION['SESS_NIM'] = $member['nim'];
			$_SESSION['SESS_EMAIL'] = $member['email'];
            $_SESSION['SESS_USER_FULLNAME'] = $member['fullname'];
            $_SESSION['SESS_USER_NICKNAME'] = $member['nickname'];
            $_SESSION['SESS_KEY'] = $member['session_pass'];
            $_SESSION['profilepicture'] = $member['profilepicture'];
            $_SESSION['SESS_USER_ANGKATAN'] = $member['tahun_angkatan'];
			session_write_close();
			header("location: ../");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'User name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>
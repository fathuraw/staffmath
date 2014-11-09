<?php
$base= basename($_SERVER['PHP_SELF']);
$active=array();
if($base=='profile.php'){
    $active[]=null;
    $active[1]='sel';
} else if($base=='index.php'){
    $active[]=null;
    $active[0]='sel';
}
?>
    <header>
		<div class="wrapper">
			<a href="index.php"><img src="user/images/Logo.png" alt="logo matematika UI" title="Departemen Matematika Universitas Indonesia" /></a>

<?php
    if(!isset($_SESSION['SESS_KEY']) || (trim($_SESSION['SESS_KEY']) == '')) {
        echo '<span id="usernav"><a onclick="showRegisterForm()">Register</a></span>';
    } else {
        echo '<span id="usernav"><a href="user/logout.php">Logout</a> - <a href="user/profile.php">Edit</a> - <a href="profile.php">My Profile</a></span>';
    }
?>
		</div>
	</header>
	
	<nav>
		<ul id="n" class="clearfix">
			<li class='<?php echo $active[0];?>'><a href="index.php">Homepage</a></li>
			<li class='<?php echo $active[1];?>'><a href="profile.php">Profile</a></li>
		</ul>
	</nav>
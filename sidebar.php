        <section id="right">
			<div class="gcontent">
				<div class="head"><h1>Login (DISABLED)</h1></div>
				<div class="boxy">
				
<?php
if(!isset($_SESSION['SESS_KEY']) || (trim($_SESSION['SESS_KEY']) == '')) {
    echo '
        <form method="post" name="form-login" action="user/authentication.php">
            <p>Email:<br>
            <input type="text" name="email" disabled></p>
            <p>Password:<br>
			<input type="password" name="password" disabled>
			</p>
            <input type="submit" value="Login" disabled>
		</form>';
} else {
    echo '<p align="center">Logged in as '.$_SESSION['SESS_USER_NICKNAME'].'</p>';
    echo '<p align="center">Go to <a href="user/">Control Panel</a></p>';
}

?>
				</div>
			</div>
			
		</section>
    <div id="contactdiv">
            <form class="form" action="" id="contact" name="registerform" method="post" onsubmit="return validation()">
                <img src="user/images/button_cancel.png" class="img" id="cancel"/>	
                <h3>Register Form</h3>
                <br/>
                <p>Full Name:<br/>
                <input type="text" name="name" placeholder="Full Name"/>
                <br/>
                <label>Email: <span>*</span></label>
                <br/>
                <input type="email" name="email" placeholder="Email"/>
                <br/>
                <label>Password: <span>*</span></label>
                <br/>
                <input type="password" name="password" placeholder="Password"/>
                <br/>
                <label>Repeat Password: <span>*</span></label>
                <br/>
                <input type="password" name="passwordrepeat" placeholder="Repeat your password"/>
                <br/>
                <input type="submit" id="send" name="submitregister" value="Next"/>
                <input type="button" name="cancel" value="Cancel" onclick="hideRegisterForm()"/>
                <br/></p>
            </form>
    </div>
    
<?php
if(isset($_POST['submitregister'])){
    require_once('user/config.php');
    
    $fullname=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $session_pass=md5($password);
    
    $result = mysql_query("SELECT user_id FROM database_mahasiswa_alumni WHERE email = '$email'");
    if(mysql_num_rows($result) == 0) {
        $qry="INSERT INTO database_mahasiswa_alumni (user_id,fullname,email,password,session_pass) VALUES 
                                                (NULL,'$fullname','$email','$password','$session_pass');";
        $result=mysql_query($qry);

        echo '<script type="text/javascript">
                    window.location = "user/index.php";
                </script>';
    } else {
        echo '<script type="text/javascript">
                    alert("Email already used");
                </script>'; 
    }
    
    
}
?>
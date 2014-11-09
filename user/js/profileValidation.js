            var password, repeatPassword;
            
            $password=$('input[name="password"]').val();
            $('input[name="password"]').focusout(function() {
                password = $(this).val();
                if($(this).val()==""){
                    $('#password').attr('class','form-group has-error');
                    $('#password .control-label').text(' Input your new password!').prepend("<span class='fa fa-times-circle-o'></span>");
                } else {
                    $('#password').attr('class','form-group');
                    $('#password .control-label').text(' Password:').prepend("<span class=''></span>");
                }
            });
            $('input[name="repeat-password"]').focusout(function() {
                repeatPassword = $(this).val();
                if($(this).val()==""){
                    $('#repeat-password').attr('class','form-group has-error');
                    $('#repeat-password .control-label').text(' Repeat your password!').prepend("<span class='fa fa-times-circle-o'></span>");
                } else {
                    if(($(this).val())!=($('input[name="password"]').val())){
                        $('#repeat-password').attr('class','form-group has-error');
                        $('#repeat-password .control-label').text(' Your new password and confirm password do not match.').prepend("<span class='fa fa-times-circle-o'></span>");
                    } else {
                        $('#repeat-password').attr('class','form-group');
                        $('#repeat-password .control-label').text(' Repeat Password:').prepend("<span class=''></span>");
                    }
                }
            });
            
            $('input[name="fullname"]').focusout(function() {
                password = $(this).val();
                if($(this).val()==""){
                    $('#fullname').attr('class','form-group has-error');
                    $('#fullname .control-label').text(' Input your fullname!').prepend("<span class='fa fa-times-circle-o'></span>");
                    error=true;
                } else {
                    $('#fullname').attr('class','form-group');
                    $('#fullname .control-label').text(' Full Name:').prepend("<span class=''></span>");
                    error=false;
                }
            });
            $('input[name="nickname"]').focusout(function() {
                password = $(this).val();
                if($(this).val()==""){
                    $('#nickname').attr('class','form-group has-error');
                    $('#nickname .control-label').text(' Input your nickname!').prepend("<span class='fa fa-times-circle-o'></span>");
                } else {
                    $('#nickname').attr('class','form-group');
                    $('#nickname .control-label').text(' Nick Name:').prepend("<span class=''></span>");
                }
            });
            $('input[name="nim"]').focusout(function() {
                password = $(this).val();
                if($(this).val()==""){
                    $('#nim').attr('class','form-group has-error');
                    $('#nim .control-label').text(' Input your NIM!').prepend("<span class='fa fa-times-circle-o'></span>");
                } else {
                    $('#nim').attr('class','form-group');
                    $('#nim .control-label').text(' Nomor Induk Mahasiswa (NIM):').prepend("<span class=''></span>");
                }
            });
            $('input[name="email"]').focusout(function() {
                password = $(this).val();
                if($(this).val()==""){
                    $('#email').attr('class','form-group has-error');
                    $('#email .control-label').text(' Input your Email!').prepend("<span class='fa fa-times-circle-o'></span>");
                } else {
                    $('#email').attr('class','form-group');
                    $('#email .control-label').text(' Email:').prepend("<span class=''></span>");
                }
            });
            
            function validationForm(){
                error=0;
                if ($('input[name="password"]').val()==""){
                    $('#password').attr('class','form-group has-error');
                    $('#password .control-label').text(' Input your new password!').prepend("<span class='fa fa-times-circle-o'></span>");
                    error++;
                }
                if ($('input[name="repeat-password"]').val()==""){
                    $('#repeat-password').attr('class','form-group has-error');
                    $('#repeat-password .control-label').text(' Repeat your password!').prepend("<span class='fa fa-times-circle-o'></span>");
                    error++;
                }
                if (($('input[name="repeat-password"]').val())!=($('input[name="password"]').val())){
                    $('#repeat-password').attr('class','form-group has-error');
                    $('#repeat-password .control-label').text(' Your new password and confirm password do not match.').prepend("<span class='fa fa-times-circle-o'></span>");
                    error++;
                }
                if ($('input[name="fullname"]').val()==""){
                    $('#fullname').attr('class','form-group has-error');
                    $('#fullname .control-label').text(' Input your Full Name!').prepend("<span class='fa fa-times-circle-o'></span>");
                    error++;
                }
                
                if ($('input[name="nickname"]').val()==""){
                    $('#nickname').attr('class','form-group has-error');
                    $('#nickname .control-label').text(' Input your Nick Name!').prepend("<span class='fa fa-times-circle-o'></span>");
                    error++;
                }
                if ($('input[name="nim"]').val()==""){
                    $('#nip').attr('class','form-group has-error');
                    $('#nip .control-label').text(' Input your NIM!').prepend("<span class='fa fa-times-circle-o'></span>");
                    error++;
                }
                if ($('input[name="email"]').val()==""){
                    $('#email').attr('class','form-group has-error');
                    $('#email .control-label').text(' Input your Email!').prepend("<span class='fa fa-times-circle-o'></span>");
                    error++;
                }
                
                if(error>0){
                    alert("Error(s) occurred");
                    $('html, body').animate({scrollTop : 0},800);
                    return false;
                }
            }
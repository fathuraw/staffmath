$('#pilih-kelompok-staf').click(function{
                      alert('test');
                      });

function validation() {
    
    error=0;
    if($('input[name="name"]').val()==""){
        error++;
    }
    
    if($('input[name="email"]').val()==""){
        error++;
    }
    
    if($('input[name="password"]').val()==""){
        error++;
    }
    
    if($('input[name="passwordrepeat"]').val()==""){
        error++;
    }
    
    if (($('input[name="passwordrepeat"]').val())!=($('input[name="password"]').val())){
        error++;
    }
    
    if(error>0){
        alert(error+" Error(s) occurred");
        return false;
    }
}

function hideRegisterForm(){
    $('#contactdiv').hide();
}
function showRegisterForm(){
    $('#contactdiv').show();
}

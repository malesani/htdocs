/*disabilita submit al controllo ajax*/
var userExist = false;
var mailExist = false;


function validRegistration(nome, email){
    
    var nome = document.querySelector("#nome").value;
    var email = document.querySelector("#email").value;
    // var password = document.querySelector("#password").value;
    console.log(userExist);
    console.log(mailExist);

    if(nome != "" && email != ""){
        //controllo dato unico
        if(userExist == false && mailExist == false){
            return true
        }else{
            return false
        }
    }
}


// ajax: controllo del nome unico*
$('#nome').change(function(){
    var utente = $('#nome').val();
    console.log(utente);
    
    var dati = new FormData();
    dati.append('userValidation' , utente);
    
    $.ajax({
        url:'views/modules/ajax.php',
        method: 'POST',
        data: dati,
        contentType: false,
        processData: false,
        cache: false,
        success: function(response){
            console.log("php dice: " + response);
            if(response == 0){
                userExist = true;
                $('label[for="nome"] span').html('<p>Nome utente già presente</p>');
            }else{
                userExist = false;
                $('label[for="nome"] span').html('');
            }
        }
    });
});

$('#email').change(function(){
    var mail = $('#email').val();
    console.log(mail);
    
    var dati = new FormData();
    dati.append('mailValidation' , mail);
    
    $.ajax({
        url:'views/modules/ajax.php',
        method: 'POST',
        data: dati,
        contentType: false,
        processData: false,
        cache: false,
        success: function(response){
            console.log("php dice: " + response);
            if(response == 0){
                mailExist = true;
                $('label[for="email"] span').html('<p>Email utente già presente</p>');
            }else{
                mailExist = false;
                $('label[for="email"] span').html('');
            }
        }
    });
});



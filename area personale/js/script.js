function validaRegistrazione(){

    //test cognome con lettera maiuscola

    var cognome = document.registrazione.cognome.value;
    console.log(cognome);
    var test = null
    for(var i=0; i<cognome.length; i++){
        test= cognome.charAt(i);
        console.log(test);
        if(!isNaN(test)){
            alert("Inserire solo caratteri alfabetici nel cognome");
            return false;
        }

    }

    var nome = document.registrazione.nome.value;
    console.log(nome);
    test = null
    for(var i=0; i<nome.length; i++){
        test= nome.charAt(i);
        console.log(test);
        if(!isNaN(test)){
            alert("Inserire solo caratteri alfabetici nel nome");
            return false;
        }
    }
}


function validaLogin(){
    
}

function logout(){
    // if(isset($_SESSION['nome']) ){
    //     unset($_SESSION['nome']);
    //     session_destroy();
    //     header("location: ../index.php");
    //     exit;
    //   }
    alert("ok!");
}

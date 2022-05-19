
function validaNome(){
    var nome = document.registrazione.nome.value;
    document.registrazione.nome.value = nome[0].toUpperCase()+nome.slice(1);
    if(! /^[a-zA-Z]+$/.test(nome)){
        document.registrazione.nome.style.borderColor = "red";
        document.registrazione.erroreNome.value = "Inserire un nome valido";
        document.registrazione.erroreNome.style.color = "red";
        return;
    }
    document.registrazione.nome.style.borderColor = "rgb(32, 150, 8)";
    document.registrazione.erroreNome.value = "";
}

function validaCognome(){
    var cognome = document.registrazione.cognome.value;
    document.registrazione.cognome.value = cognome[0].toUpperCase()+cognome.slice(1);
    if(! /^[a-zA-Z]+$/.test(cognome)){
        document.registrazione.cognome.style.borderColor = "red";
        document.registrazione.erroreCognome.value = "Inserire un cognome valido";
        document.registrazione.erroreCognome.style.color = "red";
        return;
    }
    document.registrazione.cognome.style.borderColor = "rgb(32, 150, 8)";
    document.registrazione.erroreCognome.value = "";
}

function validaEmail(){
    var email=document.registrazione.email.value;
    if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        document.registrazione.email.style.borderColor = "red";
        document.registrazione.erroreEmail.value = "Inserire un indirizzo email valido";
        document.registrazione.erroreEmail.style.color = "red";
        return;
    }
    document.registrazione.email.style.borderColor = "rgb(32, 150, 8)";
    document.registrazione.erroreEmail.value = "";
}

function validaData(){
    document.registrazione.datanascita.style.borderColor = "rgb(32, 150, 8)";
}

function validaPassword(){
    if(parseInt(document.registrazione.password.value.length) < 8){
        console.log("ciao");
        document.registrazione.password.style.borderColor = "red";
        document.registrazione.errorePassword.value = "Usare almeno 8 caratteri";
        document.registrazione.errorePassword.style.color = "red";
        return
    }
    document.registrazione.password.style.borderColor = "rgb(32, 150, 8)";
    document.registrazione.errorePassword.value = "";
}

function validaConfermaPassword(){
    if(document.registrazione.confermapassword.value.length < 8){
        document.registrazione.confermapassword.style.borderColor = "red";
        document.registrazione.erroreConfermaPassword.value = "Usare almeno 8 caratteri";
        document.registrazione.erroreConfermaPassword.style.color = "red";
        return
    }
    else if(document.registrazione.confermapassword.value != document.registrazione.password.value){
        document.registrazione.confermapassword.style.borderColor = "red";
        document.registrazione.erroreConfermaPassword.value = "Le due password non coincidono";
        document.registrazione.erroreConfermaPassword.style.color = "red";
        return
    }
    document.registrazione.confermapassword.style.borderColor = "rgb(32, 150, 8)";
    document.registrazione.erroreConfermaPassword.value = "";
}



function cambiaAvatar(foto){
    if(foto=="../../image/avatar/donna.jpg")
        window.location.href='../profilo/avatar/avatar.php?img=1';
    else if(foto=="../../image/avatar/uomo.jpg")
        window.location.href='../profilo/avatar/avatar.php?img=2';
    else 
        window.location.href='../profilo/avatar/avatar.php?img=3';
}


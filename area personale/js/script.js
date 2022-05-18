
function validaNome(){
    var nome = document.registrazione.nome.value;
    document.registrazione.nome.value = nome[0].toUpperCase()+nome.slice(1);
    if(! /^[a-zA-Z]+$/.test(nome)){
        document.registrazione.nome.style.borderColor = "red";
        return;
    }
    document.registrazione.nome.style.borderColor = "rgb(32, 150, 8)";
}

function validaCognome(){
    var cognome = document.registrazione.cognome.value;
    document.registrazione.cognome.value = cognome[0].toUpperCase()+cognome.slice(1);
    if(! /^[a-zA-Z]+$/.test(cognome)){
        document.registrazione.cognome.style.borderColor = "red";
        return;
    }
    document.registrazione.cognome.style.borderColor = "rgb(32, 150, 8)";
}

function validaEmail(){
    var email=document.registrazione.email.value;
    if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        document.registrazione.email.style.borderColor = "red";
        return;
    }
    document.registrazione.email.style.borderColor = "rgb(32, 150, 8)";
}

function validaData(){
    document.registrazione.datanascita.style.borderColor = "rgb(32, 150, 8)";
}

function validaPassword(){
    if(document.registrazione.password.value.length < 8){
        document.registrazione.password.style.borderColor = "red";
    }
    document.registrazione.password.style.borderColor = "rgb(32, 150, 8)";
}

function validaConfermaPassword(){
    if(document.registrazione.confermapassword.value.length < 8){
        document.registrazione.confermapassword.style.borderColor = "red";
    }
    document.registrazione.confermapassword.style.borderColor = "rgb(32, 150, 8)";
}



function cambiaAvatar(foto){
    if(foto=="../../image/avatar/donna.jpg")
        window.location.href='../profilo/avatar/avatar.php?img=1';
    else if(foto=="../../image/avatar/uomo.jpg")
        window.location.href='../profilo/avatar/avatar.php?img=2';
    else 
        window.location.href='../profilo/avatar/avatar.php?img=3';
}


function validaRegistrazione(){

    //test cognome con lettera maiuscola

    var cognome = document.registrazione.cognome.value;
    console.log(cognome);
    var test = null
    for(var i=0; i<cognome.length; i++){
        test= cognome.charAt(i);
        console.log(test);
        if(!isNaN(test) && test!=' '){
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

function cambiaAvatar(foto){
    if(foto=="../../image/avatar/donna.jpg")
        window.location.href='../profilo/avatar/avatar.php?img=1';
    else if(foto=="../../image/avatar/uomo.jpg")
        window.location.href='../profilo/avatar/avatar.php?img=2';
    else 
        window.location.href='../profilo/avatar/avatar.php?img=3';
}


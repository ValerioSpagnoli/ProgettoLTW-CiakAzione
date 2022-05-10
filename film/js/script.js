function leggiCookie(){
    nomeCookie = "cinema";
	if (document.cookie.length > 0){
		var inizio = document.cookie.indexOf(nomeCookie + "=");

		if (inizio != -1){
		    inizio = inizio + nomeCookie.length + 1;
		    var fine = document.cookie.indexOf(";",inizio);
		    if (fine == -1) fine = document.cookie.length;
		    nomeCinema = document.cookie.substring(inizio,fine);
            console.log("Film->leggiCookie: nomeCinema = " + nomeCinema)

            if(nomeCinema == "SanLorenzo"){
                document.getElementById("scelta").selectedIndex = 0;
            }
            if(nomeCinema == "Latina"){
                document.getElementById("scelta").selectedIndex = 1;
            }
            if(nomeCinema == "Cerveteri"){
                document.getElementById("scelta").selectedIndex = 2;
            }
		}
	}
}

function scriviCookie(){
    var x = document.getElementById("scelta");
    var indice = x.selectedIndex;

    var valoreSelezionato = x.options[indice];
    var valoreOpzione = valoreSelezionato.value;

    console.log("Film->scriviCookie: valoreOpzione = " + valoreOpzione);

    var scadenza = new Date();
    var adesso = new Date();
    scadenza.setTime(adesso.getTime() + (parseInt(1) * 86400000));
    document.cookie = "cinema=" + valoreOpzione + '; expires=' + scadenza.toGMTString() + '; path=/';

    window.location.reload(true);
}


function confermaPrenotazione(){
    nomeCookie = "postiDisponibili";
	if (document.cookie.length > 0){
		var inizio = document.cookie.indexOf(nomeCookie + "=");

		if (inizio != -1){
		    inizio = inizio + nomeCookie.length + 1;
		    var fine = document.cookie.indexOf(";",inizio);
		    if (fine == -1) fine = document.cookie.length;
		    postiDisponibili = document.cookie.substring(inizio,fine);
            console.log("PrenotazioneLog->confermaPrenotazione: postiDisponibili = " + postiDisponibili)
        }
    }


    var x = document.getElementById("sceltaBiglietti");
    var indice = x.selectedIndex;

    var valoreSelezionato = x.options[indice];
    var valoreOpzione = valoreSelezionato.value;
    console.log("valOp" + valoreOpzione);

    var postiRimanenti = postiDisponibili-valoreOpzione;
    console.log("postiRim" + postiRimanenti);
    var scadenza = new Date();
    var adesso = new Date();
    scadenza.setTime(adesso.getTime() + (parseInt(1) * 86400000));
    document.cookie = "postiRimanenti=" + postiRimanenti + '; expires=' + scadenza.toGMTString() + '; path=/';
    document.cookie = "postiSelezionati=" + valoreOpzione + '; expires=' + scadenza.toGMTString() + '; path=/';
}




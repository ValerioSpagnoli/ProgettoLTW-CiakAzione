function confermaPrenotazione(card){

    if(card == 'Abbonamento'){
        var x = document.getElementById("sceltaAbbonamento");
        var indice = x.selectedIndex;
    
        var valoreSelezionato = x.options[indice];
        var valoreOpzione = valoreSelezionato.value;
        console.log("offerte->confermaPrenoazione->Abbonamento->valoreOpzione = " + valoreOpzione);
    
        var scadenza = new Date();
        var adesso = new Date();
        scadenza.setTime(adesso.getTime() + (parseInt(1) * 86400000));
        document.cookie = "cinema=" + valoreOpzione + '; expires=' + scadenza.toGMTString() + '; path=/';
    }
    else if(card == 'CiakCard'){
        var x = document.getElementById("sceltaCiakCard");
        var indice = x.selectedIndex;
    
        var valoreSelezionato = x.options[indice];
        var valoreOpzione = valoreSelezionato.value;
        console.log("offerte->confermaPrenoazione->CiakCard->valoreOpzione = " + valoreOpzione);
    
        var scadenza = new Date();
        var adesso = new Date();
        scadenza.setTime(adesso.getTime() + (parseInt(1) * 86400000));
        document.cookie = "cinema=" + valoreOpzione + '; expires=' + scadenza.toGMTString() + '; path=/';
    }


}


function leggiCookie(){
    nomeCookie = "cinema";
	if (document.cookie.length > 0){
		var inizio = document.cookie.indexOf(nomeCookie + "=");

		if (inizio != -1){
		    inizio = inizio + nomeCookie.length + 1;
		    var fine = document.cookie.indexOf(";",inizio);
		    if (fine == -1) fine = document.cookie.length;
		    nomeCinema = document.cookie.substring(inizio,fine);
            console.log("Programmazinoe->leggiCookie: nomeCinema = " + nomeCinema)

            if(nomeCinema == "SanLorenzo"){
                document.getElementById("sceltaAbbonamento").selectedIndex = 0;
                document.getElementById("sceltaCiakCard").selectedIndex = 0;
            }
            if(nomeCinema == "Latina"){
                document.getElementById("sceltaAbbonamento").selectedIndex = 1;
                document.getElementById("sceltaCiakCard").selectedIndex = 1;
            }
            if(nomeCinema == "Cerveteri"){
                document.getElementById("sceltaAbbonamento").selectedIndex = 2;
                document.getElementById("sceltaCiakCard").selectedIndex = 2;
            }
		}
	}
}
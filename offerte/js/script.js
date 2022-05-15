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

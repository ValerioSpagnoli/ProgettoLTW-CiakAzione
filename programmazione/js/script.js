function leggiCookie(){
    nomeCookie = "cinema";
	if (document.cookie.length > 0){
		var inizio = document.cookie.indexOf(nomeCookie + "=");
        console.log(inizio);

		if (inizio != -1){
		    inizio = inizio + nomeCookie.length + 1;
		    var fine = document.cookie.indexOf(";",inizio);
		    if (fine == -1) fine = document.cookie.length;
		    nomeCinema = document.cookie.substring(inizio,fine);
            console.log(nomeCinema)

            if(nomeCinema == "SanLorenzo"){
                document.getElementById("scelta").selectedIndex = 1;
            }
            if(nomeCinema == "Latina"){
                document.getElementById("scelta").selectedIndex = 2;
            }
            if(nomeCinema == "Cerveteri"){
                document.getElementById("scelta").selectedIndex = 3;
            }
		}
	}
	filter();
}


function filter(){

    var x = document.getElementById("scelta");
    var indice = x.selectedIndex;

    var valoreSelezionato = x.options[indice];
    var valoreOpzione = valoreSelezionato.value;

    console.log(valoreOpzione);

    $("#sanlorenzo").hide();
    $("#cerveteri").hide();
    $("#latina").hide();
    $("#sanlorenzo-cerveteri-latina").hide();
    $("#sanlorenzo-cerveteri").hide();
    $("#sanlorenzo-latina").hide();
    $("#cerveteri-latina").hide();

    if(valoreOpzione == "SanLorenzo"){
        $("#sanlorenzo").show();
        $("#sanlorenzo-cerveteri-latina").show();
        $("#sanlorenzo-cerveteri").show();
        $("#sanlorenzo-latina").show();
        
    }
    if(valoreOpzione == "Cerveteri"){
        $("#cerveteri").show();
        $("#sanlorenzo-cerveteri-latina").show();
        $("#sanlorenzo-cerveteri").show();
        $("#cerveteri-latina").show();
    }
    if(valoreOpzione == "Latina"){
        $("#latina").show();
        $("#sanlorenzo-cerveteri-latina").show();
        $("#sanlorenzo-latina").show();
        $("#cerveteri-latina").show();
    }
    if(valoreOpzione == "Tutti i Cinema"){
        $("#sanlorenzo").show();
        $("#cerveteri").show();
        $("#latina").show();
        $("#sanlorenzo-cerveteri-latina").show();
        $("#sanlorenzo-cerveteri").show();
        $("#sanlorenzo-latina").show();
        $("#cerveteri-latina").show();
    }

}
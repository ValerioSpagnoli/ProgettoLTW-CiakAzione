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

            if(nomeCinema == "San Lorenzo"){
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


function salvaCookieSanLorenzo(){
    var scadenza = new Date();
    var adesso = new Date();
    scadenza.setTime(adesso.getTime() + (parseInt(1) * 5000));
    document.cookie = "cinema=SanLorenzo" + '; expires=' + scadenza.toGMTString() + '; path=/';
}

function salvaCookieLatina(){
    var scadenza = new Date();
    var adesso = new Date();
    scadenza.setTime(adesso.getTime() + (parseInt(1) * 5000));
    document.cookie = "cinema=Latina" + '; expires=' + scadenza.toGMTString() + '; path=/';
}

function salvaCookieCerveteri(){
    var scadenza = new Date();
    var adesso = new Date();
    scadenza.setTime(adesso.getTime() + (parseInt(1) * 5000));
    document.cookie = "cinema=Cerveteri" + '; expires=' + scadenza.toGMTString() + '; path=/';
}
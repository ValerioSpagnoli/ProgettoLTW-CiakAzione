function salvaCinema(titolo){
    var scadenza = new Date();
    var adesso = new Date();
    scadenza.setTime(adesso.getTime() + (parseInt(1) * 86400000));
    document.cookie = "cinema=" + titolo + '; expires=' + scadenza.toGMTString() + '; path=/';
}

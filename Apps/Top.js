function GoTo(loc , message = null) {
    if(message != null) {
        alert(message);
    }   
    window.location.replace(loc);
}
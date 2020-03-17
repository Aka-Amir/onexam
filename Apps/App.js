$('body').scroll(function () { 
});
function scr() {
    if(scrollY >= 40) {
        $('nav.top-menu').css('box-shadow', '5px 15px 18px rgba(0 , 0 , 0 , 0.2)');
    } else if (scrollY < 40) {
        $('nav.top-menu').css('box-shadow', '0px 0px 0px transparent');
    }
}
let tog = true;
function showMenu(el) {  
    if(tog == true) {
        $('nav.top-menu .col').css('left', '0');
        $(el).css('color', '#888');
    } else {
        $('nav.top-menu .col').css('left', '-320px');
        $(el).css('color', '#000');
    }
    tog = !tog;
}
$('#alert .close').click(function (e) { 
    e.preventDefault();
    $('#alert').css('left', '-110%');
});
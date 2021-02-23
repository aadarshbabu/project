
 
var menu = document.getElementById('icon');
var Nav=document.getElementById('nav-div');
Nav.style.right = "-250px";
menu.onclick = function () {
    if (Nav.style.right == "-250px") {
        Nav.style.right = "0px";
    }
    else {
        Nav.style.right = "-250px";
    }
}



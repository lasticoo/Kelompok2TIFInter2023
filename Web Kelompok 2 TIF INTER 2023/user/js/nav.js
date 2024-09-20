window.onscroll = function() {
    var navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        navbar.classList.add("navbar-small");
    } else {
        navbar.classList.remove("navbar-small");
    }
};
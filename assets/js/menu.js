document.querySelector(".menu-icon").addEventListener("click", function(e) {
    document.querySelector(".menu").style.display = "block";
    document.querySelector(".close-icon").style.display = "block";
}, false);

document.querySelector(".close-icon").addEventListener("click", function(e) {
    document.querySelector(".menu").style.display = "none";
    document.querySelector(".close-icon").style.display = "none";
}, false);
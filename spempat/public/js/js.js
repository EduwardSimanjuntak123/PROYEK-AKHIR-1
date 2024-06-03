const sr = ScrollReveal ({
    distance: '65px',
    duration: 2600,
    delay: 400,
    reset: true
});

sr.reveal('.scroll1', {delay:200, origin:'right'});

//ini untuk galeri
var modal = document.getElementById("modal");
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
}
var images = document.getElementsByClassName("thumbnail");
for (var i = 0; i < images.length; i++) {
    images[i].onclick = function () {
        modal.style.display = "block";
        var modalImg = document.getElementById("fullImage");
        modalImg.src = this.src;
    }
}

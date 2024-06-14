const sr = ScrollReveal({
    distance: "65px",
    duration: 2600,
    delay: 400,
    reset: true,
});

sr.reveal(".scroll", { delay: 200, origin: "right" });
const beranda = ScrollReveal({
    distance: "65px",
    duration: 2600,
    delay: 400,
    reset: true,
});

sr.reveal("hero, footer, .title1, .news, .list, .person, .show_berita,.list_berita,.visi,.misi,.sarpras,.hero_sarpras,.achievement,.activity", { delay: 200, origin: "bottom" });

//ini untuk galeri
var modal = document.getElementById("modal");
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
};
var images = document.getElementsByClassName("thumbnail");
for (var i = 0; i < images.length; i++) {
    images[i].onclick = function () {
        modal.style.display = "block";
        var modalImg = document.getElementById("fullImage");
        modalImg.src = this.src;
    };
}

const hamburger = document.querySelector("#sidebar");
const sidebar = document.querySelector("#sidebar");

// Menambah event listener untuk mouseover
hamburger.addEventListener("mouseover", function () {
    sidebar.classList.add("expand");
});

// Menambah event listener untuk mouseout
hamburger.addEventListener("mouseout", function () {
    sidebar.classList.remove("expand");
});

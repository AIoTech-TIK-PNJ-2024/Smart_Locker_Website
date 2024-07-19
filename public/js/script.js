const hamburger = document.querySelector("#hamburger-menu");
const close = document.querySelector("#close-menu");
const nav = document.querySelector("#nav-menu");
const menuItems = document.querySelectorAll("#nav-menu a");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hidden");
    nav.classList.toggle("-translate-y-full");
    close.classList.toggle("hidden");
});

close.addEventListener("click", () => {
    hamburger.classList.toggle("hidden");
    nav.classList.toggle("-translate-y-full");
    close.classList.toggle("hidden");
});

menuItems.forEach((item) => {
    item.addEventListener("click", () => {
        hamburger.classList.toggle("hidden");
        nav.classList.toggle("-translate-y-full");
        close.classList.toggle("hidden");
    });
});

// Ambil elemen alert success
let successAlert = document.getElementById("toast");
// Sembunyikan pesan sukses setelah 5 detik
if (successAlert) {
    setTimeout(function () {
        successAlert.classList.add("hidden");
    }, 3000); // 3000 milidetik = 3 detik
}

const profileBtn = document.querySelector("#profile-dropdown");
const profilSvgIcon = document.querySelector("#dropdown-icon");
const profileMenu = document.querySelector("#profile-dropdown-menu");
const humbergerBtn = document.querySelector("#hamburger-menu-admin");
const closeBtn = document.querySelector("#close-admin-button");
const adminSidebar = document.querySelector("#admin-sidebar");

profileBtn.addEventListener("click", () => {
    profilSvgIcon.classList.toggle("rotate-180");
    profileMenu.classList.toggle("hidden");
});

humbergerBtn.addEventListener("click", () => {
    adminSidebar.classList.toggle("-translate-x-full");
});

closeBtn.addEventListener("click", () => {
    adminSidebar.classList.toggle("-translate-x-full");
});

// Ambil elemen alert success
let deleteAlert = document.getElementById("toast-delete");
// Sembunyikan pesan sukses setelah 5 detik
if (deleteAlert) {
    setTimeout(function () {
        deleteAlert.classList.add("hidden");
    }, 3000); // 3000 milidetik = 3 detik
}

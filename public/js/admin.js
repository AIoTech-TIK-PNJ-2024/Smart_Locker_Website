const profileBtn = document.querySelector("#profile-dropdown");
const profilSvgIcon = document.querySelector("#dropdown-icon");
const profileMenu = document.querySelector("#profile-dropdown-menu");
const humbergerBtn = document.querySelector("#hamburger-menu-admin");
const closeBtn = document.querySelector("#close-admin-button");
const adminSidebar = document.querySelector("#admin-sidebar");

profileBtn.addEventListener("click", function () {
    profilSvgIcon.classList.toggle("rotate-180");
    profileMenu.classList.toggle("hidden");
});

humbergerBtn.addEventListener("click", function () {
    adminSidebar.classList.toggle("-translate-x-full");
});

closeBtn.addEventListener("click", function () {
    adminSidebar.classList.toggle("-translate-x-full");
});

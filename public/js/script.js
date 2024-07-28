const hamburger = document.querySelector("#hamburger-menu");
const close = document.querySelector("#close-menu");
const nav = document.querySelector("#nav-menu");
const menuItemsDesktop = document.querySelectorAll('.menu-item[id^="desktop"]');
const menuItemsMobile = document.querySelectorAll('.menu-item[id^="mobile"]');

// kode untuk menurunkan menu tampilan mobile
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hidden");
    nav.classList.toggle("-translate-y-full");
    close.classList.toggle("hidden");
});

// kode untuk menaikan menu tampilan mobile
close.addEventListener("click", () => {
    hamburger.classList.toggle("hidden");
    nav.classList.toggle("-translate-y-full");
    close.classList.toggle("hidden");
});

// Ambil elemen alert success
let successAlert = document.getElementById("toast");
// Sembunyikan pesan sukses setelah 5 detik
if (successAlert) {
    setTimeout(function () {
        successAlert.classList.add("hidden");
    }, 3000); // 3000 milidetik = 3 detik
}

// Fungsi untuk mengatur kelas aktif pada kedua tampilan
const setActiveMenu = (id) => {
    // Hapus kelas aktif dari semua item
    menuItemsDesktop.forEach((i) => i.classList.remove("active-menu"));
    menuItemsMobile.forEach((i) => i.classList.remove("active-menu"));

    // Tambahkan kelas aktif ke elemen yang sesuai
    document.getElementById(`desktop-${id}`).classList.add("active-menu");
    document.getElementById(`mobile-${id}`).classList.add("active-menu");
};

// Tambahkan event listener ke semua item menu
menuItemsDesktop.forEach((item) => {
    item.addEventListener("click", () => {
        const id = item.id.replace("desktop-", "");
        setActiveMenu(id);
    });
});

menuItemsMobile.forEach((item) => {
    item.addEventListener("click", () => {
        const id = item.id.replace("mobile-", "");
        setActiveMenu(id);
    });
});

// Setel menu "Dashboard" sebagai default aktif
setActiveMenu("dashboard");

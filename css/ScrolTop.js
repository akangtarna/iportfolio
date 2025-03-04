// Dapatkan tombol scroll to top
let scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Fungsi untuk menampilkan tombol ketika pengguna menggulir
window.onscroll = function () {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    scrollToTopBtn.classList.add("active"); // Menambahkan kelas "active" untuk menampilkan tombol
  } else {
    scrollToTopBtn.classList.remove("active"); // Menghapus kelas "active" untuk menyembunyikan tombol
  }
};

// Fungsi untuk menggulir ke atas ketika tombol diklik
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth", // Menambahkan efek scroll yang halus
  });
}

// Menambahkan event listener untuk tombol scroll to top
scrollToTopBtn.addEventListener("click", scrollToTop);

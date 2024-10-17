function updateParagraphClass() {
  const paragraph = document.getElementById("myParagraph");

  if (window.innerWidth <= 426) {
    // Jika lebar layar 785px atau lebih kecil
    paragraph.classList.remove("body-large-semibold");
    paragraph.classList.add("body-medium-size");
  } else {
    // Jika lebar layar lebih dari 785px
    paragraph.classList.remove("body-medium-size");
    paragraph.classList.add("body-large-semibold");
  }
}

// Panggil fungsi saat halaman dimuat pertama kali
window.addEventListener("load", updateParagraphClass);

// Panggil fungsi saat ukuran layar berubah
window.addEventListener("resize", updateParagraphClass);

//
// Fungsi untuk mengganti gambar berdasarkan ukuran layar
function updateImage() {
  const image = document.getElementById("responsiveImage");

  // Cek apakah ukuran layar <= 375px
  if (window.matchMedia("(max-width: 376px)").matches) {
    // Ganti gambar dengan versi mobile
    image.src = "asset/image-2.png";
  } else {
    // Kembali ke gambar desktop jika lebih dari 375px
    image.src = "asset/image-1.png";
  }
}

// Jalankan saat halaman pertama kali dimuat
updateImage();

// Deteksi perubahan ukuran layar dan jalankan lagi fungsi updateImage
window.addEventListener("resize", updateImage);

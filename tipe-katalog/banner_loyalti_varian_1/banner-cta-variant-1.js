function updateParagraphClass() {
  const paragraph = document.getElementById("myParagraph");

  if (window.innerWidth <= 768) {
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

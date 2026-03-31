****Mini Proyek Website Portfolio****

***1. Deskripsi Umum Proyek***

Website ini merupakan website portfolio pribadi yang dibuat menggunakan HTML, CSS, Bootstrap 5, dan Vue JS. Website ini menampilkan informasi profil mahasiswa, pengalaman organisasi, daftar skill, serta sertifikat yang pernah diperoleh.

Struktur website dibagi menjadi beberapa section utama, yaitu:

-Navbar

-Hero Section

-About Section

Certificates Section

Website ini menggunakan Bootstrap untuk sistem grid dan layout responsif, serta Vue JS untuk pengelolaan data dinamis pada bagian skills.

***2. Tampilan Setiap Section / Fitur***
**2.1 Navbar**



<img width="1898" height="90" alt="image" src="https://github.com/user-attachments/assets/0fcc0b08-557a-4ab2-9dbe-3532a2fbeacb" />


Penjelasan:

Navbar berada pada bagian paling atas halaman dan bersifat fixed-top sehingga tetap terlihat meskipun halaman di-scroll. Navbar berisi:

-Nama sebagai brand

-Menu navigasi (Home, About, Certificates)

Penjelasan Kode:

Navbar menggunakan komponen Bootstrap dengan class:

-navbar

-navbar-expand-lg

-fixed-top

-container

-navbar-nav

-nav-item

-nav-link

Atribut data-bs-toggle="collapse" dan data-bs-target="#navMenu" digunakan untuk membuat menu responsif pada layar kecil.

Navigasi menggunakan anchor dengan href seperti #home, #about, dan #certificates untuk berpindah ke section tertentu.

Pada bagian CSS, class .custom-navbar digunakan untuk mengatur:

-Warna background

-Padding

-Warna link

-Efek hover

**2.2 Hero Section**


<img width="1917" height="1074" alt="image" src="https://github.com/user-attachments/assets/16ce73ce-abd0-4059-836c-7680d0f53740" />


Penjelasan:

Hero section merupakan bagian utama yang menampilkan:

Nama lengkap

Status sebagai mahasiswa Sistem Informasi

Deskripsi singkat

Foto profil

Section ini dibagi menjadi dua kolom menggunakan grid Bootstrap (row dan col-md-6):

Kolom kiri berisi teks

Kolom kanan berisi gambar

Penjelasan Kode:

Struktur dibuat menggunakan:

<section id="home" class="hero-section">

container

row align-items-center

col-md-6

Gambar menggunakan tag <img> dengan class hero-image.

Pada bagian CSS:

1. hero-section mengatur background, tinggi minimal 100vh, dan alignment tengah.

2. hero-title mengatur ukuran font besar (60px) dan tebal.

3. hero-image mengatur lebar gambar maksimal dan border-radius.

**2.3 About Section**



<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/bea5d435-2e6c-44d3-a33f-73935c8a90f2" />


Penjelasan:

Section About berisi:

Deskripsi aktivitas organisasi

Daftar skill dalam bentuk progress bar

Section ini menggunakan grid Bootstrap dua kolom:

Kolom pertama berisi paragraf penjelasan.

Kolom kedua berisi daftar skills.

Penjelasan Kode:

Data skills dideklarasikan pada bagian script:

const skills = ["HTML", "CSS", "Bootstrap", "Vue JS"]

Kemudian ditampilkan menggunakan directive Vue:

v-for="(skill, index) in skills"

Directive v-for berfungsi untuk melakukan perulangan array dan menampilkan setiap skill secara otomatis.

Progress bar menggunakan komponen Bootstrap:

-progress

-progress-bar

Pada CSS:

1. custom-progress mengatur tinggi progress bar.

2. progress-bar mengatur warna bar.

**2.4 Certificates Section**



<img width="1914" height="1074" alt="image" src="https://github.com/user-attachments/assets/4191f37f-4fd2-424f-853e-179d9bf6695e" />


Penjelasan:

Section Certificates menampilkan dua sertifikat dalam bentuk card. Masing-masing card berisi:

Gambar sertifikat

Judul sertifikat

Deskripsi singkat

Penjelasan Kode:

Struktur menggunakan grid Bootstrap:

-row

-col-md-6

-mb-4

Setiap sertifikat dibungkus dalam div dengan class certificate-card.

Pada CSS:

-certificate-card menggunakan background putih.

-border-radius untuk sudut melengkung.

-box-shadow untuk efek bayangan.

-overflow hidden agar gambar tidak keluar dari card.

Gambar diatur menggunakan:

.certificate-card img {
  width: 100%;
}

Agar gambar memenuhi lebar card.

***3. Penjelasan Struktur Script Vue***

Pada bagian <script setup lang="ts">, digunakan pendekatan Composition API dari Vue 3.

Variabel:

const skills = ["HTML", "CSS", "Bootstrap", "Vue JS"]

Digunakan sebagai sumber data untuk ditampilkan pada template menggunakan v-for.

Pendekatan ini membuat kode lebih ringkas dan terstruktur.

***4. Penjelasan Styling CSS***

Bagian <style> digunakan untuk mengatur tampilan keseluruhan website.

Beberapa bagian utama:

-Global
Mengatur font menggunakan 'Segoe UI'.

-Navbar
Mengatur background warna abu-abu terang dan efek hover pada link.

-Hero Section
Mengatur tinggi minimal 100vh dan alignment tengah.

-Section Light dan Section Gray
Digunakan untuk membedakan warna latar antar section.

-Skills
Mengatur tinggi dan warna progress bar.

-Certificate Card
Mengatur tampilan card agar terlihat modern dengan bayangan dan sudut melengkung.

***5. Teknologi yang Digunakan***

Berikut teknologi yang digunakan dalam pembuatan website ini:

-HTML5
Digunakan untuk membangun struktur dasar halaman dan section.

-CSS3
Digunakan untuk styling, layout, warna, dan tampilan visual.

-Bootstrap 5
Digunakan untuk sistem grid, navbar responsif, dan progress bar.

-Vue JS 3
Digunakan untuk rendering dinamis pada bagian skills menggunakan directive v-for.

TypeScript
Digunakan pada bagian script setup untuk mendukung penulisan kode yang lebih terstruktur.

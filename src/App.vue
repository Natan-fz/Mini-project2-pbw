<template>
  <div>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
      <div class="container">
        <a class="navbar-brand fw-semibold" href="#">Dinathan Fahrezi</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#certificates">Certificates</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ================= HERO ================= -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">

          <!-- TEXT -->
          <div class="col-md-6 hero-text">
            <h1 class="hero-title">Dinathan<br>Fahrezi</h1>
            <p class="hero-subtitle">Information Systems Student</p>

            <p class="hero-description">
              Mahasiswa Sistem Informasi Universitas Mulawarman
              yang memiliki minat dalam pengembangan sistem,
              teknologi informasi, serta aktif dalam organisasi.
            </p>
          </div>

          <!-- FOTO -->
          <div class="col-md-6 text-center">
            <img 
              src="C:\AVD\PBW\minpro1\src\img\WhatsApp Image 2026-03-01 at 21.09.53.jpeg"
              alt="Profile"
              class="hero-image"
            >
          </div>

        </div>
      </div>
    </section>

    <!-- ================= ABOUT ================= -->
    <section id="about" class="section-light">
      <div class="container">
        <h2 class="section-title">About Me</h2>

        <div class="row mt-4">

          <div class="col-md-6">
            <p>
              Saya aktif dalam kepanitiaan Insevent dan
              Himpunan Mahasiswa Sistem Informasi (INFORSA)
              sebagai bentuk pengembangan soft skill,
              teamwork, dan kepemimpinan.
            </p>
          </div>

          <div class="col-md-6">
            <h6>Skills</h6>

            <div v-for="(skill, index) in skills" :key="index" class="mb-3">
              <small>{{ skill }}</small>
              <div class="progress custom-progress">
                <div class="progress-bar" style="width: 60%"></div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- ================= CERTIFICATES ================= -->
    <section id="certificates" class="section-gray">
      <div class="container">
        <h2 class="section-title">Certificates</h2>

        <div class="row mt-4">

          <div class="col-md-6 mb-4">
            <div class="certificate-card">
              <img src="C:\AVD\PBW\minpro1\src\img\WhatsApp Image 2026-03-01 at 21.09.20.jpeg" />
              <div class="p-3">
                <h6>Sertifikat 1</h6>
                <small>Sertifikat INFORSA, himpunan mahasiswa sistem informasi UNMUL.</small>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="certificate-card">
              <img src="C:\AVD\PBW\minpro1\src\img\Dinathan Fahrezi(1)_page-0001.jpg" />
              <div class="p-3">
                <h6>Sertifikat 2</h6>
                <small>Sertifikat Kepanitian INSEVENT, acara ulang tahun prodi Sistem Informasi UNMUL.</small>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </div>
</template>

<script setup lang="ts">
const skills = ["HTML", "CSS", "Bootstrap", "Vue JS"]
</script>

<style>

/* ================= GLOBAL ================= */
body {
  font-family: 'Segoe UI', sans-serif;
}

/* ================= NAVBAR ================= */
.custom-navbar {
  background: #f4f4f4;
  padding: 15px 0;
}

.custom-navbar .nav-link {
  color: #555;
  font-weight: 500;
}

.custom-navbar .nav-link:hover {
  color: #000;
}

/* ================= HERO ================= */
.hero-section {
  background: #e5e5e5;
  padding: 120px 0;
  min-height: 100vh;
  display: flex;
  align-items: center;
}

.hero-title {
  font-size: 60px;
  font-weight: 700;
  color: #2b2b2b;
  line-height: 1.1;
}

.hero-subtitle {
  font-style: italic;
  color: #666;
  margin-bottom: 20px;
}

.hero-description {
  color: #444;
  max-width: 450px;
}

.hero-image {
  width: 80%;
  max-width: 400px;
  border-radius: 10px;
}

/* ================= SECTION ================= */
.section-light {
  background: #ffffff;
  padding: 100px 0;
}

.section-gray {
  background: #f2f2f2;
  padding: 100px 0;
}

.section-title {
  font-weight: 600;
  color: #2b2b2b;
}

/* ================= SKILLS ================= */
.custom-progress {
  height: 8px;
  background: #ddd;
}

.custom-progress .progress-bar {
  background: #555;
}

/* ================= CERTIFICATE ================= */
.certificate-card {
  background: #ffffff;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.certificate-card img {
  width: 100%;
}

</style>
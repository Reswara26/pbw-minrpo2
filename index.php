<?php
// =============================================
//  index.php — Website Portfolio Reswara
//  Skills diambil dari database MySQL
// =============================================

require_once 'koneksi.php';

// Ambil data skills dari database
$query  = mysqli_query($koneksi, "SELECT * FROM skills ORDER BY id ASC");
$skills = [];
while ($row = mysqli_fetch_assoc($query)) {
    $skills[] = $row;
}

mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reswara Ganendra — Portfolio</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,600;1,9..40,300&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <div id="app">

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
      <div class="container-fluid px-4 px-lg-5">

        <div class="nav-logo">RG<span class="accent">.</span></div>

        <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="filter:invert(1);"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav mx-auto gap-lg-4">
            <li class="nav-item"><a class="nav-link custom-nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link custom-nav-link" href="#about">About Me</a></li>
            <li class="nav-item"><a class="nav-link custom-nav-link" href="#certificates">Certificates</a></li>
          </ul>
          <div class="ms-lg-3 mt-3 mt-lg-0">
            <a href="#certificates" class="btn btn-warning fw-bold text-dark">View Work ↗</a>
          </div>
        </div>

      </div>
    </nav>

    <!-- ========== SECTION 1: HOME ========== -->
    <section id="home" class="hero">
      <div class="hero-bg-text">PORTFOLIO</div>

      <div class="container-fluid px-4 px-lg-5">
        <div class="row align-items-center hero-row g-5">

          <div class="col-12 col-lg-7">
            <p class="hero-greeting">Hello, my name is</p>
            <h1 class="hero-name">
              Reswara<br />
              Ganendra<br />
              <span class="accent">Rashi Dewa</span>
            </h1>
            <p class="hero-sub">
              Mahasiswa Sistem Informasi<br />
              Fakultas Teknik Universitas Mulawarman<br />
              Angkatan 2024
            </p>
            <div class="d-flex flex-wrap gap-2 mt-3">
              <span class="custom-badge">Web Dev</span>
              <span class="custom-badge">Database</span>
              <span class="custom-badge">UI/UX</span>
            </div>
          </div>

          <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-end">
            <div class="hero-photo-wrap">
              <div class="photo-frame">
                <img src="images/dewa.jpeg" alt="Foto Reswara Ganendra" class="profile-img" />
                <div class="photo-placeholder">
                  <div class="placeholder-icon">👤</div>
                  <p>Foto tidak ditemukan.</p>
                </div>
              </div>
              <div class="photo-deco deco-1"></div>
              <div class="photo-deco deco-2"></div>
            </div>
          </div>

        </div>
      </div>

      <div class="scroll-indicator">
        <span>Scroll</span>
        <div class="scroll-line"></div>
      </div>
    </section>

    <!-- ========== SECTION 2: ABOUT ME ========== -->
    <section id="about" class="about">
      <div class="container-fluid px-4 px-lg-5">

        <div class="section-label">02 — About Me</div>

        <div class="row g-5 mt-1">

          <!-- Kiri: Deskripsi + Pengalaman -->
          <div class="col-12 col-lg-6">
            <h2 class="section-title">Who Am <span class="accent">I?</span></h2>

            <p class="about-desc">
              Saya adalah mahasiswa Sistem Informasi Fakultas Teknik Universitas Mulawarman angkatan 2024 dengan minat besar pada pengembangan web dan database. Saya terbiasa bekerja menggunakan HTML, CSS, dan JavaScript, serta memahami cara membangun dan mengelola sistem dengan MySQL.
            </p>
            <p class="about-desc">
              Di luar kegiatan akademik, saya aktif berorganisasi. Saya pernah menjadi penanggung jawab di Rohani Islam (ROHIS) dan anggota Departemen Entrepreneurship Development di Information System Association (INFORSA). Peran tersebut mendorong saya untuk terus berkembang sekaligus berkontribusi nyata dalam mendukung pengembangan kemampuan rekan-rekan di organisasi.
            </p>

            <div class="d-flex flex-column gap-3 mt-4">
              <div class="exp-card d-flex align-items-start gap-3 p-3">
                <div class="exp-icon">🕌</div>
                <div>
                  <div class="exp-title">Penanggung Jawab</div>
                  <div class="exp-org">ROHIS — Rohani Islam</div>
                </div>
              </div>
              <div class="exp-card d-flex align-items-start gap-3 p-3">
                <div class="exp-icon">💼</div>
                <div>
                  <div class="exp-title">Anggota Dept. Entrepreneurship</div>
                  <div class="exp-org">INFORSA — Information System Association</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Kanan: Skills dari DATABASE -->
          <div class="col-12 col-lg-6">
            <h3 class="skills-title">Skills</h3>
            <div class="d-flex flex-column gap-4">

              <?php foreach ($skills as $skill): ?>
              <div class="skill-item">
                <div class="skill-header d-flex justify-content-between mb-2">
                  <span><?= htmlspecialchars($skill['nama']) ?></span>
                  <span class="skill-pct"><?= (int)$skill['persen'] ?>%</span>
                </div>
                <div class="progress custom-progress" style="height:6px;">
                  <div class="progress-bar custom-progress-bar"
                       role="progressbar"
                       style="width: <?= (int)$skill['persen'] ?>%;"
                       aria-valuenow="<?= (int)$skill['persen'] ?>"
                       aria-valuemin="0"
                       aria-valuemax="100">
                  </div>
                </div>
              </div>
              <?php endforeach; ?>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== SECTION 3: CERTIFICATES ========== -->
    <section id="certificates" class="certificates">
      <div class="container-fluid px-4 px-lg-5">

        <div class="section-label">03 — Certificates</div>
        <h2 class="section-title">My <span class="accent">Certificates</span></h2>
        <p class="cert-intro">Kumpulan sertifikat yang telah saya raih selama perjalanan belajar.</p>

        <div class="row g-4">

          <div class="col-12 col-md-6 col-lg-4">
            <div class="cert-card h-100">
              <div class="cert-img-wrap">
                <img src="images/sertif_1.png" alt="Sertifikat 1" class="cert-img" />
                <div class="cert-img-placeholder">📜 Sertifikat 1</div>
              </div>
              <div class="cert-info p-3">
                <span class="cert-tag">Certificate</span>
                <h4 class="cert-title mt-2">Surat Kepengurusan INFORSA</h4>
                <p class="cert-issuer">Tercatat sebagai Anggota Biro Entrepreneurship Development pada kepengurusan INFORSA Fakultas Teknik Universitas Mulawarman periode 19 Februari–31 Desember 2025.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="cert-card h-100">
              <div class="cert-img-wrap">
                <img src="images/sertif_2.png" alt="Sertifikat 2" class="cert-img" />
                <div class="cert-img-placeholder">📜 Sertifikat 2</div>
              </div>
              <div class="cert-info p-3">
                <span class="cert-tag">Certificate</span>
                <h4 class="cert-title mt-2">Surat Anggota Divisi Perlengkapan &amp; Konsumsi - UPGRADING</h4>
                <p class="cert-issuer">Tercatat sebagai Anggota Tim Perlengkapan dalam kegiatan Upgrading Kepengurusan Kabinet Cakrawira Fakultas Teknik Universitas Mulawarman tahun 2025.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="cert-card h-100">
              <div class="cert-img-wrap">
                <img src="images/Sertif_3.png" alt="Sertifikat 3" class="cert-img" />
                <div class="cert-img-placeholder">📜 Sertifikat 3</div>
              </div>
              <div class="cert-info p-3">
                <span class="cert-tag">Certificate</span>
                <h4 class="cert-title mt-2">Surat Anggota Divisi Konsumsi - MAKRAB</h4>
                <p class="cert-issuer">Tercatat sebagai Anggota Tim Konsumsi pada kegiatan TAROT 24 yang diselenggarakan oleh INFORSA Fakultas Teknik Universitas Mulawarman pada 13 Desember 2024.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="footer">
      <div class="text-center footer-top">
        <div class="footer-logo">RG<span class="accent">.</span></div>
        <p>Reswara Ganendra Rashi Dewa — Sistem Informasi 2024</p>
      </div>
      <div class="footer-divider my-3"></div>
      <p class="footer-copy text-center">© 2025 Reswara Ganendra. All rights reserved.</p>
    </footer>

  </div><!-- End #app -->

  <!-- Bootstrap 5 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

  <!-- Vue 3 CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.4.21/vue.global.prod.min.js"></script>
  <script>
    const { createApp } = Vue;
    createApp({}).mount('#app');
  </script>

</body>
</html>

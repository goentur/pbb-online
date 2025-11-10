<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>PBB Online</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link
    href="assets/vendor/bootstrap/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link
    href="assets/vendor/glightbox/css/glightbox.min.css"
    rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div
      class="container position-relative d-flex align-items-center justify-content-between">
      <a
        href="index.html"
        class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">PBB Online</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#beranda" class="active">Beranda</a></li>
          <li><a href="#tentang-kami">Tentang Kami</a></li>
          <li><a href="#pelayanan">Pelayanan</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#testimoni">Testimoni</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div>
        <a class="btn-getstarted" href="{{ route('login') }}">Masuk</a>
        @if ($canRegister)
        <a class="btn-getstarted" href="{{ route('register') }}">Daftar</a>
        @endif
      </div>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="beranda" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div
                class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                <div class="icon-circle me-2">
                  <i class="bi bi-bell"></i>
                </div>
                <span class="badge-text me-3">Solusi pelayanan yang lebih baik & cepat</span>
              </div>
            </div>

            <h1 class="hero-title mb-4">PBB Online</h1>

            <p class="hero-description mb-4">
              Halo, warga Pekalongan! 😊
              <br />Kini, semua layanan PBB-P2 bisa kamu akses secara
              online—praktis, aman, dan tanpa perlu repot ke kantor Badan
              Pendapatan Daerah (BPKAD) Kota Pekalongan.
            </p>

            <div class="cta-wrapper">
              <a href="#about" class="btn btn-primary">Lihat lebih detail</a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image">
              <img
                src="assets/img/illustration.png"
                alt="Business Growth"
                class="img-fluid"
                loading="lazy" />
            </div>
          </div>
        </div>

        <div class="row feature-boxes">
          <div
            class="col-lg-4 mb-4 mb-lg-0"
            data-aos="fade-up"
            data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-phone"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Praktis & Tanpa Ribet</h3>
                <p class="feature-text">
                  Tidak perlu datang ke kantor, antri, atau bawa dokumen fisik. Cukup dari rumah, pakai HP atau laptop — semua urusan PBB bisa diselesaikan dalam hitungan menit.
                </p>
              </div>
            </div>
          </div>

          <div
            class="col-lg-4 mb-4 mb-lg-0"
            data-aos="fade-up"
            data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-lock"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Aman & Terpercaya</h3>
                <p class="feature-text">
                  Data pribadi dan transaksi kamu dilindungi dengan sistem resmi dari Badan Pendapatan Daerah (BPKAD) Kota Pekalongan. Tidak ada penipuan, tidak ada biaya tersembunyi.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-headset"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Dukungan Langsung dari Kami</h3>
                <p class="feature-text">
                  Butuh bantuan? Tim kami siap membantu via chat, telepon, atau kunjungan langsung ke kantor. Kami di sini untuk memastikan kamu tidak kesulitan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="tentang-kami" class="about section">
      <div class="container">
        <div class="row gy-4">
          <div
            class="col-lg-6 content"
            data-aos="fade-up"
            data-aos-delay="100">
            <p class="who-we-are">TENTANG</p>
            <h3>
              Mewujudkan Pelayanan Pajak yang Lebih Mudah, Cepat, dan
              Transparan
            </h3>
            <p class="fst-italic">
              Di sini, kami hadir untuk mempermudahmu dalam menyelesaikan
              semua urusan Pajak Bumi dan Bangunan (PBB-P2) secara online — tanpa ribet, dan bisa dari mana saja. Layanan ini
              dikelola oleh Badan Pendapatan Daerah (BPKAD) Kota Pekalongan,
              sebagai bagian dari komitmen kami untuk memberikan pelayanan
              publik yang modern, responsif, dan berorientasi pada warga.
            </p>
            <ul>
              <li>
                <i class="bi bi-check-circle"></i>
                <span>💡 Proses lebih cepat —> cek tagihan, atau ajukan permohonan hanya dalam beberapa klik.</span>
              </li>
              <li>
                <i class="bi bi-check-circle"></i>
                <span>📱 Akses 24/7 —> dari rumah, kantor, atau saat sedangbepergian.</span>
              </li>
              <li>
                <i class="bi bi-check-circle"></i>
                <span>🔐 Aman & terpercaya —> sistem resmi dari Pemerintah Kota
                  Pekalongan.</span>
              </li>
              <li>
                <i class="bi bi-check-circle"></i>
                <span>🤝 Dibuat khusus untuk warga Kota Pekalongan —> jadi pasti sesuai
                  kebutuhanmu!
                </span>
              </li>
            </ul>
            <a href="#services" class="read-more"><span>Layanan kami</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div
            class="col-lg-6 about-images"
            data-aos="fade-up"
            data-aos-delay="200">
            <img
              src="assets/img/about.png"
              class="img-fluid"
              alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- /About Section -->

    <!-- Services Section -->
    <section id="pelayanan" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pelayanan</h2>
        <p>
          Semua layanan PBB-P2 Kota Pekalongan kini bisa diakses secara online — praktis, aman, dan tanpa perlu repot ke kantor.
        </p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center g-5">
          <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <div class="service-content">
                <h3>Custom Web Development</h3>
                <p>
                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                  sem. Nulla quis lorem ut libero malesuada feugiat. Curabitur
                  non nulla sit amet nisl tempus convallis. Lorem ipsum dolor
                  sit amet, consectetur adipiscing elit.
                </p>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-file-earmark-pdf text-color-primary me-2"></i> DAFTAR PERSYARATAN BERKAS
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <ul class="list-unstyled mb-0">
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Nomor Objek Pajak (NOP)
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Fotokopi KTP pemilik
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Fotokopi bukti pembayaran terakhir
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Formulir permohonan (diisi online)
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            NPWP (jika ada)
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Surat kuasa (jika diwakilkan)
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="bi bi-alarm text-color-primary me-2"></i> ESTIMASI LAMA WAKTUNYA PELAYANAN
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">3 HARI KERJA</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-phone-fill"></i>
              </div>
              <div class="service-content">
                <h3>Ajukan Surat Keterangan Lunas</h3>
                <p>Butuh surat keterangan lunas untuk jual beli atau pinjaman? Ajukan online — kami proses cepat!</p>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse21" aria-expanded="false" aria-controls="flush-collapse21">
                        <i class="bi bi-file-earmark-pdf text-color-primary me-2"></i> DAFTAR PERSYARATAN BERKAS
                      </button>
                    </h2>
                    <div id="flush-collapse21" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <ul class="list-unstyled mb-0">
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Nomor Objek Pajak (NOP)
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Fotokopi KTP pemilik
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Fotokopi bukti pembayaran terakhir
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Formulir permohonan (diisi online)
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            NPWP (jika ada)
                          </li>
                          <li class="d-flex align-items-start mb-1">
                            <i class="bi bi-check-circle-fill text-color-primary me-2"></i>
                            Surat kuasa (jika diwakilkan)
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse22" aria-expanded="false" aria-controls="flush-collapse22">
                        <i class="bi bi-alarm text-color-primary me-2"></i> ESTIMASI LAMA WAKTUNYA PELAYANAN
                      </button>
                    </h2>
                    <div id="flush-collapse22" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">3 HARI KERJA</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-palette2"></i>
              </div>
              <div class="service-content">
                <h3>UI/UX Design</h3>
                <p>
                  Pellentesque in ipsum id orci porta dapibus. Proin eget
                  tortor risus. Vivamus suscipit tortor eget felis porttitor
                  volutpat. Vestibulum ac diam sit amet quam vehicula
                  elementum sed sit amet dui.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-bar-chart-line"></i>
              </div>
              <div class="service-content">
                <h3>Digital Marketing</h3>
                <p>
                  Donec rutrum congue leo eget malesuada. Mauris blandit
                  aliquet elit, eget tincidunt nibh pulvinar a. Nulla
                  porttitor accumsan tincidunt. Curabitur aliquet quam id dui
                  posuere blandit.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-cloud-check"></i>
              </div>
              <div class="service-content">
                <h3>Cloud Computing</h3>
                <p>
                  Curabitur aliquet quam id dui posuere blandit. Sed porttitor
                  lectus nibh. Vivamus magna justo, lacinia eget consectetur
                  sed, convallis at tellus. Nulla quis lorem ut libero
                  malesuada feugiat.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
              <div class="service-content">
                <h3>Cybersecurity Solutions</h3>
                <p>
                  Vestibulum ac diam sit amet quam vehicula elementum sed sit
                  amet dui. Donec sollicitudin molestie malesuada. Curabitur
                  arcu erat, accumsan id imperdiet et. Proin eget tortor
                  risus.
                </p>
              </div>
              <div class="faq">
                <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                  <div class="faq-header">
                    <h3>Sed porttitor lectus nibh ullamcorper sit amet?</h3>
                    <i class="bi bi-chevron-down faq-toggle"></i>
                  </div>
                  <div class="faq-content">
                    <p>
                      Curabitur non nulla sit amet nisl tempus convallis quis ac
                      lectus. Praesent sapien massa, convallis a pellentesque
                      nec, egestas non nisi. Donec sollicitudin molestie
                      malesuada. Vestibulum ac diam sit amet quam vehicula
                      elementum.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Service Item -->
        </div>
      </div>
    </section>
    <!-- /Services Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="faq-contact-card">
              <div class="card-icon">
                <i class="bi bi-question-circle"></i>
              </div>
              <div class="card-content">
                <h3>Still Have Questions?</h3>
                <p>
                  Vestibulum ante ipsum primis in faucibus orci luctus et
                  ultrices posuere cubilia Curae; Donec velit neque, auctor
                  sit amet aliquam vel, ullamcorper sit amet ligula.
                  Vestibulum ac diam sit amet quam vehicula elementum.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-accordion">
              <div class="faq-item faq-active">
                <div class="faq-header">
                  <h3>
                    Vivamus suscipit tortor eget felis porttitor volutpat?
                  </h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Nulla quis lorem ut libero malesuada feugiat. Vestibulum
                    ac diam sit amet quam vehicula elementum sed sit amet dui.
                    Curabitur aliquet quam id dui posuere blandit. Nulla
                    porttitor accumsan tincidunt.
                  </p>
                </div>
              </div>
              <!-- End FAQ Item-->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="faq-header">
                  <h3>Curabitur aliquet quam id dui posuere blandit?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et
                    ultrices posuere cubilia Curae; Donec velit neque, auctor
                    sit amet aliquam vel, ullamcorper sit amet ligula. Proin
                    eget tortor risus. Mauris blandit aliquet elit, eget
                    tincidunt nibh pulvinar.
                  </p>
                </div>
              </div>
              <!-- End FAQ Item-->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="faq-header">
                  <h3>Sed porttitor lectus nibh ullamcorper sit amet?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Curabitur non nulla sit amet nisl tempus convallis quis ac
                    lectus. Praesent sapien massa, convallis a pellentesque
                    nec, egestas non nisi. Donec sollicitudin molestie
                    malesuada. Vestibulum ac diam sit amet quam vehicula
                    elementum.
                  </p>
                </div>
              </div>
              <!-- End FAQ Item-->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="faq-header">
                  <h3>Nulla quis lorem ut libero malesuada feugiat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Donec sollicitudin molestie malesuada. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim. Vestibulum ante
                    ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Donec velit neque, auctor sit amet aliquam
                    vel.
                  </p>
                </div>
              </div>
              <!-- End FAQ Item-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimoni" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>
          Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
          consectetur velit
        </p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
                    dapibus leo. Sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img
                      src="assets/img/person/person-m-8.webp"
                      alt="Profile Image" />
                    <div>
                      <h3>Robert Johnson</h3>
                      <h4>Marketing Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec
                    porttitora entum suscipit rhoncus. Accusantium quam,
                    ultricies eget id, aliquam eget nibh et maecenas aliquam.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img
                      src="assets/img/person/person-f-3.webp"
                      alt="Profile Image" />
                    <div>
                      <h3>Lisa Williams</h3>
                      <h4>Product Manager</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Enim nisi quem export duis labore cillum quae magna enim
                    sint quorum nulla quem veniam duis minim tempor labore
                    quem eram duis noster aute amet eram.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img
                      src="assets/img/person/person-f-10.webp"
                      alt="Profile Image" />
                    <div>
                      <h3>Emma Parker</h3>
                      <h4>UX Designer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                    multos export minim fugiat minim velit minim dolor enim
                    duis veniam ipsum anim magna sunt elit.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img
                      src="assets/img/person/person-m-5.webp"
                      alt="Profile Image" />
                    <div>
                      <h3>David Miller</h3>
                      <h4>Senior Developer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure
                    aliqua veniam tempor noster veniam enim culpa labore duis
                    sunt culpa nulla illum cillum fugiat.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img
                      src="assets/img/person/person-m-2.webp"
                      alt="Profile Image" />
                    <div>
                      <h3>Michael Davis</h3>
                      <h4>CEO &amp; Founder</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Eius ipsam praesentium dolor quaerat inventore rerum odio.
                    Quos laudantium adipisci eius. Accusamus qui iste
                    cupiditate sed temporibus est aspernatur.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img
                      src="assets/img/person/person-f-7.webp"
                      alt="Profile Image" />
                    <div>
                      <h3>Sarah Thompson</h3>
                      <h4>Art Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- /Testimonials Section -->
  </main>

  <footer id="kontak" class="footer light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a
            href="index.html"
            class="logo d-flex align-items-center text-color-primary">
            <span class="sitename">PBB Online</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Sriwijaya No.44, Podosugih, Kec. Pekalongan Barat</p>
            <p>Kota Pekalongan, Jawa Tengah</p>
            <table>
              <tr>
                <td>Phone</td>
                <td>:</td>
                <td class="fw-bold">XXXXXXXX</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td class="fw-bold">bkd.pklkota@gmail.com</td>
              </tr>
            </table>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan pajak</h4>
          <ul>
            <li><a href="javascript:void()">BPHTB Online</a></li>
            <li><a href="javascript:void()">eSPT Pajak Daerah</a></li>
            <li><a href="javascript:void()">PBB Online</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan selain pajak</h4>
          <ul>
            <li><a href="javascript:void()">Retribusi Daerah</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Instansi</h4>
          <ul>
            <li>
              <a href="javascript:void()">Pemerintah Kota Pekalongan</a>
            </li>
            <li><a href="javascript:void()">BPKAD Kota Pekalongan</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>
        &copy; <span>Copyright</span>
        <strong class="px-1 sitename">BPKAD Kota Pekalongan</strong>
        <span>All Rights Reserved</span>
      </p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a
    href="#"
    javascript:void()id="scroll-top"
    class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
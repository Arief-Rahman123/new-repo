<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengaduan Masyarakat Desa Bitung Sari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<link href="https://1.bp.blogspot.com/-Xn7VMGZ4NdY/YFbueoH64aI/AAAAAAAACDM/QyeEX2uzD1U_C5CSC-FjmMymLZe4axKjQCNcBGAsYHQ/s2048/Kabupaten%2BBogor.png" rel="icon">
<link href="assetsniceadmin/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assetsniceadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assetsniceadmin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assetsniceadmin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assetsniceadmin/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="assetsniceadmin/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="assetsniceadmin/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assetsniceadmin/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assetsniceadmin/css/style.css" rel="stylesheet">

<!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="https://bogorkab.go.id/post/detail/sejarah-kabupaten-bogor" class="logo d-flex align-items-center">
        <img src="https://1.bp.blogspot.com/-Xn7VMGZ4NdY/YFbueoH64aI/AAAAAAAACDM/QyeEX2uzD1U_C5CSC-FjmMymLZe4axKjQCNcBGAsYHQ/s2048/Kabupaten%2BBogor.png" width="35" height="60" alt="">
        <span class="d-none d-lg-block">PEBITSI</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          {{-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assetsniceadmin/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon --> --}}
          <a href="{{route('login')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Login</a>
          <a href="{{route('register')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Register</a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->


      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pengaduan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('login')}}">Login</a></li>
          <li class="breadcrumb-item"><a href="{{route('register')}}">Register</a></li>
          {{-- <li class="breadcrumb-item active">Accordion</li> --}}
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tata Cara Membuat Laporan</h5>

              <!-- Default Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      #1
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h6 class="text-muted text-center font-bold">Buat Laporan</h6>
                      <h6 class="font-semibold text-center mb-0">Laporkan keluhan atau aspirasi anda dengan
                        jelas dan lengkap</h6>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      #2
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h6 class="text-muted text-center font-bold">Proses Verifikasi</h6>
                      <h6 class="font-semibold text-center mb-0">Laporan Anda akan diverifikasi & diteruskan
                        kepada petugas</h6>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      #3
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h6 class="text-muted text-center font-bold">Tindak Lanjut</h6>
                      <h6 class="font-semibold text-center mb-0">Pihak desa akan menindaklanjuti dan membalas
                        laporan Anda</h6>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      #4
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h6 class="text-muted text-center xfont-bold">Selesai</h6>
                      <h6 class="font-semibold text-center mb-0">Laporan Anda akan terus ditindaklanjuti
                        hingga terselesaikan</h6>
                    </div>
                  </div>
                </div>
              </div><!-- End Default Accordion Example -->

            </div>
          </div>

        </div>

      </div>
    </section>
    <div class="col-6 col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body px-4 py-4-5">
          <div class="row">
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted text-center font-bold">Laporan Pending :</h6>
              <h6 class="font-semibold text-center mb-0"></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="col-6 col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body px-4 py-4-5">
            <div class="row">
              <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                <h6 class="text-muted text-center font-bold">Jumlah Laporan :</h6>
                <h6 class="font-semibold text-center mb-0">2</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="col-6 col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body px-4 py-4-5">
            <div class="row">
              <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                <h6 class="text-muted text-center font-bold">Laporan Selesai :</h6>
                <h6 class="font-semibold text-center mb-0">2</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="col-6 col-lg-6 col-md-6">
        <div class="card">
          <div class="card-body px-4 py-4-5">
            <div class="row">
              <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                <h6 class="text-muted text-center font-bold">Seluruh Laporan Pengaduan :</h6>
                <h6 class="font-semibold text-center mb-0">2</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Arief</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetsniceadmin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assetsniceadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetsniceadmin/vendor/chart.js/chart.umd.js"></script>
  <script src="assetsniceadmin/vendor/echarts/echarts.min.js"></script>
  <script src="assetsniceadmin/vendor/quill/quill.min.js"></script>
  <script src="assetsniceadmin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assetsniceadmin/vendor/tinymce/tinymce.min.js"></script>
  <script src="assetsniceadmin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assetsniceadmin/js/main.js"></script>

</body>

</html> -->
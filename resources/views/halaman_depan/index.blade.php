<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bank Riau Kepri Syariah</title>
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="{{ asset('halaman_auth/images/icons/faviconv.ico') }}"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('halaman_depan/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">BRKSyariah</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" 
                                href="#portfolio">Produk & Layanan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" 
                                href="#about">Visi&Misi </a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" 
                                href="{{ route('auth') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            /* Animasi untuk avatar */
            .masthead-avatar {
              transition: transform 0.3s ease-in-out;
            }
            .masthead-avatar:hover {
              transform: scale(1.1);
            }
          
            /* Animasi untuk judul */
            .masthead-heading {
              transition: color 0.3s ease-in-out;
            }
            .masthead-heading:hover {
              color: #ffc107; /* Ubah warna saat dihover */
            }
          
            /* Animasi untuk pembatas ikon */
            .divider-custom-icon {
              transition: transform 0.3s ease-in-out;
            }
            .divider-custom-icon:hover {
              transform: rotate(180deg); /* Putar ikon saat dihover */
            }
          
            /* Animasi untuk subjudul */
            .masthead-subheading {
              transition: font-size 0.3s ease-in-out;
            }
            .masthead-subheading:hover {
              font-size: 1.1em; /* Perbesar ukuran font saat dihover */
            }
          </style>
          
          <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">   
              <!-- Masthead Avatar Image-->
              <img class="masthead-avatar mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/logovbrk.png') }}" alt="Avatar" />
              <!-- Masthead Heading-->
              <h1 class="masthead-heading text-uppercase mb-0">Selamat datang</h1>
              <!-- Icon Divider-->
              <div class="divider-custom divider-light">
                <div class="divider-custom-line bg-warning"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line bg-danger"></div>
              </div>
              <!-- Masthead Subheading--> 
              <p class="masthead-subheading font-weight-light mb-0">BANK RIAU KEPRI SYARIAH</p>
            </div>
          </header>
          
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Produk dan Layanan</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <style>
                .rotate-on-hover {
                    transition: transform 0.3s ease-in-out;
                }
                
                .rotate-on-hover:hover {
                    transform: rotate(45deg);
                }
            </style>
                <section class="page-section" id="portfolio">
                    <div class="container">
                        <!-- Portfolio Grid Items-->
                        <div class="row justify-content-center" id="portfolioItems">
                            <!-- Portfolio Item 1-->
                            <div class="col-md-6 col-lg-4 mb-5">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid zoom-on-hover" src="halaman_depan/assets/img/portfolio/Produk_Giro_Valas_BRK_Syariah.png" alt="Produk Giro Valas BRK Syariah" />
                                </div>
                            </div>
                            <!-- Portfolio Item 2-->
                            <div class="col-md-6 col-lg-4 mb-5">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid zoom-on-hover" src="halaman_depan/assets/img/portfolio/Pembiayaan_Investasi1.png" alt="Pembiayaan Investasi 1" />
                                </div>
                            </div>
                            <!-- Portfolio Item 3-->
                            <div class="col-md-6 col-lg-4 mb-5">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid zoom-on-hover" src="halaman_depan/assets/img/portfolio/DHUHA_FLEXI.png" alt="DHUHA FLEXI" />
                                </div>
                            </div>
                            <!-- Portfolio Item 4-->
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid zoom-on-hover" src="halaman_depan/assets/img/portfolio/SINAR_DELIMA1.png" alt="SINAR DELIMA 1" />
                                </div>
                            </div>
                            <!-- Portfolio Item 5-->
                            <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid zoom-on-hover" src="halaman_depan/assets/img/portfolio/Sinar_DBOS.png" alt="Sinar DBOS" />
                                </div>
                            </div>
                            <!-- Portfolio Item 6-->
                            <div class="col-md-6 col-lg-4">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white rotate-on-hover"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid zoom-on-hover" src="halaman_depan/assets/img/portfolio/Simpel_gambar1.png" alt="Simpel gambar 1" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                    
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Visi & Misi</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line bg-warning"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line bg-danger"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-5 ms-auto">
                        <p class="lead">"Mewujudkan Bank Syariah yang inklusif, Resilient, dan modern Pilihan Utama Masyarakat yang berkontribusi signifikan terhadap pembangunan daerah berkelanjutan"</p>
                    </div>
                    <div class="col-lg-5 me-auto">
                        <ul class="lead">
                            <li>mendorong pertumbuhan perekonomian daerah yang berkelanjutan menuju pembangunan ekonomi nasional</li>
                            <li>mendorong pertumbuhan perekonomian daerah yang berkelanjutan menuju pembangunan ekonomi nasional</li>
                            <li>mendorong pertumbuhan perekonomian daerah yang berkelanjutan menuju pembangunan ekonomi nasional</li>
                            <li>mendorong pertumbuhan perekonomian daerah yang berkelanjutan menuju pembangunan ekonomi nasional</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
                <!-- About Section Button-->
                <!--div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                        <i class="fas fa-download me-2"></i>
                        Free Download!
                    </a>
                </div-->
            </div>
        </section>
        <!-- Contact Section-->
        <!--section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <!--h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <!--div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <!--div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <!--form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <!--div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <!--div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <!--div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <!--div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <!--button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            <br>
                            PT. Bank Riau Kepri Syariah (Perseroda)
                        </br>
                        <br>                       
                            Menara Dang Merdu
                    </br>
                    <br>
Jl.Jendral Sudirman No. 462
                </br>
                <br>
Pekanbaru, Riau, 28116
            </br>
            <br>
Email : corsec@brksyariah.co.id
        </br>
        <br>
SWIFT Code: PDRIIDJA
    </br>            </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Media Sosial</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/bankriau.kepri.5?mibextid=LQQJ4d"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://x.com/brk_syariah?s=21"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/bank_brksyariah?igsh=MTg1dmZmbjFwa3hkZw=="><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.brksyariah.co.id/brkweb_syariah/"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Hubungi kami</h4>
                        <p class="lead mb-0">
                            <a href="tel:1500470" class="btn btn-outline-light mx-1"><i class="fas fa-phone-alt"></i> Call Center : 1500470</a> <br>
                            <a href="mailto:corsec@brksyariah.co.id" class="btn btn-outline-light mx-1"><i class="fas fa-envelope"></i> Email : corsec@brksyariah.co.id</a> <br>
                            <a href="https://crm.ebesha.net:8085/form_aduan/form/45" class="btn btn-outline-light mx-1"><i class="fas fa-exclamation-circle"></i> Form Pengaduan Nasabah</a>
                        </p>
                    </div>
                                       
                                      
        </footer>
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Bank Riau Kepri Syariah</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <style>
            /* Animasi zoom saat dihover */
            .zoom-on-hover:hover {
              transform: scale(1.1); /* Perbesar ukuran elemen */
              transition: transform 0.3s ease; /* Animasi dengan durasi 0.3 detik */
            }
          
            /* Animasi untuk tombol close */
            .btn-close {
              transition: transform 0.3s ease-in-out;
            }
            .btn-close:hover {
              transform: rotate(90deg); /* Putar tombol saat dihover */
            }
          
            /* Tambahkan efek zoom untuk gambar dalam modal */
            .modal-body img {
              transition: transform 0.3s ease; /* Animasi dengan durasi 0.3 detik */
            }
            .modal-body img:hover {
              transform: scale(1.1); /* Perbesar gambar saat dihover */
            }
          </style>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-right pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Giro Valas</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/Produk_Giro_Valas_BRK_Syariah.png') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Simpanan Dana Pihak Ketiga untuk nasabah non-perorangan dalam mata uang asing yang penarikannya hanya dapat dilakukan dengan persyaratan tertentu yang disepakati atau instruksi khusus (menggunakan akad mudharabah).
                                    </p>
                                    <p>
                                        <strong>Keunggulan:</strong>
                             
                                        <li>Tingkat bagi hasil (nisbah) yang kompetitif </li>
                                        <li>Setoran awal yang ringan</li>
                                        <li> Biaya ringan</li>
                                        <li>Mendapatkan rekening koran</li>
                                        <li> biaya setoran dan penarikan (jumlah tertentu)</li>
                                        </li> melakukan kiriman uang valas ke seluruh dunia</li>
                                                                  
                                    </p>
                                    <p>
                                        <strong>Syarat & Ketentuan:</strong>
                                        <ol>
                                            <li>Khusus non-perorangan</li>
                                            <li>Menyerahkan Fotocopy :</li>
                                            <ul>
                                                <li>KTP/Paspor (Perorangan)</li>
                                                <li>KTP/Paspor Pejabat Berwenang (Badan Usaha)</li>
                                                <li>Akte Pendirian Perusahaan (Badan Usaha)</li>
                                                <li>Anggaran Dasar Perusahaan (Badan Usaha)</li>
                                                <li>Dokumen legal lainnya (Badan Usaha)</li>
                                            </ul>
                                            <li>Mengisi formulir pembukaan rekening Giro iB Valas dan formulir akad</li>
                                        </ol>
                                    </p>
                                    
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw text-center"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Giro Valas</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/Produk_Giro_Valas_BRK_Syariah.png') }}" alt="Giro Valas" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Simpanan Dana Pihak Ketiga untuk nasabah non-perorangan dalam mata uang asing yang penarikannya hanya dapat dilakukan dengan persyaratan tertentu yang disepakati atau instruksi khusus (menggunakan akad mudharabah).
                                    </p>
                                    <p>
                                        <strong>Keunggulan:</strong>
                                        <ul>
                                            <li>Tingkat bagi hasil (nisbah) yang kompetitif</li>
                                            <li>Setoran awal yang ringan</li>
                                            <li>Biaya ringan</li>
                                            <li>Mendapatkan rekening koran</li>
                                            <li>Biaya setoran dan penarikan (jumlah tertentu)</li>
                                            <li>Melakukan kiriman uang valas ke seluruh dunia</li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Syarat & Ketentuan:</strong>
                                        <ol>
                                            <li>Khusus non-perorangan</li>
                                            <li>Menyerahkan Fotocopy :</li>
                                            <ul>
                                                <li>KTP/Paspor (Perorangan)</li>
                                                <li>KTP/Paspor Pejabat Berwenang (Badan Usaha)</li>
                                                <li>Akte Pendirian Perusahaan (Badan Usaha)</li>
                                                <li>Anggaran Dasar Perusahaan (Badan Usaha)</li>
                                                <li>Dokumen legal lainnya (Badan Usaha)</li>
                                            </ul>
                                            <li>Mengisi formulir pembukaan rekening Giro iB Valas dan formulir akad</li>
                                        </ol>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-right pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Dhuha Flexi</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/DHUHA_FLEXI.png') }}" alt="Dhuha flexi" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Merupakan tabungan perorangan yang diperuntukkan untuk nasabah yang ingin melaksanakan ibadah haji reguler dengan setoran lanjutan sesuai dengan keinginan nasabah.
                                    </p>
                                    <p>
                                        <strong>Keunggulan:</strong>
                                        <ul>
                                            <li>Setoran awal ringan</li>
                                            <li>Dapat melakukan setoran kapan saja</li>
                                            <li>Bebas menentukan nominal setoran</li>
                                            <li>Bagi hasil yang kompetitif (Akad Mudharabah)</li>
                                            <li>Tidak dikenakan biaya bulanan (Akad Wadiah)</li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Syarat & Ketentuan:</strong>
                                        <ol>
                                            <li>Fotokopi KTP</li>
                                            <li>Fotokopi KK</li>
                                            <li>Mengisi formulir pembukaan rekening</li>
                                            <li>Melakukan setoran awal</li>
                                        </ol>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw text-center"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        

        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-right pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Tabungan Sinar Delima</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/SINAR_DELIMA1.png') }}" alt="Dhuha flexi" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">
                                Merupakan tabungan keunggulan dari Bank Riau Kepri yang memiliki keunggulan yang tidak dimiliki oleh tabungan lain.
                            </p>
                            <p>
                                <strong>Keunggulan:</strong>
                                <ul>
                                    <li>Bebas Transfer antar Bank (maksimal 10 kali transaksi)</li>
                                    <li>Bagi hasil yang lebih besar</li>
                                </ul>
                            </p>
                            <p>
                                <strong>Syarat & Ketentuan:</strong>
                                <ol>
                                    <li>Fotokopi KTP</li>
                                    <li>Fotokopi NPWP</li>
                                    <li>Fotokopi KK</li>
                                    <li>Mengisi formulir aplikasi pembukaan rekening</li>
                                </ol>
                            </p>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw text-center"></i>
                                Close 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-right pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Tabungan Sekolah Penerima Dana BOS</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                      <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/Sinar_DBOS.png') }}" alt="Dhuha flexi" />
                                    <!-- Portfolio Modal - Text-->
                                    
                                    <p class="mb-4">
                                        Merupakan tabungan untuk sekolah baik negeri maupun swasta yang ditetapkan sebagai penerima dana BOS.
                                    </p>
                                    <p>
                                        <strong>Keunggulan:</strong>
                                        <ul>
                                            <li>Persyaratan Mudah</li>
                                            <li>Bebas dari biaya administrasi buku tabungan</li>
                                            <li>Tidak dikenakan setoran awal</li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Syarat & Ketentuan:</strong>
                                        <ol>
                                            <li>Fotokopi KTP (Kepala Sekolah dan Bendahara Sekolah)</li>
                                            <li>Fotokopi SK (Kepala Sekolah dan Bendahara Sekolah)</li>
                                            <li>Pas Foto 3x4 (2 lembar)</li>
                                        </ol>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw text-center"></i>
                                        Close  
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-right pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Tabungan Pelajar</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                     <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/Simpel_gambar1.png') }}" alt="Dhuha flexi" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Merupakan suatu produk simpanan dikhusus untuk pelajar sebagai alat belajar untuk mempersiapkan masa depan dan juga pengenalan dunia perbankan sejak dini.
                                    </p>
                                    <p>
                                        <strong>Keunggulan:</strong>
                                        <ul>
                                            <li>Setoran awal ringan</li>
                                            <li>Tidak dikenakan biaya administrasi bulanan</li>
                                            <li>Tidak dikenakan biaya bulanan</li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Syarat & Ketentuan:</strong>
                                        <ol>
                                            <li>Fotokopi KTP Orang Tua</li>
                                            <li>Fotokopi Kartu Keluarga</li>
                                            <li>Fotokopi Kartu Pelajar</li>
                                        </ol>
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw text-center"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('halaman_depan/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login BRKS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('halaman_auth/images/icons/faviconv.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('halaman_auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('halaman_auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('halaman_auth/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="{{ route('auth') }}" class="login100-form validate-form" method="POST">
                    @csrf
                    <a href="/" class="btn btn-sm btn-primary">Kembali</a>
                    <span class="login100-form-title p-b-43">
                        LOGIN
                    </span>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <ul>
                                <li>{{ Session::get('success') }}</li>
                            </ul>
                        </div>
                    @endif

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            <a href="{{ route('registrasi') }}" class="text-primary">register</a> or sign up using
                        </span>
                    </div>
                </form>

                <div class="login100-more">
                    <div class="slideshow-container">
                        <div class="mySlides">
                            <img src="{{ asset('halaman_auth/images/brk_syariah.jpg') }}"height="900"
                                style="width:100%;">
                        </div>

                        <div class="mySlides">
                            <img src="{{ asset('halaman_auth/images/brksenja.jpg') }}" height="900"
                                style="width:100%;">
                        </div>
                        <div class="mySlides">
                            <img src="{{ asset('halaman_auth/images/bg-01.jpg') }}" height="900" style="width:100%;">
                        </div>
                    </div>
                </div>

                <style>
                    .login100-more {
                        position: relative;
                        overflow: hidden;
                    }

                    .mySlides {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                    }

                    .prev,
                    .next {
                        cursor: pointer;
                        position: absolute;
                        top: 50%;
                        width: auto;
                        margin-top: -22px;
                        padding: 16px;
                        color: white;
                        font-weight: bold;
                        font-size: 20px;
                        transition: 0.6s ease;
                        border-radius: 0 3px 3px 0;
                        user-select: none;
                    }

                    .prev {
                        left: 0;
                        border-radius: 3px 0 0 3px;
                    }

                    .next {
                        right: 0;
                        border-radius: 3px 0 0 3px;
                    }

                    .prev:hover,
                    .next:hover {
                        background-color: rgba(0, 0, 0, 0.8);
                    }
                </style>

                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1;
                        }
                        slides[slideIndex - 1].style.display = "block";
                        setTimeout(showSlides, 3000); // Ubah angka ini (dalam milidetik) sesuai dengan interval slide yang diinginkan
                    }

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }
                </script>



                </style>
                <!-- Tambahkan gambar latar belakang selanjutnya di sini -->

                <!--a class="prev" onclick="plusSlides(-1)">&#10094;</a-->
                <!--a class="next" onclick="plusSlides(1)">&#10095;</a-->
            </div>
        </div>
    </div>
    </div>
    </div>





    <!--===============================================================================================-->
    <script src="{{ asset('halaman_auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('halaman_auth/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('halaman_auth/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('halaman_auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('halaman_auth/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('halaman_auth/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('halaman_auth/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('halaman_auth/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('halaman_auth/js/main.js') }}"></script>

</body>

</html>

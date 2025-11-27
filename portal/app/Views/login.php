<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= !empty($page_title) ? $page_title : "Login" ?></title>

    <link rel="stylesheet" href="<?= base_url('public/assets-slider/libs/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets-slider/css/style.css'); ?>">

    <style>
        body { font-family: "Poppins", sans-serif; }

        /* Background section */
        .hero-section {
            background-image: url('<?= base_url("public/assets-slider/img/b1.jpeg") ?>');
            background-size: cover;
            background-position: center;
            padding: 70px 0;
        }

        /* Overlay box */
        .overlay-box {
            background: rgba(0,0,0,0.40);
            padding: 35px 25px;
            border-radius: 10px;
        }

        .white-text { color: #fff !important; }

        .side-image {
            width: 100%;
            border-radius: 8px;
            object-fit: cover;
            max-height: 350px;
        }

        /* --- FINAL MOBILE FIX --- */
        @media (max-width: 767px) {

            /* Hide left image */
            .side-image-wrapper {
                display: none !important;
            }

            .hero-section {
                padding: 40px 12px;
            }

            /* Make login form full width */
            .overlay-box {
                padding: 25px 18px;
            }

            .login-col {
                max-width: 100% !important;
                flex: 0 0 100% !important;
            }
        }

        /* Extra fix for smallest phones (iPhone SE, 320px width) */
        @media (max-width: 360px) {
            .overlay-box {
                padding: 20px 15px !important;
            }

            input.form-control {
                font-size: 14px;
                padding: 10px 12px;
            }

            button.btn {
                font-size: 15px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

<!-- HEADER -->
<header class="py-2 bg-white shadow-sm">
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-6">
                <img src="https://getfundedafrica.com/assets/images/smedan-logo.jpg" 
                     alt="Logo" class="img-fluid" style="max-width:150px;">
            </div>

        </div>
    </div>
</header>

<!-- MAIN -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <!-- LEFT IMAGE (Hidden on mobile) -->
            <div class="col-lg-6 col-md-6 side-image-wrapper d-none d-md-block">
                <img src="https://i.pinimg.com/736x/4a/90/33/4a903338c0e478248153bd8f3f6f6745.jpg"
                     class="side-image" alt="Program Image">
            </div>

            <!-- LOGIN FORM -->
            <div class="col-lg-4 col-md-6 col-sm-10 col-12 login-col">
                <div class="overlay-box">

                    <form action="<?= base_url('gfa/signinActionAdmin'); ?>" method="POST">

                        <label class="white-text mb-2">
                            <?= !empty($message) ? $message : "Please sign in"; ?>
                        </label>

                        <div class="mb-3">
                            <input type="text" name="email" class="form-control"
                                   placeholder="name@gmail.com" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" class="form-control"
                                   placeholder="Password" required>
                        </div>

                        <button class="btn btn-primary w-100">Sign In</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="py-3 text-center white-text" style="background: rgba(0,0,0,0.60);">
    © 2025 GFA + WEMA Program. All rights reserved.
</footer>

</body>
</html>

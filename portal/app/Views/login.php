<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>
    <!-- <link rel="shortcut icon" sizes="100x40" href="<?= base_url('public/assets-slider');?>/img/favicon.png" type="image/x-icon"/> -->
    <link rel="apple-touch-icon" href="<?php echo base_url('public/assets/app-assets/images/ico/apple-icon-120.html'); ?>">
    <link rel="icon" href="https://getfundedafrica.com/images/fav.png" sizes="16x16" type="image/png">
    <!-- Style CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="<?= base_url('public/assets-slider');?>/libs/line-awesome/css/line-awesome.min.css"
    />
    <link rel="stylesheet" href="<?= base_url('public/assets-slider');?>/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('public/assets-slider');?>/libs/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('public/assets-slider');?>/libs/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="<?= base_url('public/assets-slider');?>/css/style.css" />
    <style>
      .white-text {
        color: white !important;
      }
    </style>
  </head>
  <body>
<div id="wrapper py-0 my-0">
      <!-- BEGIN SITE HEADER -->
      <header id="header" class="site-header is-transparent">
        <div class="container-fluid">
          <div class="row flex-align-c inner">
            <div class="col-lg-2 col-6">
              <div class="header-right flex flex-align-c">
                <div class="canvas-menu">
                  <div class="icon">
                    <a href="#">
                      <svg
                        width="30px"
                        height="14px"
                        viewBox="0 0 30 14"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="https://www.w3.org/1999/xlink.html"
                      >
                        <g
                          stroke="none"
                          stroke-width="1"
                          fill="none"
                          fill-rule="evenodd"
                        >
                          <g
                            transform="translate(-50.000000, -33.000000)"
                            fill="#111111"
                          >
                            <g
                              id="off-menu"
                              transform="translate(50.000000, 28.000000)"
                            >
                              <g
                                id="icon-menu"
                                transform="translate(0.000000, 5.000000)"
                              >
                                <rect
                                  id="Rectangle-1"
                                  x="0"
                                  y="0"
                                  width="30"
                                  height="3"
                                  rx="1.5"
                                ></rect>
                                <rect
                                  id="Rectangle-2"
                                  x="0"
                                  y="11"
                                  width="20"
                                  height="3"
                                  rx="1.5"
                                ></rect>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="logo">
                  <a class="navbar-brand" href="#">
                  <!-- https://gfa-tech.com/wema.lms.login/public/assets/images/logo.webp -->
                    <img

                      

                      src="<?php echo base_url('public/assets/images/logo.webp'); ?>"

                      width="180px"
                      height="auto"
                      alt="image"
                      
                    />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-0">
              <div class="header-center">
                <div class="main-menu">
                  <div class="menu-action">
                    <span class="item menu-back"
                      ><i class="las la-arrow-left"></i
                    ></span>
                    <span class="item menu-close"
                      ><i class="las la-times"></i
                    ></span>
                  </div>
                  <!-- <ul>
                    <li class="is-mega-menu has-sub-menu">
                      <a href="index.html">Home</a>
                    </li>
                    <li class="is-mega-menu has-sub-menu">
                      <a href="#about">About</a>
                    </li>
                    <li class="is-mega-menu has-sub-menu">
                      <a href="#offer">What we offer?</a>
                    </li>
                    <li class="is-mega-menu has-sub-menu">
                      <a href="#how">How it works?</a>
                    </li>
                  </ul> -->
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-2 col-6">
              <div class="header-right flex flex-align-c flex-content-e">
                <div class="buttons">
                  <a href="#signin" class="button fullfield"
                    ><i class="las la-user"></i><span>Sign In</span></a
                  >
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </header>
      <!-- END SITE HEADER -->

      <!-- BEGIN SITE MAIN -->
      <main id="main" class="site-main">
        <div class="site-content pt0 pb0">
          <section
            class="section background-full pdt180 oveflow-hidden"
            style="background-image: url(<?= base_url('public/assets-slider')?>/img/b1.jpeg); background-repeat: no-repeat; background-size: cover;"
          >
            <div class="container" style="background-color: rgba(0, 0, 0, 0.2)">
              <div class="row">
                <div class="col-lg-5">
                  <div class="">
                    <div class="block-testimonial layout-04">
                      <div
                        class="swiper uxp-swiper-slider testimonial-slider"
                        data-pagination="testimonial-pagination"
                        data-direction="horizontal"
                        data-slider-center="false"
                        data-slider-loop="false"
                        data-gap-xl="3"
                        data-gap-md="1"
                        data-xl="1"
                        data-lg="1"
                        data-md="1"
                        data-sm="1"
                        data-xs="1"
                        data-es="1"
                      >
                        <div class="swiper-wrapper">
                          <?php foreach ($sliders as $rowArray) {?>
                          <div class="swiper-slide mb32">
                            <div class="item">
                              <div class="heading mb32">
                                <h2
                                  class="heading-title size-l"
                                  style="color: #fff"
                                >
                               
                                </h2>
                              </div>
                              <p style="text-align: left"></p>
                              <!-- <div class="button-wrap">
                                <a
                                  href="<?= $rowArray['slider_url']?>"
                                  class="button whitefield mt80 mb32"
                                  style="background-color: #fff"
                                  title="Start for Free"
                                  >Apply →</a
                                >
                              </div> -->
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                        <div
                          class="swiper-pagination align-left testimonial-pagination"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mt32 mt-2"></div>
                <div class="col-lg-3 mt32" id="signin">
                  <form
                    class="auth-login-form mt-2"
                    action="<?php echo base_url('gfa/signinActionAdmin'); ?>"
                    method="POST"
                  >
                    <div class="mb-1">
                      <label class="form-label white-text" for="login-email"
                        ><?php if(!empty($message)){ echo $message; }else{ echo "Please sign-in ";} ?></label
                      >
                      <input
                        class="form-control"
                        id="login-email"
                        type="text"
                        name="email"
                        placeholder="name@gmail.com"
                        aria-describedby="login-email"
                        autofocus=""
                        tabindex="1"
                      />
                    </div>
                    <div class="mb-1 mt-2">
                      <div class="d-flex justify-content-between">
                        <!--<label class="form-label" for="login-password">Password</label><a href="auth-forgot-password-cover.html"><small>Forgot Password?</small></a>-->
                      </div>
                      <div
                        class="input-group input-group-merge form-password-toggle"
                      >
                        <input
                          class="form-control form-control-merge"
                          id="login-password"
                          type="password"
                          name="password"
                          placeholder=""
                          aria-describedby="login-password"
                          tabindex="2"
                        /><span class="input-group-text cursor-pointer"
                          ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="14"
                            height="14"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-eye"
                          >
                            <path
                              d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"
                            ></path>
                            <circle cx="12" cy="12" r="3"></circle></svg
                        ></span>
                      </div>
                    </div>
                    <!-- <div class="mb-1">
                      <div class="form-check">
                        <label class="form-check-label" for="remember-me"><a href="<?php echo base_url('gfa/forgotpassword'); ?>"><span class="white-text">Forgot Password</span></a></label>
                      </div>
                    </div> -->
                    <button
                      class="btn btn-primary w-100 waves-effect waves-float waves-light"
                      tabindex="4"
                    >
                      Sign in
                    </button>
                    <!-- <p class="form-check-label text-center mt-2">
                      <a href="https://fgn-alat.dimpified.com/register/"
                        ><span class="white-text"
                          >New on our platform?<br />Open an Account</span
                        ></a
                      >
                    </p> -->
                  </form>
                </div>
              </div>
            </div>
          </section>
          
        <div class="footer-bottom">
          <div class="container">
            <div class="inner flex flex-content-sb flex-align-c py-2">
              <div class="copyright">

                © 2025 GFA + WEMA program. All rights reserved

              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- END SITE FOOTER -->

      <!-- BEGIN BACK TO TOP -->
      <!-- <a
        href="#
            "
        id="backtotop"
        class="backtotop"
      >
        <svg
          width="28"
          height="28"
          viewBox="0 0 28 28"
          fill="none"
          xmlns="https://www.w3.org/2000/svg.html"
        >
          <path
            d="M5.52344 18.5234C5.3151 18.3151 5.3151 18.0938 5.52344 17.8594L13.7266 9.69531C13.9349 9.46094 14.1432 9.46094 14.3516 9.69531L22.5547 17.8594C22.763 18.0938 22.763 18.3151 22.5547 18.5234L21.7734 19.3047C21.5651 19.5391 21.3438 19.5391 21.1094 19.3047L14.0391 12.2344L6.96875 19.3047C6.73438 19.5391 6.51302 19.5391 6.30469 19.3047L5.52344 18.5234Z"
            fill="#ffffff"
          ></path>
        </svg>
      </a> -->
      <!-- END BACK TO TOP -->

      <!-- END POPUP -->
    </div>


    <!-- jQuery -->
    <script
      data-cfasync="false"
      src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="<?= base_url('public/assets-slider');?>/js/jquery-1.12.4.js"></script>
    <script src="<?= base_url('public/assets-slider');?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('public/assets-slider');?>/libs/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('public/assets-slider');?>/libs/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('public/assets-slider');?>/libs/counter/jquery.counterup.min.js"></script>
    <script src="<?= base_url('public/assets-slider');?>/libs/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('public/assets-slider');?>/libs/wowjs/wow.min.js"></script>
    <script src="<?= base_url('public/assets-slider');?>/js/main.js"></script>
  </body>
</html>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/template_admin/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Metode SPK - Registrasi</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/template_admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/template_admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/template_admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/template_admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/template_admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/template_admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/template_admin/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="/template_admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/template_admin/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">


                  <span class=" demo text-body fw-bolder" style="font-size: 25px">Registrasi</span>
                </a>
              </div>
              <!-- /Logo -->



              <form id="formAuthentication" class="mb-3" action="/doregist" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input
                    type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="name" placeholder="Masukkan Nama Lengkap" value="{{ @old('nama') }}" autofocus
                  />
                  @error('nama')
    <div class="invalid-feedback">
            {{ $message }}
                    </div>
@enderror
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukkan Username" value="{{ @old('username') }}" />
                  @error('username')
    <div class="invalid-feedback">
            {{ $message }}</div>
@enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>

                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @error('password')
    <div class="invalid-feedback">
            {{ $message }}
            </div>
@enderror
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Konfirmasi Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"
                    />

                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @error('password_confirmation')
    <div class="invalid-feedback">
                                        {{ $message }}
            </div>
@enderror
</div>

                </div>
                <button class="btn btn-primary d-grid w-100">Daftar</button>
</form>
<p class="text-center">
                <span>Sudah Punya Akun?</span>
                <a href="/login">
                  <span>Silahkan Login</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/template_admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/template_admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="/template_admin/assets/vendor/js/bootstrap.js"></script>
    <script src="/template_admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/template_admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/template_admin/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

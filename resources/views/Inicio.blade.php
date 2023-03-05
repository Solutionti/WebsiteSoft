<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @include('components.head')
</head>
<body >
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-light">
    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <a class="navbar-brand" href="#" aria-label="Front">
          <img 
            class="navbar-brand-logo" 
            src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/background-with-person-running-design-template-73cf0f2fdab5f13f0af54e01ab40cdb2_screen.jpg?ts=1641456336"
          >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="fas fa-bars"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active " href="#">Inicio</a>
            </li>
            <li class="hs-has-sub-menu nav-item">
              <a id="listingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Corredores</a>
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="listingsDropdown" style="min-width: 14rem;">
                <a class="nav-link " href="#">Inscripciones</a>
                <a class="nav-link " href="#">Asesoramiento</a>
                <a class="nav-link " href="#">Compra de equipamiento</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Contacto</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-ghost-secondary btn-sm btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarSearch" aria-controls="offcanvasNavbarSearch">
                <i class="fas fa-search "></i>
              </button>
              <button
                type="button"
                class="btn btn-ghost-secondary btn-sm btn-icon"
                data-toggle="modal"
                data-target="#staticBackdrop"
                aria-hidden="true" 
              >
              <i class="fas fa-shopping-basket "></i>
              </button>
              <button class="btn btn-primary btn-transition btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#signupModal">Vive el ultimo evento</button>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main id="content" role="main" style="background-image: url('{{ asset('img/banner-1.png') }}'); background-repeat: no-repeat; background-size: cover;">
    <div class="position-relative">
      <div class="js-swiper-shop-classic-hero swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container content-space-t-1 content-space-b-3">
              <div class="row align-items-lg-center">
                <div class="col-lg-6 order-lg-2 mb-2 mb-lg-0">
                  <div class="">
                    <h1 class="display-3">IBAGUE CORRE</h1>
                    <p class="">
                      Hubo un punto de inflexión en el que el maratón de Valencia decidió ser el mejor
                      maratón del mundo. Desde 2019, mi trabajo consiste en seleccionar a los atletas
                      internacionales que nos ayudarán a conseguir el objetivo.
                    </p>
                  </div>
                  <div class="d-flex gap-2">
                    
                    <a class="btn btn-primary btn-lg" href="#">Inscripciones abiertas</a>
                    <a
                      class="btn btn-outline-primary btn-icon rounded-circle"
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Save for later"
                    >
                      <i class="bi-heart-fill"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="w-75 mx-auto">
                    <img
                      class="img-fluid"
                      src="https://www.pngall.com/wp-content/uploads/2/Runner-PNG-Photo.png"
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
<div class="container content-space-2">
      <div class="row">
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/hollister-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/levis-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/new-balance-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/puma-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/nike-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/tnf-dark.svg" alt="Logo">
        </div>
      </div>
    </div>
    @include('components.footer')
    @include('components.scripts')
</body>
</html>
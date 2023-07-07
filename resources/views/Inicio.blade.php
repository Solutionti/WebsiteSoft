<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
      .color-yellow {
        background-color: #EED208;
      }
    </style>
    
    @include('components.head')
</head>
<body>
    @include('components.navbar')
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-2">
            <h1 class="display-6 text-center content-space-1 mt-1">“ Todos Salimos, Todos Llegamos ”</h1>
            <!-- <p class="lead text-center">
              El análisis de autoservicio o los informes ad hoc brindan a los usuarios la capacidad
              de desarrollar informes rápidos, lo que les permite analizar sus datos.
            </p> -->
        </div>
      </div>
    </div>
<div class="container content-space-1 content-space-lg-1">
  <div class="row justify-content-lg-between align-items-lg-center">
    <div class="col-lg-5 mb-9 mb-lg-0">
      <div class="mb-3">
        <h2 class="h1">Conoce la historia de Pijaos Bike</h2>
      </div>
      <p>After brainstorming about insights, get the power to create something real. Bring your ideas to life and share your vision with concrete elements. Make collaboration and communication easier with your team or your client.</p>
      <p>Use our tools to explore your ideas and make your vision come true. Then share your work easily.</p>
      <div class="mt-4">
        <!-- <a class="btn btn-primary btn-transition px-5" href="#">Comenzar</a> -->
      </div>
    </div>
    <div class="col-lg-6 col-xl-5">
      <img src="{{ asset('img/imagen1.png') }}" class="img-fluid">
    </div>
  </div>
</div>
<div class="container-fluid text-white" style="background-color: #23325B;">
<div class="container">
  <div class="row">
    <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="text-center">
        <small class="text-cap text-white mt-4">Miembros activos </small>
        <h4 class="display-4 text-white">45</h4>
        <p>Calificación promedio de satisfacción recibida en el último año</p>
      </div>
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="text-center">
        <small class="text-cap text-white mt-4">Rutas realizadas</small>
        <h4 class="display-4 text-white">105</h4>
        <p>Nuestro equipo de soporte está a un chat o correo electrónico de distancia, las 24 horas del día</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="text-center">
        <small class="text-cap text-white mt-4">Crecimiento</small>
        <h4 class="display-4 text-white">100%</h4>
        <p>Instalaciones de extensiones de las dos principales aplicaciones .</p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container content-space-2">
  <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
    <!-- <span class="text-cap">Servicios</span> -->
    <h2>Programaciòn de Rutas del Año  2023</h2>
  </div>
  <div class="row align-items-lg-center">
    <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
      <div class="js-nav-scroller hs-nav-scroller-horizontal">
        <span class="hs-nav-scroller-arrow-prev" style="display: none;">
          <a class="hs-nav-scroller-arrow-link" href="javascript:;">
            <i class="bi-chevron-left"></i>
          </a>
        </span>
        <span class="hs-nav-scroller-arrow-next" style="display: none;">
          <a class="hs-nav-scroller-arrow-link" href="javascript:;">
            <i class="bi-chevron-right"></i>
          </a>
        </span>
        <ul class="nav nav-lg nav-pills nav-pills-shadow flex-lg-column gap-lg-1 p-3" id="featuresTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" href="#featuresOne" id="featuresOne-tab" data-bs-toggle="tab" data-bs-target="#featuresOne" role="tab" aria-controls="featuresOne" aria-selected="true" style="min-width: 25rem;">
              <div class="d-flex align-items-center align-items-lg-start">
                <span class="svg-icon svg-icon-sm text-primary">
                </span>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-1">Travesia Mar Interior de Colombia</h4>
                  <p class="text-body mb-0">Jueves 20 de julio del 2023 </p>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" href="#featuresTwo" id="featuresTwo-tab" data-bs-toggle="tab" data-bs-target="#featuresTwo" role="tab" aria-controls="featuresTwo" aria-selected="false" style="min-width: 25rem;">
              <div class="d-flex align-items-center align-items-lg-start">
                <span class="svg-icon svg-icon-sm text-primary">
                </span>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-1">Travesia a Ambalema</h4>
                  <p class="text-body mb-0">Domingo 20 de agosto del 2023 .</p>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" href="#featuresThree" id="featuresThree-tab" data-bs-toggle="tab" data-bs-target="#featuresThree" role="tab" aria-controls="featuresThree" aria-selected="false" style="min-width: 25rem;">
              <div class="d-flex align-items-center align-items-lg-start">
                <span class="svg-icon svg-icon-sm text-primary">
                </span>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-1">Travesia a Letras</h4>
                  <p class="text-body mb-0">Domingo 3 de septiembre del 2023</p>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" href="#featuresFour" id="featuresFour-tab" data-bs-toggle="tab" data-bs-target="#featuresThree" role="tab" aria-controls="featuresThree" aria-selected="false" style="min-width: 25rem;">
              <div class="d-flex align-items-center align-items-lg-start">
                <span class="svg-icon svg-icon-sm text-primary">
                </span>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-1">Travesia a Salento </h4>
                  <p class="text-body mb-0">Domingo 22 de octubre del 2023</p>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-lg-7 order-lg-1">
      <div class="tab-content" id="featuresTabContent">
        <div class="tab-pane fade show active" id="featuresOne" role="tabpanel" aria-labelledby="featuresOne-tab">
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.htmlstream.com/front/</div>
            </div>
            <div class="device-browser-frame">
              <img class="device-browser-img" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/1618x1010/img1.jpg" alt="Image Description">
            </div>
          </figure>
        </div>
        <div class="tab-pane fade" id="featuresTwo" role="tabpanel" aria-labelledby="featuresTwo-tab">
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.htmlstream.com/front/</div>
            </div>
            <div class="device-browser-frame">
              <img class="device-browser-img" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/1618x1010/img2.jpg" alt="Image Description">
            </div>
          </figure>
        </div>
        <div class="tab-pane fade" id="featuresThree" role="tabpanel" aria-labelledby="featuresThree-tab">
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.htmlstream.com/front/</div>
            </div>
            <div class="device-browser-frame">
              <img class="device-browser-img" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/1618x1010/img4.jpg" alt="Image Description">
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="container content-space-1">
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
<br>
<br>
<div class="overflow-hidden text-white" style="background-color: #23325B;">
  <div class="container content-space-1 content-space-lg-1">
    <div class="row justify-content-lg-between align-items-md-center">
      <div class="col-md-6 order-md-2 mb-10 mb-md-0">
        <div class="position-relative">
          <img class="img-fluid rounded-2" src="{{ asset('img/imagen2.jpg') }}" alt="Image Description">
        </div>
      </div>
      <div class="col-md-6 col-lg-5  order-md-1">
        <div class="mb-4 text-center">
          <img
            class="avatar avatar-xl avatar-4x3"
            src="{{ asset('img/logo.png') }}"
            alt="Image Description"
            width="100px"
          >
        </div>
        <figure>
          <blockquote class="blockquote blockquote-lg text-white">" The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly. Thank you! "</blockquote>
          <figcaption class="blockquote-footer text-white">
            Jerson Galvez y Andres Angarita
            <span class="blockquote-footer-source text-white">Pijao Bike | Lideres de organizaciòn</span>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>

 <div class="d-md-flex" >
  <div class="container d-md-flex align-items-md-center vh-md-100 content-space-t-3 content-space-b-1 content-space-b-md-3 content-space-md-0">
    <div class="row justify-content-md-between align-items-md-center flex-grow-1">
      <div class="col-9 col-md-5 mb-5 mb-md-0">
        <img class="img-fluid" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/oc-yelling.svg" alt="SVG Illustration">
      </div>
      <div class="col-md-6">
        <div class="mb-4">
          <h1>Travesia Ambalema.</h1>
          <p>Inscribete a la travesia mas grande y masiva que se realiza en la ciudad de ibague estas a tiempo</p>
        </div>
        <div class="js-countdown row mb-5">
          <div class="col-3">
            <h2 class="js-cd-days h1 text-primary mb-0">1</h2>
            <h5 class="mb-0">Dias</h5>
          </div>
          <div class="col-3">
            <h2 class="js-cd-hours h1 text-primary mb-0">08</h2>
            <h5 class="mb-0">Horas</h5>
          </div>
          <div class="col-3">
            <h2 class="js-cd-minutes h1 text-primary mb-0">30</h2>
            <h5 class="mb-0">Minutos</h5>
          </div>
          <div class="col-3">
            <h2 class="js-cd-seconds h1 text-primary mb-0">01</h2>
            <h5 class="mb-0">Segundos</h5>
          </div>
        </div>
        <form>
          <div class="input-card input-card-sm border">
            <div class="input-card-form">
              <label for="subscribeForm" class="form-label visually-hidden">Ingresar email</label>
              <input type="text" class="form-control form-control-lg" id="subscribeForm" placeholder="Ingresar email" aria-label="Ingresar email">
            </div>
            <button type="button" class="btn color-yellow btn-lg">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="content-space-1 " style="background-color: #23325B;">
<div class="container-fluid px-lg-9">
    <div class="row gx-3 align-items-center">
      <div class="col-md d-none d-md-inline-block">
        <div class="d-grid gap-3">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x472/img6.jpg" alt="Image Description">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x115/img1.jpg" alt="Image Description">
        </div>
      </div>
      <div class="col">
        <div class="d-grid gap-3">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x472/img4.jpg" alt="Image Description">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x283/img1.jpg" alt="Image Description">
        </div>
      </div>
      <div class="col">
        <div class="d-grid gap-3">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x472/img5.jpg" alt="Image Description">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x472/img3.jpg" alt="Image Description">
        </div>
      </div>
      <div class="col">
        <div class="d-grid gap-3">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/300x360/img1.jpg" alt="Image Description">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x535/img1.jpg" alt="Image Description">
        </div>
      </div>
      <div class="col-md d-none d-md-inline-block">
        <div class="d-grid gap-3">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x472/img1.jpg" alt="Image Description">
          <img class="img-fluid shadow rounded-2" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/407x472/img2.jpg" alt="Image Description">
        </div>
      </div>
    </div>
    </div>
  </div>
<br>
<br>
    @include('components.footer')
    @include('components.scripts')
</body>
</html>
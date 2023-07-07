<style>
  .color-yellow {
    background-color: #EED208;
    color: black;
  }
</style>

<header id="header" class="navbar navbar-expand-lg navbar-floating navbar-end navbar-light ">
  <div class="container">
    <nav class="js-mega-menu navbar-nav-wrap">
      <a class="navbar-brand" href="../index.html" aria-label="Front">
        <img class="" src="{{ asset('img/logo.png') }}" alt="Logo" width="85px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-default">
          <i class="fas fa-list"></i>
        </span>
        <span class="navbar-toggler-toggled">
          <i class="fas fa-times"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              class="r nav-link"
              href="/"
              
            > Inicio
            </a>
          </li>
          <li class="nav-item">
            <a
              class="r nav-link"
              href="/servicios"
            > Rutas
            </a>
          </li>
          <li class="nav-item">
            <a
              class="r nav-link"
              href="/plan"
            > Galeria
            </a>
          </li>
          <li class="nav-item">
            <a
              class="r nav-link"
              href="/contactanos"
            > Inscripciones
            </a>
          </li>
          <li class="nav-item">
            <a class="btn color-yellow btn-sm btn-transition" href="/comprar" target="_blank">Tienda virtual</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<main id="content" role="main" style="background-image: url('{{ asset('img/banner-1.png') }}');
          background-size: cover; background-repeat: no-repeat">
  <div class="">
    <div class="container text-center content-space-3 content-space-t-lg-4">
      <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-6 order-lg-2">
              <div class=" mx-auto">
                <img
                  class="img-fluid"
                  src="https://www.santiago2023.org/images/ciclismo-mtb-deportista.png"
                  alt="Image Description"
                  width="250px"
                  >
              </div>
           </div>
          <div class="col-lg-6 order-lg-1 mb-7 mb-lg-0">
            <div class="mb-6">
              <h2 class="display-6 mb-4 text-uppercase">Pijaos Bike MTB y Ruta</h2>
              <p class="text-justify lead text-black">
              ¿No grupo ciclistico?. Que te parece si recorremos las calles de ibague y  colombia
              con Pijaos Bike lleno de aventuras, mucho pedal y amistad.
              </p>
            </div>
            <div class="text-center">
              <a class="btn color-yellow rounded-pill" href="#">Ver mas ...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
</main>
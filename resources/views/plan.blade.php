<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planes empresariales</title>
  @include('components.head')
</head>
<body>
  @include('components.navbar2')
<main id="content" role="main">
  <div class="">
    <div class="container text-center  content-space-t-lg-5">
      <h1 class="display-4">Nuestros mejores momentos en ruta</h1>
      
    </div>
   </div>
</main>
<br>
<br>

<div class="container content-space-1 content-space-lg-1">
  <div class="row justify-content-lg-center">
    <div class="col-md-6 col-lg-5 mb-3 mb-md-7">
      <div class="d-flex pe-lg-5" data-aos="fade-up">
        <div class="flex-shrink-0">
          <span class="svg-icon text-primary">
          </span>
        </div>
        <div class="flex-grow-1 ms-4">
          <h4>Responsive</h4>
          <p>Front is an incredibly beautiful, fully responsive, and mobile-first projects on the web.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-5 mb-3 mb-md-7">
      <div class="d-flex ps-lg-5" data-aos="fade-up" data-aos-delay="100">
        <div class="flex-shrink-0">
          <span class="svg-icon text-primary">
          </span>
        </div>
        <div class="flex-grow-1 ms-4">
          <h4>Customizable</h4>
          <p>Front template can be easily customized with its cutting-edge components and features.</p>
        </div>
      </div>
    </div>
    <div class="w-100"></div>
    <div class="col-md-6 col-lg-5 mb-3 mb-md-7 mb-lg-0">
      <div class="d-flex pe-lg-5" data-aos="fade-up" data-aos-delay="200">
        <div class="flex-shrink-0">
          <span class="svg-icon text-primary">
            
          </span>
        </div>
        <div class="flex-grow-1 ms-4">
          <h4>Premium</h4>
          <p>Front is not only for developers but also for designers, and includes a Sketch file.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-5">
      <div class="d-flex ps-lg-5" data-aos="fade-up" data-aos-delay="300">
        <div class="flex-shrink-0">
          <span class="svg-icon text-primary">
          </span>
        </div>
        <div class="flex-grow-1 ms-4">
          <h4>Documentation</h4>
          <p>Every component and plugin is well documented with live examples.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12 text-center">
        <h2>Preguntas frecuentes</h2>
        <p class="lead">Esto es lo que necesita saber sobre su licencia de Rocket, según las preguntas que más nos hacen.</p>
    </div>
  </div>
</div>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Puedo obtener actualizaciones costantemente
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>   
    </div>
  </div>
</div>
  @include('components.footer')
  @include('components.scripts')
<script src="../assets/vendor/hs-toggle-switch/dist/hs-toggle-switch.min.js"></script>
<script>
  (function() {
    new HSToggleSwitch('.js-toggle-switch')
  })()
</script>
</body>
</html>
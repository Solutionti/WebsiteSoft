<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    @include('components.head')
</head>
<body>
@include('components.navbar2')
<main id="content" role="main">
  <div class="">
    <div class="container text-center  content-space-t-lg-5">
      <h1 class="display-4">Imagina lo que lograremos juntos</h1>
      <p class="lead content-space-t-lg-1">
        Potentes herramientas de análisis para su negocio. Vea las palabras clave exactas por las 
        que sus competidores se clasifican en la búsqueda orgánica y la cantidad de tráfico generado
        por cada una de ellas.
      </p>
    </div>
   </div>
</main>
<br>
<br>
<br>
<div class="bg-dark rounded-2 mx-3 mx-xl-10" style="background-image: url(../assets/svg/components/wave-pattern-light.svg);">
  <div class="container-xl container-fluid content-space-1 content-space-md-2 px-4 px-md-8 px-lg-10">
    <div class="row justify-content-lg-between align-items-lg-center">
      <div class="col-md-10 col-lg-5 mb-9 mb-lg-0">
        <h1 class="text-white">Contratanos</h1>
        <p class="text-white-70">Cualquiera que sea su objetivo - lo conseguiremos allí.</p>
        <div class="border-top border-white-10 my-5" style="max-width: 10rem;"></div>
        <figure>
          <div class="mb-4">
            <img class="avatar avatar-xl avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/mailchimp-white.svg" alt="Logo">
          </div>
          <blockquote class="blockquote blockquote-light">“ Tiene muchas variaciones de página de destino para elegir, lo cual siempre es una gran ventaja. ”</blockquote>
          <figcaption class="blockquote-footer blockquote-light">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img class="avatar avatar-circle" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/160x160/img10.jpg" alt="Image Description">
              </div>
              <div class="flex-grow-1 ms-3">
                Jerson Galvez
                <span class="blockquote-footer-source">Programador de software | SolutionTi</span>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
      <div class="col-lg-7">
        <div class="card card-lg">
          <div class="card-body">
            <div class="mb-4">
              <h3 class="card-title">Rellena el formulario y nos pondremos en contacto lo antes posible.</h3>
            </div>
            <form>
              <div class="row gx-3">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label visually-hidden" for="hireUsFormFirstNameEg2">Nombres</label>
                    <input type="text" class="form-control form-control-lg" name="hireUsFormNameFirstName" id="hireUsFormFirstNameEg2" placeholder="Nombres" aria-label="Nombres">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label visually-hidden" for="hireUsFormLasttNameEg2">Apellidos</label>
                    <input type="text" class="form-control form-control-lg" name="hireUsFormNameLastName" id="hireUsFormLasttNameEg2" placeholder="Apellidos" aria-label="Apellidos">
                  </div>
                </div>
              </div>
              <div class="row gx-3">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label visually-hidden" for="hireUsFormWorkEmailEg2">Correo electronico</label>
                    <input type="email" class="form-control form-control-lg" name="hireUsFormNameWorkEmail" id="hireUsFormWorkEmailEg2" placeholder="Correo electronico" aria-label="Correo electronico">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="form-label visually-hidden" for="hireUsFormCompanyNameEg1">Celular <span class="form-label-secondary">(Optional)</span></label>
                    <input type="text" class="form-control form-control-lg" name="hireUsFormNameCompanyName" id="hireUsFormCompanyNameEg1" placeholder="Celular" aria-label="Celular">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label visually-hidden" for="hireUsFormDetailsEg2">Detalles</label>
                <textarea class="form-control form-control-lg" name="hireUsFormNameDetails" id="hireUsFormDetailsEg2" placeholder="Háblanos de tu proyecto" aria-label="Háblanos de tu proyecto" rows="4"></textarea>
              </div>
              <div class="form-check small mb-4">
                <input type="checkbox" class="form-check-input" id="signupFormPrivacyCheckEg2" name="signupFormPrivacyCheckEg2" required data-msg="Please accept our Privacy Policy.">
                <label class="form-check-label" for="signupFormPrivacyCheckEg2">Sí, me gustaría recibir correos electrónicos de marketing ocasionales de Front. Tengo derecho a optar por no participar en cualquier momento. Ver política de privacidad. <a class="link" href="#">Ver política de privacidad.</a></label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Enviar Consulta</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @include('components.footer')
  @include('components.scripts')
</body>
</html>
<?php require_once('header.php'); ?>

</html>
<main>
  <!--Info-->
  <section id="prin" class="seccion">
    <div class="s-prin row">
      <div class="s-prin-text col-12">
        <h1 class="animate__animated animate__slideInLeft">We specialize in recruiting<br>
          the best talent for your<br>
          company.</h1>
        <p>Contact us with confidance, and we will find a worker <br>
          who is a perfect fit for your company.</p>
        <a href="looking.php"><button class="hvr-bounce-to-right">Request</button></a>
      </div>
    </div>
  </section>

  <!--Compani-->
  <section id="compani" class="seccion">
    <div class="s-compani">
      <section class="layout">
        <div class="s-compani-content d-flex align-items-center">
          <div class="row">
            <div class="s-compi-content-item row" data-aos="zoom-out-down" >
              <h1>Company</h1>
              <p>Talent pool d.o.o. company founded in 2022, provides
                mediation services in the employment of foreign workers
                from Peru. We cooperate directly with the company
                Certicom s.a.c. based in Lima, which does recruitment for
                us and has a large talent pool in various sectors.
              </p>
            </div>
            <div class="s-compi-content-item row" data-aos="zoom-out-down" >
              <h1>Quality</h1>
              <p>A large portion of our candidates are highly educated
                young people between the ages of 21 and 35, with the
                majority of them actively using English. There is also the
                possibility of selecting candidates who speak other foreign
                languages such as German, Italian, or even Croatian. Our
                services are already being used by renowned hotel chains
                in the Istria region, despite the fact that the business is
                only recently founded. We mediate in the employment of
                foreign workers in the tourism sector, but also in
                construction, production and technical professions.
              </p>
            </div>
          </div>
        </div>
        <div class="s-compani-img d-flex align-items-center justify-content-center">
          <img data-aos="zoom-in-left" src="../../images/About/img1.png" alt="">
        </div>
      </section>
    </div>
  </section>
</main>

<script>
  var contacto = document.getElementById("about");
  contacto.className += " active";
</script>
<?php require_once 'footer.php'; ?>
<?php require_once('header.php'); ?>

</html>
<main>
  <!--Info-->
  <section id="prin" class="seccion">
    <div class="s-prin row">
    <div class="s-prin-text col-12">
         <h1>Specijalizirani smo za zapošljavanje<br>
           najbolji talent za vas<br>
           tvrtka.</h1>
         <p>Obratite nam se s povjerenjem, a mi ćemo pronaći radnika <br>
           koji savršeno odgovara vašoj tvrtki.</p>
         <button>Zahtjev</button>
       </div>
    </div>
  </section>

  <!--Compani-->
  <section id="compani" class="seccion">
    <div class="s-compani">
      <section class="layout">
        <div class="s-compani-content d-flex align-items-center">
          <div class="row">
          <div class="s-compi-content-item row">
              <h1>Tvrtka</h1>
              <p>Talent pool d.o.o. tvrtka osnovana 2022. pruža
                usluge posredovanja pri zapošljavanju stranih radnika
                iz Perua. Surađujemo direktno s tvrtkom
                Certicom s.a.c. sa sjedištem u Limi, koja zapošljava za
                nas i ima veliki broj talenata u raznim sektorima.
              </p>
            </div>
            <div class="s-compi-content-item row">
              <h1>Kvaliteta</h1>
              <p>Veliki dio naših kandidata je visoko obrazovan
                mladih između 21 i 35 godina, s
                većina njih aktivno koristi engleski jezik. Tu je i
                mogućnost odabira kandidata koji govore i drugi strani jezik
                jezika poput njemačkog, talijanskog ili čak hrvatskog. Naše
                usluge već koriste renomirani hotelski lanci
                na području Istre, unatoč tome što je posao
                tek nedavno osnovana. Posredujemo pri zapošljavanju
                strani radnici u sektoru turizma, ali i u
                građevinske, proizvodne i tehničke struke.
              </p>
            </div>
          </div>
        </div>
        <div class="s-compani-img d-flex align-items-center justify-content-center">
          <img src="../../images/About/img1.png" alt="">
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
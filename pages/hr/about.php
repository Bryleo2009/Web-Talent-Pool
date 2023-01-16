<?php require_once('header.php'); ?>

</html>
<main>
  <!--Info-->
  <section id="prin" class="seccion">
    <div class="s-prin row">
      <div class="s-prin-text col-8">
        <h1 class="animate__animated animate__slideInLeft">Specijalizirani smo za zapošljavanje<br>
          najbolji talent za vas<br>
          tvrtka.</h1>
        <p>Obratite nam se s povjerenjem, a mi ćemo pronaći djelatnika <br> koji savršeno odgovara vašoj tvrtki.</p>
        <a href="looking.php"><button class="hvr-bounce-to-right">Zahtjev</button></a>
      </div>
      <div class="s-prin-img col-4 d-flex align-items-center">
        <img src="../../images/About/undraw_hiring_re_yk5n 2.png" alt="">
      </div>
    </div>
  </section>

  <img class="abst-11" src="../../images/About/Fill-medio.png" alt="">
  <img class="abst-12" src="../../images/About/Abstract-2.png" alt="">
  <img class="abst-13" src="../../images/About/Abstract-1.png" alt="">

  <!--Compani-->
  <section id="compani" class="seccion">
    <div class="s-compani row">
      <div class="col-12 row">
        <div class="s-compi-content-img col-6 d-flex align-items-center justify-content-center">
          <img src="../../images/About/undraw_team_collaboration_re_ow29 2.png" alt="">
        </div>
        <div class="s-compi-content-item company col-6" data-aos="zoom-out-down">
          <h1>Tvrtka</h1>
          <p>Talent pool d.o.o. tvrtka osnovana 2022. pruža
            usluge posredovanja pri zapošljavanju stranih radnika
            iz Perua. Surađujemo direktno s tvrtkom
            Certicom s.a.c. sa sjedištem u Limi, koja zapošljava za
            nas i ima veliki broj talenata u raznim sektorima.
          </p>
        </div>
      </div>
      <div class="s-compi-content-item col-6" data-aos="zoom-out-down">
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
      <div class="s-compi-content-img-2 col-6 d-flex align-items-center justify-content-center">
        <img src="../../images/About/undraw_co_workers_re_1i6i 2.png" alt="">
      </div>
    </div>
    <img class="abst-14" src="../../images/Home/Abstract-1.png" alt="">
  </section>



  <!--Request-->
  <section id="reque" class="seccion">
    <div class="s-reque row">
      <div class="s-reque-title">
        <h1 data-aos="fade-up" class="text-center">Pošalji zahtjev</h1>
        <p class="text-center">Za procjenu projekta ispunite obrazac
          i mi ćemo stupiti u kontakt s vama.</p>
      </div>
      <div class="s-reque-forms row">
        <form class="form-group request-home col-12" method="post" action="../../ofsystem/enviar_solicitud.php" id="forms" enctype="multipart/form-data">
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="employer" name="employer" required="" placeholder="&nbsp;">
            <span class="label">Poslodavac</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="email" id="email" name="email" required="" placeholder="&nbsp;">
            <span class="label">e-pošta</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="cel" name="cel" required="" placeholder="&nbsp;">
            <span class="label">Kontakt broj</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="name" name="name" required="" placeholder="&nbsp;">
            <span class="label">Ime</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="position" name="position" required="" placeholder="&nbsp;">
            <span class="label">Položaj</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="number" min="1" max="100" id="number" name="number" required="" placeholder="&nbsp;">
            <span class="label">Potreban broj radnika</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <textarea type="text" id="msg" name="msg" required="" placeholder="&nbsp;" rows="4" cols="50"></textarea>
            <span class="label">Poruka</span>
            <span class="focus-bg"></span>
          </label>
          <button data-aos="zoom-in" class="hvr-bounce-to-right" type="submit" name="enviar" id="btn" onclick="modal('enviar','forms')" disabled>Poslati</button>
        </form>
      </div>
    </div>
  </section>
</main>

<script>
  function habilitar() {
    t1 = document.getElementById("employer").value.length;
    t2 = document.getElementById("email").value.length;
    t3 = document.getElementById("cel").value.length;
    t4 = document.getElementById("name").value.length;
    t5 = document.getElementById("position").value.length;
    t6 = document.getElementById("number").value;
    if (t1 >= 3 && t2 >= 3 && t3 >= 5 && t4 >= 3 && t5 >= 3 && t6 > 0) {
      document.getElementById("btn").disabled = false;
    } else {
      document.getElementById("btn").disabled = true;
    }
  }
  document.getElementById("employer").addEventListener("keyup", habilitar);
  document.getElementById("email").addEventListener("keyup", habilitar);
  document.getElementById("cel").addEventListener("keyup", habilitar);
  document.getElementById("name").addEventListener("keyup", habilitar);
  document.getElementById("position").addEventListener("keyup", habilitar);
  document.getElementById("number").addEventListener("keyup", habilitar);
</script>
<script>
  function modal(tipo, id) {
    event.preventDefault();
    if (tipo == 'enviar') {
      Swal.fire({
        title: "Email sent!",
        text: "The email has been sent successfully",
        icon: "success",
        showConfirmButton: false,
        timer: 1500
      }).then((result) => {
        let form = document.getElementById(id);
        form.submit();
      });
    }
  }
</script>
<script>
  var contacto = document.getElementById("about");
  contacto.className += " active";
</script>
<?php require_once 'footer.php'; ?>
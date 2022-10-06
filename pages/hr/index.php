<?php require_once('header.php'); ?>

</html>
<glavni>
  <!--Informacije-->
  <section id="info" class="seccion">
    <div class="s-info row">
      <div class="s-info-text col-6">
        <h1 class="animate__animated animate__slideInLeft">Tražite strane radnike?</h1>
        <p>Imate li manjak osoblja za nadolazeće turiste
          sezona? Trebate li kadrove za sektor turizma,
          proizvodne, građevinske ili tehničke poslove, zajedno s našim
          partnera u Limi pomoći ćemo vam pronaći radnike iz Perua.</p>
        <a href="looking.php"><button class="hvr-bounce-to-right">Zahtjev</button></a>
      </div>
      <div class="s-info-logo col-6 d-flex align-items-center justify-content-center">
        <img src="../../images/Home/img1.png" alt="">
      </div>
    </div>
  </section>

  <!--Postupak-->
  <section id="proce" class="seccion">
    <div class="s-proce row">
      <h1 data-aos="fade-up" >Postupak</h1>
      <div class="s-proce-text col-5">
        <p>Sve što trebate učiniti je ispuniti obrazac za
          potreban profil radnika, a mi ćemo to učiniti
          novačenje. Nakon što vam pošaljemo životopise od
          kandidati koji uđu u uži izbor, postoji mogućnost a
          intervju video pozivom. Nakon konačnog odabira,
          prikupljanje dokumentacije za radnu dozvolu
          će se pokrenuti.
        </p>
      </div>
      <div class="s-proce-items col-7">
        <div class="row align-items-center" data-aos="zoom-out-down" >
          <div class="s-proce-img col-4">
            <img src="../../images/Home/img2.png" alt="">
          </div>
          <div class="s-proce-item_text col-8">
            <h1>1. Zahtjev za željeni profil</h1>
            <p>Zanimanje, opis posla, broj
              kandidati, radno iskustvo, stručna sprema
              i vještine specifične za posao.</p>
          </div>
        </div>
        <div class="row align-items-center" data-aos="zoom-out-down" >
          <div class="s-proce-img col-4">
            <img src="../../images/Home/img3.png" alt="">
          </div>
          <div class="s-proce-item_text col-8">
            <h1>2. Odabir kandidata</h1>
            <p>Odabiremo kandidate za tražene
              profil i dostavite odabrane životopise na
              klijent. Klijenti imaju mogućnost videa
              intervjui s kandidatima koji su ušli u uži izbor.</p>
          </div>
        </div>
        <div class="row align-items-center" data-aos="zoom-out-down" >
          <div class="s-proce-img col-4">
            <img src="../../images/Home/img4.png" alt="">
          </div>
          <div class="s-proce-item_text col-8">
            <h1>3. Radne dozvole</h1>
            <p>Dokumentaciju prikupljamo od
              kandidata koji su potrebni za dobivanje a
              dozvola za rad. Vize nisu potrebne za
              građani Perua.</p>
          </div>
        </div>
        <div class="row align-items-center" data-aos="zoom-out-down" style="padding-bottom: 0 !important;">
          <div class="s-proce-img col-4">
            <img src="../../images/Home/img5.png" alt="">
          </div>
          <div class="s-proce-item_text col-8">
            <h1>4. Dolazak kandidata</h1>
            <p>Pružamo podršku kandidatima
              organiziranje putovanja.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Zahtjev-->
  <section id="reque" class="seccion">
    <div class="s-reque row">
      <div class="s-reque-title">
        <h1 data-aos="fade-up" >Pošalji zahtjev</h1>
        <p>Da biste dobili procjenu projekta, ispunite obrazac <br>
          i mi ćemo vas kontaktirati.</p>
      </div>
      <div class="s-reque-forms row">
      <form class="form-group col-6" method="post" action="../../ofsystem/enviar_solicitud.php" id="forms" enctype="multipart/form-data">
          <label for="inp" class="inp" data-aos="zoom-in" >
            <input type="text" id="employer" name="employer" required="" placeholder="&nbsp;">
            <span class="label">Poslodavac</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in" >
            <input type="email" id="email" name="email" required="" placeholder="&nbsp;">
            <span class="label">E-pošta</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in" >
            <input type="text" id="cel" name="cel" required="" placeholder="&nbsp;">
            <span class="label">Kontakt broj</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in" >
            <input type="text" id="name" name="name" required="" placeholder="&nbsp;">
            <span class="label">Ime</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in" >
            <input type="text" id="position" name="position" required="" placeholder="&nbsp;">
            <span class="label">Pozicija</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in" >
          <input type="number" min="1" max="100"id="number" name="number" required="" placeholder="&nbsp;">
            <span class="label">Potreban broj radnika</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in" >
            <textarea type="text" id="msg" name="msg" required="" placeholder="&nbsp;" rows="4" cols="50"></textarea>
            <span class="label">Poruka</span>
            <span class="focus-bg"></span>
          </label>
          <button  data-aos="zoom-in" class="hvr-bounce-to-right" type="submit" name="enviar" id="btn" onclick="modal('enviar','forms')" disabled>Pošalji</button>
        </form>
        <div class="s-reque-forms-logo col-6 d-flex align-items-center">
          <img src="../../images/Home/img6.png" alt="">
        </div>
      </div>
    </div>
  </section>
</main>


<script>
  var contacto = document.getElementById("home");
  contacto.className += " active";
</script>
<script>
  function habilitar() {
    t1 = document.getElementById("employer").value.length;
    t2 = document.getElementById("email").value.length;
    t3 = document.getElementById("cel").value.length;
    t4 = document.getElementById("name").value.length;
    t5 = document.getElementById("position").value.length;
    t6 = document.getElementById("number").value;
    if (t1 >= 3 && t2 >= 3 && t3 >= 5 && t4 >= 3 && t5 >= 3 && t6 >0) {
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
        title: "E-mail poslan!",
        text: "E-pošta je uspješno poslana",
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
<?php require_once 'footer.php'; ?>
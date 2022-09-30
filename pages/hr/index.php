<?php require_once('header.php'); ?>

</html>
<main>
  <!--Info-->
  <section id="info" class="seccion">
    <div class="s-info row">
      <div class="s-info-text col-6">
        <h1>Tražite strane radnike?</h1>
        <p>Imate li manjak osoblja za nadolazeće turiste
          sezona? Trebate li kadrove za sektor turizma,
          proizvodne, građevinske ili tehničke poslove, zajedno s našim
          partnera u Limi pomoći ćemo vam pronaći radnike iz Perua.</p>
        <button>Zahtjev</button>
      </div>
      <div class="s-info-logo col-6 d-flex align-items-center justify-content-center">
        <img src="../../images/Home/img1.png" alt="">
      </div>
    </div>
  </section>

  <!--Procedure-->
  <section id="proce" class="seccion">
    <div class="s-proce row">
      <h1>Procedure</h1>
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
        <div class="row align-items-center">
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
        <div class="row align-items-center">
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
        <div class="row align-items-center">
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
        <div class="row align-items-center" style="padding-bottom: 0 !important;">
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

  <!--Request-->
  <section id="reque" class="seccion">
    <div class="s-reque row">
      <div class="s-reque-title">
      <h1>Pošalji zahtjev</h1>
         <p>Da biste dobili procjenu projekta, ispunite obrazac <br>
           i mi ćemo vas kontaktirati.</p>
      </div>
      <div class="s-reque-forms row">
      <div class="s-reque-forms row">
      <form class="form-group col-6">
                    <label for="inp" class="inp">
                        <input type="text" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">Poslodavac</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="email" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">E-mail</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="text" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">Kontakt broj</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="text" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">Ime</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="text" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">Položaj</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp ">
                        <select name="" id="inp" class="formulario-white" placeholder="&nbsp;">
                            <option disabled selected>odaberite broj</option>
                            <option value="value1">1</option>
                            <option value="value2">2</option>
                            <option value="value2">3</option>
                            <option value="value2">4</option>
                            <option value="value2">5</option>
                            <option value="value2">6</option>
                            <option value="value2">7</option>
                            <option value="value2">8</option>
                            <option value="value2">9</option>
                            <option value="value2">10</option>
                        </select>
                        <span class="label">Potreban broj radnika</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <textarea type="text" id="inp" class="formulario-white" placeholder="&nbsp;" rows="4" cols="50"></textarea>
                        <span class="label">Poruka</span>
                        <span class="focus-bg"></span>
                    </label>
                    <button>Poslati</button>
                </form>
        <div class="s-reque-forms-logo col-6 d-flex align-items-center">
          <img src="../../images/Home/img6.png" alt="">
        </div>
    </div>
  </section>
</main>

<script>
  var contacto = document.getElementById("home");
  contacto.className += " active";
</script>
<?php require_once 'footer.php'; ?>
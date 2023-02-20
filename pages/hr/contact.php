<?php require_once('header.php'); ?>

</html>
<main>
  <!--Info-->
  <section id="contacto" class="seccion">
    <div class="s-contacto row">
      <div class="s-contacto-content col-6 ">
        <h1 class="animate__animated animate__slideInLeft">Kontakt</h1>
        <p>Pošaljite nam poruku putem obrasca.</p>
      </div>
      <div class="s-contacto-img col-6 d-flex align-items-center justify-content-center">
        <img src="../../images/Contact/undraw_work_from_anywhere_re_s2i6 2.png" alt="">
      </div>
    </div>
  </section>

  <!--contact-->
  <section id="send" class="seccion">
    <div class="s-reque row">
      <div class="s-reque-title">
        <h1 data-aos="fade-up" class="text-center">Pošalji zahtjev</h1>
        <p class="text-center">Ispunite formular kako biste dobili procjenu za
projekt, nakon čega ćemo Vas kontaktirati..</p>
      </div>
      <div class="s-reque-forms row">
        <form class="form-group request-home col-12" method="post" action="../../ofsystem/enviar_contacto.php" id="forms" enctype="multipart/form-data">
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="name" name="name" required="" placeholder="&nbsp;">
            <span class="label">Ime</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="lastname" name="lastname" required="" placeholder="&nbsp;">
            <span class="label">Prezime</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="email" id="email" name="email" required="" placeholder="&nbsp;">
            <span class="label">E-mail</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <textarea type="text" id="msg" name="msg" required="" placeholder="&nbsp;" rows="4" cols="50"></textarea>
            <span class="label">Poruka</span>
            <span class="focus-bg"></span>
          </label>
          <button data-aos="zoom-in" class="hvr-bounce-to-right" type="submit" name="enviar" id="btn" onclick="modal('enviar','forms')" disabled>Poslati</button>
        </form>
        <!-- <div class="s-reque-forms-logo col-6 d-flex align-items-center">
          <img src="images/Home/img6.png" alt="">
        </div> -->
      </div>
    </div>
  </section>
</main>

<script>
  var contacto = document.getElementById("contact");
  contacto.className += " active";
</script>
<script>
  function habilitar() {
    t1 = document.getElementById("name").value.length;
    t2 = document.getElementById("lastname").value.length;
    t3 = document.getElementById("email").value.length;
    if (t1 >= 3 && t2 >= 3 && t3 >= 5) {
      document.getElementById("btn").disabled = false;
    } else {
      document.getElementById("btn").disabled = true;
    }
  }
  document.getElementById("email").addEventListener("keyup", habilitar);
  document.getElementById("lastname").addEventListener("keyup", habilitar);
  document.getElementById("name").addEventListener("keyup", habilitar);
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
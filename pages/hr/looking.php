<?php require_once('header.php'); ?>

</html>
<main>
    <!--Info-->
    <section id="look" class="seccion">
         <div class="s-look row">
             <div class="s-look-content col-6">
                 <h1 class="animate__animated animate__slideInLeft">Pošalji zahtjev</h1>
                 <p>Da biste dobili procjenu projekta, ispunite obrazac<br>
                     i mi ćemo vas kontaktirati</p>
             </div>
             <div class="s-look-img col-6 d-flex align-items-center justify-content-center">
                 <img src="../../images/Looking/img1.png" alt="">
             </div>
         </div>
     </section>

    <!--contact-->
    <section id="send" class="seccion">
        <div class="s-reque row">
            <div class="s-reque-forms row">
                <form class="form-group col-6">
                    <form class="form-group col-6" method="post" action="../../ofsystem/enviar_solicitud.php" id="forms" enctype="multipart/form-data">
                        <label for="inp" class="inp" data-aos="zoom-in">
                            <input type="text" id="employer" name="employer" required="" placeholder="&nbsp;">
                            <span class="label">Poslodavac</span>
                            <span class="focus-bg"></span>
                        </label>
                        <label for="inp" class="inp" data-aos="zoom-in">
                            <input type="email" id="email" name="email" required="" placeholder="&nbsp;">
                            <span class="label">E-pošta</span>
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
                            <span class="label">Pozicija</span>
                            <span class="focus-bg"></span>
                        </label>
                        <label for="inp" class="inp" data-aos="zoom-in">
                            <input type="number" min="1" max="100"id="number" name="number" required="" placeholder="&nbsp;">
                            <span class="label">Potreban broj radnika</span>
                            <span class="focus-bg"></span>
                        </label>
                        <label for="inp" class="inp" data-aos="zoom-in">
                            <textarea type="text" id="msg" name="msg" required="" placeholder="&nbsp;" rows="4" cols="50"></textarea>
                            <span class="label">Poruka</span>
                            <span class="focus-bg"></span>
                        </label>
                        <button data-aos="zoom-in" class="hvr-bounce-to-right" type="submit" name="enviar" id="btn" onclick="modal('enviar','forms')" disabled>Pošalji</button>
                    </form>
                    <!-- <div class="s-reque-forms-logo col-6 d-flex align-items-center">
          <img src="images/Home/img6.png" alt="">
        </div> -->
            </div>
        </div>
    </section>
</main>

<script>
  var contacto = document.getElementById("looking");
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
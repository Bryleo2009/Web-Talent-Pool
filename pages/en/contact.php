<?php require_once('header.php'); ?>

</html>
<main>
    <!--Info-->
    <section id="contacto" class="seccion">
        <div class="s-contacto row">
            <div class="s-contacto-content col-6 ">
                <h1>Contact us</h1>
                <p>Send us a message using the form below.</p>
            </div>
            <div class="s-contacto-img col-6 d-flex align-items-center justify-content-center">
                <img src="../../images/Contact/img1.png" alt="">
            </div>
        </div>
    </section>

    <!--contact-->
    <section id="send" class="seccion">
        <div class="s-reque row">
            <div class="s-reque-forms row">
                <form class="form-group col-6" method="post" action="../../ofsystem/enviar_contacto.php" id="forms" enctype="multipart/form-data">
                    <label for="inp" class="inp">
                        <input type="text" class="formulario-white" id="name" name="name" required="" placeholder="&nbsp;">
                        <span class="label">First name</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="text" class="formulario-white" id="lastname" name="lastname" required=""  placeholder="&nbsp;">
                        <span class="label">Last name</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="email" class="formulario-white" id="email" name="email" required="" placeholder="&nbsp;">
                        <span class="label">E-mail</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <textarea type="text" class="formulario-white" id="msg" name="msg" required="" placeholder="&nbsp;" rows="4" cols="50"></textarea>
                        <span class="label">Message</span>
                        <span class="focus-bg"></span>
                    </label>
                    <button type="submit" name="enviar" id="btn" onclick="modal('enviar','forms')" disabled>Send</button>
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
        title: "¡Correo enviado!",
        text: "El correo a sido enviado de forma exitosa",
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
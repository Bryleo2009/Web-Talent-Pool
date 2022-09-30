<?php require_once('header.php'); ?>

</html>
<main>
    <!--Info-->
    <section id="contacto" class="seccion">
        <div class="s-contacto row">
            <div class="s-contacto-content col-6 ">
                <h1>Kontaktirajte nas</h1>
                <p>Pošaljite nam poruku koristeći donji obrazac.</p>
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
                <form class="form-group col-6">
                    <label for="inp" class="inp">
                        <input type="text" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">Ime</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="text" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">Prezime</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="email" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">E-pošta</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <textarea type="text" id="inp" class="formulario-white" placeholder="&nbsp;" rows="4" cols="50"></textarea>
                        <span class="label">Poruka</span>
                        <span class="focus-bg"></span>
                    </label>
                    <button>Pošalji</button>
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
<?php require_once 'footer.php'; ?>
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
                <form class="form-group col-6">
                    <label for="inp" class="inp">
                        <input type="text" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">First name</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="text" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">Last name</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <input type="email" id="inp" class="formulario-white" placeholder="&nbsp;">
                        <span class="label">E-mail</span>
                        <span class="focus-bg"></span>
                    </label>
                    <label for="inp" class="inp">
                        <textarea type="text" id="inp" class="formulario-white" placeholder="&nbsp;" rows="4" cols="50"></textarea>
                        <span class="label">Message</span>
                        <span class="focus-bg"></span>
                    </label>
                    <button>Send</button>
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
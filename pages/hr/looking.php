<?php require_once('header.php'); ?>

</html>
<main>
    <!--Info-->
    <section id="look" class="seccion">
        <div class="s-look row">
            <div class="s-look-content col-6">
                <h1>Pošalji zahtjev</h1>
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
<?php require_once 'footer.php'; ?>
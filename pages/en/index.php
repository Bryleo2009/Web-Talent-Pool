<?php require_once('header.php'); ?>

</html>
<main>
  <!--Info-->
  <section id="info" class="seccion">
    <div class="s-info row">
      <div class="s-info-logo col-6 d-flex align-items-center justify-content-center">
        <img src="../../images/Home/undraw_co-working_re_w93t 2.png" alt="">
      </div>
      <div class="s-info-text col-6">
        <h1 class="animate__animated animate__slideInLeft">Looking for foreing workers?</h1>
        <p>Do you have a staff shortage for the upcoming tourist
          season? Whether you need personnel for the tourism sector,
          production, construction, or technical jobs, together with our
          partner in Lima we will help you find workers from Peru.</p>
        <a href="looking.php"><button class="hvr-bounce-to-right">Request</button></a>
      </div>
    </div>
    <img class="abst-1" src="../../images/Home/Abstract-3.png" alt="">
  </section>

  <!--Abstract-->
  <img class="abst-2" src="../../images/Home/Abstract-2.png" alt="">
  <img class="abst-3" src="../../images/Home/Abstract-1.png" alt="">

  <!--Procedure-->
  <section id="proce" class="seccion">
    <div class="s-proce row">
      <h1 data-aos="fade-up" class="text-center">Procedure</h1>
      <div class="s-proce-text col-12">
        <p>All you need to do is to fill in the form for the
          required worker profile, and we will do the
          recruitment. After we send you the CVs of the
          shortlisted candidates, there is a possibility of a
          video call interview. Upon final selection, the
          collection of documentation for a work permit
          will be started.
        </p>
      </div>
      <div class="row s-proce-items col-12">
        <div class="s-proce-item-content col-3" data-aos="flip-left">
          <h2>1</h2>
          <h1>Request for the desired profile</h1>
          <p>Occupation, job description, number of
            candidates, work experience, education
            and job-specific skills.</p>
        </div>
        <div class="s-proce-item-content col-3" data-aos="flip-left">
          <h2>2</h2>
          <h1>Selection of candidates</h1>
          <p>We select candidates for the required
            profile and deliver selected CVs to the
            client. Clients have the option of video
            interviews with shortlisted candidates.</p>
        </div>
        <div class="s-proce-item-content col-3" data-aos="flip-left">
          <h2>3</h2>
          <h1>Work permits</h1>
          <p>We collect the documentation from
            candidates that is required for obtaining a
            work permit. Visas are not required for
            citizens of Peru.</p>
        </div>
        <div class="s-proce-item-content col-3" data-aos="flip-left">
          <h2>4</h2>
          <h1>Arrival of candidates</h1>
          <p>We provide support with the candidate's
            travel arrangements.</p>
        </div>
      </div>
    </div>
    <img class="abst-4" src="../../images/Home/Abstract-1.png" alt="">
  </section>

  <!--Request-->
  <section id="reque" class="seccion">
    <div class="s-reque row">
      <div class="s-reque-title">
        <h1 data-aos="fade-up" class="text-center">Send request</h1>
        <p class="text-center">To receive a project estimate, fill out the form
          and we'll get in touch with you.</p>
      </div>
      <div class="s-reque-forms row">
        <form class="form-group request-home col-12" method="post" action="../../ofsystem/enviar_solicitud.php" id="forms" enctype="multipart/form-data">
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="employer" name="employer" required="" placeholder="&nbsp;">
            <span class="label">Employer</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="email" id="email" name="email" required="" placeholder="&nbsp;">
            <span class="label">E-mail</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="cel" name="cel" required="" placeholder="&nbsp;">
            <span class="label">Contact number</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="name" name="name" required="" placeholder="&nbsp;">
            <span class="label">Name</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="text" id="position" name="position" required="" placeholder="&nbsp;">
            <span class="label">Position</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <input type="number" min="1" max="100" id="number" name="number" required="" placeholder="&nbsp;">
            <span class="label">Required number of workers</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp" data-aos="zoom-in">
            <textarea type="text" id="msg" name="msg" required="" placeholder="&nbsp;" rows="4" cols="50"></textarea>
            <span class="label">Message</span>
            <span class="focus-bg"></span>
          </label>
          <button data-aos="zoom-in" class="hvr-bounce-to-right" type="submit" name="enviar" id="btn" onclick="modal('enviar','forms')" disabled>Send</button>
        </form>
      </div>
    </div>
  </section>

  <!--Reviews-->
  <section id="review" class="seccion">
    <div class="s-review row">
      <h1 data-aos="fade-up" class="text-center">Recent reviews</h1>
      <div class="row s-review-items col-12">
        <div class="s-review-item col-4" data-aos="fade-up-right">
          <div class="s-review-item-sup">
            <img src="../../images/Home/p1.jpg" alt="">
            <p>It generates hundreds of useful copy for your
              specific product and audience with the
              minimum effort.</p>
          </div>
          <div class="s-review-item-inf d-flex align-items-center justify-content-between">
            <div class="review-item-inf-name">
              <h2>Bryan Morán</h2>
              <h3>Web Developer</h3>
            </div>
            <div class="review-item-inf-star">
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
        </div>
        <div class="s-review-item col-4" data-aos="fade-up">
          <div class="s-review-item-sup">
            <img src="../../images/Home/p2.jpg" alt="">
            <p>It generates hundreds of useful copy for your
              specific product and audience with the
              minimum effort.</p>
          </div>
          <div class="s-review-item-inf d-flex align-items-center justify-content-between">
            <div class="review-item-inf-name">
              <h2>Bryan Morán</h2>
              <h3>Web Developer</h3>
            </div>
            <div class="review-item-inf-star">
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
            </div>
          </div>
        </div>
        <div class="s-review-item col-4" data-aos="fade-up-left">
          <div class="s-review-item-sup">
            <img src="../../images/Home/p3.jpg" alt="">
            <p>It generates hundreds of useful copy for your
              specific product and audience with the
              minimum effort.</p>
          </div>
          <div class="s-review-item-inf d-flex align-items-center justify-content-between">
            <div class="review-item-inf-name">
              <h2>Bryan Morán</h2>
              <h3>Web Developer</h3>
            </div>
            <div class="review-item-inf-star">
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star star-active"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
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
<?php require_once 'footer.php'; ?>
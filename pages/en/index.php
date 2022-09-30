<?php require_once('header.php'); ?>

</html>
<main>
  <!--Info-->
  <section id="info" class="seccion">
    <div class="s-info row">
      <div class="s-info-text col-6">
        <h1>Looking for foreing workers?</h1>
        <p>Do you have a staff shortage for the upcoming tourist
          season? Whether you need personnel for the tourism sector,
          production, construction, or technical jobs, together with our
          partner in Lima we will help you find workers from Peru.</p>
        <button>Request</button>
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
        <p>All you need to do is to fill in the form for the
          required worker profile, and we will do the
          recruitment. After we send you the CVs of the
          shortlisted candidates, there is a possibility of a
          video call interview. Upon final selection, the
          collection of documentation for a work permit
          will be started.
        </p>
      </div>
      <div class="s-proce-items col-7">
        <div class="row align-items-center">
          <div class="s-proce-img col-4">
            <img src="../../images/Home/img2.png" alt="">
          </div>
          <div class="s-proce-item_text col-8">
            <h1>1. Request for the desired profile</h1>
            <p>Occupation, job description, number of
              candidates, work experience, education
              and job-specific skills.</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="s-proce-img col-4">
            <img src="../../images/Home/img3.png" alt="">
          </div>
          <div class="s-proce-item_text col-8">
            <h1>2. Selection of candidates</h1>
            <p>We select candidates for the required
              profile and deliver selected CVs to the
              client. Clients have the option of video
              interviews with shortlisted candidates.</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="s-proce-img col-4">
            <img src="../../images/Home/img4.png" alt="">
          </div>
          <div class="s-proce-item_text col-8">
            <h1>3. Work permits</h1>
            <p>We collect the documentation from
              candidates that is required for obtaining a
              work permit. Visas are not required for
              citizens of Peru.</p>
          </div>
        </div>
        <div class="row align-items-center" style="padding-bottom: 0 !important;">
          <div class="s-proce-img col-4">
            <img src="../../images/Home/img5.png" alt="">
          </div>
          <div class="s-proce-item_text col-8">
            <h1>4. Arrival of candidates</h1>
            <p>We provide support with the candidate's
              travel arrangements.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Request-->
  <section id="reque" class="seccion">
    <div class="s-reque row">
      <div class="s-reque-title">
        <h1>Send request</h1>
        <p>To receive a project estimate, fill out the form <br>
          and we'll get in touch with you.</p>
      </div>
      <div class="s-reque-forms row">
        <form class="form-group col-6">
          <label for="inp" class="inp">
            <input type="text" id="inp" placeholder="&nbsp;">
            <span class="label">Employer</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp">
            <input type="email" id="inp" placeholder="&nbsp;">
            <span class="label">E-mail</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp">
            <input type="text" id="inp" placeholder="&nbsp;">
            <span class="label">Contact number</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp">
            <input type="text" id="inp" placeholder="&nbsp;">
            <span class="label">Name</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp">
            <input type="text" id="inp" placeholder="&nbsp;">
            <span class="label">Position</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp ">
            <select name="" id="inp" placeholder="&nbsp;">
              <option disabled selected>select a number</option>
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
            <span class="label">Required number of workers</span>
            <span class="focus-bg"></span>
          </label>
          <label for="inp" class="inp">
            <textarea type="text" id="inp" placeholder="&nbsp;" rows="4" cols="50"></textarea>
            <span class="label">Message</span>
            <span class="focus-bg"></span>
          </label>
          <button>Send</button>
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
<?php require_once 'footer.php'; ?>
<?php include "default.php"; ?>
<style>
  body {
    background-color: #F6F9FF !important;
    margin-top: 100px !important;
  }

  .right_conatct_social_icon {
    background: linear-gradient(to top right, #1325e8 -5%, #8f10b7 100%);
  }

  .contact_inner {
    background-color: #fff;
    position: relative;
    box-shadow: 20px 22px 44px #cccc;
    border-radius: 25px;
  }

  .contact_field {
    padding: 30px;
  }

  .right_conatct_social_icon {
    height: 100%;
  }

  .contact_field h3 {
    color: #000;
    font-size: 30px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 10px
  }

  .contact_field p {
    color: #000;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 35px;
  }

  .contact_field .form-control {
    border-radius: 0px;
    border: none;
    border-bottom: 1px solid #ccc;
  }

  .contact_field .form-control:focus {
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #1325e8;
  }

  .contact_field .form-control::placeholder {
    font-size: 13px;
    letter-spacing: 1px;
  }

  .contact_info_sec h4 {
    letter-spacing: 1px;
    padding-bottom: 10px;
    padding-left: 17px;
    padding-top: 10px;
    color:white;
  }
  .contact_info_sec{
    color:white;
  }

  .info_single {
    margin: 30px 0px;
  }

  .info_single i {
    margin-right: 15px;
  }

  .info_single span {
    font-size: 14px;
    letter-spacing: 1px;
  }

  button.contact_form_submit {
    background: linear-gradient(to top right, #1325e8 -5%, #8f10b7 100%);
    border: none;
    color: #fff;
    padding: 10px 15px;
    width: 100%;
    margin-top: 25px;
    border-radius: 35px;
    cursor: pointer;
    font-size: 14px;
    letter-spacing: 2px;
  }

  .socil_item_inner li {
    list-style: none;
  }

  .socil_item_inner li a {
    color: #fff;
    margin: 0px 15px;
    font-size: 14px;
  }

  .socil_item_inner {
    padding-bottom: 10px;
  }

  .map_sec {
    padding: 50px 0px;
  }

  .map_inner h4,
  .map_inner p {
    color: #000;
    text-align: center
  }

  .map_inner p {
    font-size: 13px;
  }

  .map_bind {
    margin-top: 50px;
    border-radius: 30px;
    overflow: hidden;
  }
</style>

<section class="contact_us">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="contact_inner">
          <div class="row">

            <div class="col-md-8">
              <div class="contact_form_inner">
                <div class="contact_field">
                  <h3>Contact Us</h3>
                  <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                  <input type="text" class="form-control form-group" placeholder="Name" />
                  <input type="text" class="form-control form-group" placeholder="Email" />
                  <textarea class="form-control form-group" placeholder="Message"></textarea>
                  <button class="contact_form_submit">Send</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="right_conatct_social_icon d-flex align-items-end">
                <div class="contact_info_sec">
                  <h4>Contact Info</h4>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-headset"></i>
                    <span>+91 8009 054294</span>
                  </div>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>info@flightmantra.com</span>
                  </div>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>1000+ Travel partners and 65+ Service city across India, USA, Canada & UAE</span>
                  </div>
                  <div class="socil_item_inner d-flex">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="map_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="map_inner">
          <h4>Find Us on Google Map</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quo beatae quasi assumenda,
            expedita aliquam minima tenetur maiores neque incidunt repellat aut voluptas hic dolorem sequi
            ab porro, quia error.</p>
          <div class="map_bind">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471220.5631094339!2d88.04952462217592!3d22.6757520733225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1596988408134!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mt-5 text-danger">
  <?php include "includes/footer.php"; ?>
</div>
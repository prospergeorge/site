<?php

  $formUrl = "https://formspree.io/f/xzblpaya";

?>

<section id="contact" class="contact border-bt">
  
  <div class="contactForm">

    <div class="container">

      <div class="row">

        <div class="col-md-12">
          
          <form action="<?=$formUrl?>" method="post">

            <div class="box">

              <div class="heading mb-4">
                <span> Contact </span> <br>
                <h3> Contact </h3>
              </div>

              <div class="d-md-flex justify-content-between mb-3">

                <div class="input mb-3 mb-md-0">
                  <i class="bx bx-user"></i>
                  <input type="text" name="name" id="fullName" placeholder="Full Name *" required>
                </div>

                <div class="input">
                  <i class="bx bx-envelope-open"></i>
                  <input type="email" name="_replyto" id="email" placeholder="Email *" required>
                </div>

              </div>

              <div class="d-md-flex justify-content-between mb-3">

                <div class="input mb-3 mb-md-0">
                  <i class="bx bx-mobile-alt"></i>
                  <input type="text" name="telephone" id="mobileNumber" placeholder="Mobile No">
                </div>

                <div class="input">
                  <input type="text" name="subject" id="subject" placeholder="Subject *" required>
                </div>

              </div>
              <textarea class="mb-3" name="message" placeholder="Message *"></textarea>

              <button type="submit" name="submit" class="my-btn m-0">Send <i class="bx bx-send"></i></button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="contactModal invisibleBox" id="contactModal">

    <div class="bars d-flex flex-column align-items-center justify-content-center closeModal">
      <div class="bar1"></div>
      <div class="bar2"></div>
    </div>

    <div class="contactForm m-0 my-5 my-md-0">

      <div class="container">

        <div class="row">

          <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
            
            <form action="<?=$formUrl?>" method="post">

              <div class="box">

                <div class="heading mb-4">
                  <span> Order now </span> <br>
                  <h3> Order now </h3>
                </div>

                <div class="input mb-3">
                  <i class="bx bx-user"></i>
                  <input type="text" name="name" id="fullName" placeholder="Full Name *" required>
                </div>

                <div class="input mb-3">
                  <i class="bx bx-envelope-open"></i>
                  <input type="email" name="_replyto" id="email" placeholder="Email *" required>
                </div>

                <div class="input mb-3">
                  <i class="bx bx-mobile-alt"></i>
                  <input type="text" name="telephone" id="mobileNumber" placeholder="Mobile No">
                </div>

                <div class="input d-none">
                  <input type="hidden" name="subject" id="subject" placeholder="Subject *" value="New Order">
                </div>

                <textarea class="mb-3" name="message" id="fixedMessage" placeholder="Message *"></textarea>

                <div class="text-center mb-4">

                  <button type="submit" name="submit" class="my-btn m-0">Send <i class="bx bx-send"></i></button>
                </div>

                <div>

                  <p class="text-center">Or Cantact us via</p>

                  <div class="d-flex justify-content-around social-links mt-3 text-center">

                    <a href="https://web.facebook.com/OfficialDesignWiz/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/offical_design_wiz/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://wa.me/message/VHWMGTLN2TYKA1" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/designwiz/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="https://www.fiverr.com/prospergeorge28" target="_blank" class="fiver fw-bold">fi</a>
                  </div>

                </div>

              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>

</section>
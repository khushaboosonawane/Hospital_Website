<?php
include("navbar.php");
?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contact Us</span>
          <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                <i class="ri-customer-service-2-line"></i>
                    <h5>Call Us</h5>
                     +91 <?= $row['hospital_mobile'] ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                <i class="ri-mail-send-line"></i>
                    <h5>Email Us</h5>
                     <?= $row['hospital_email'] ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                <i class="ri-map-pin-line"></i>
                    <h5>Location</h5>
                     <?= $row['hospital_address'] ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi mollitia sit perferendis maiores ratione aliquam?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="post" action="save_contect_info.php">
                 <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- create table contact_info (contact_id integer primary key auto_increment,name varchar(2000),email varchar(2000),subject varchar(2000),number varchar(10),message text) -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Full Name" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Query Topic" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="number" id="phone" type="number" class="form-control" placeholder="Your Phone Number" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message" required></textarea>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-main btn-round-full">Save Information</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.998378870044!2d74.73961167425259!3d19.107727050977587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb07bd3cc74a1%3A0xa1bd09ae48b4e788!2sSANAP%20HOSPITAL%20%26%20SONOGRAPHY%20CENTER!5e0!3m2!1sen!2sin!4v1713411354394!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

 

<section class="container my-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
        <iframe src="<?= $row['hospital_map_link'] ?>" width="100%" height="350" style="border:0;margin:0 auto" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>
<?php include 'header.php' ?>

<?php include 'contact-subheader.php' ?>

<!-- Contact Inner Page Section -------------->

<section class="contact-inner-sect-2">
    <div class="container">
        <div class="contact-inner-heading wow animate__slideInDown">
            <h1> Get In <span> Contact </span></h1>
        </div>

        <div class="contact-us-form">
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-10 col-lg-10 col-12">
                    <form action="https://teknocide.com/sending/" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6 col-12"><input class="wow animate__fadeInUp"
                                    data-wow-delay="0.4s" type="text" placeholder="Full Name" name="cn" required></div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-12"><input class="wow animate__fadeInUp"
                                    data-wow-delay="0.4s" type="text" placeholder="Last Name" name="gn" required></div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-12"><input class="wow animate__fadeInUp"
                                    data-wow-delay="0.4s" type="email" placeholder="Email" name="em" required></div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-12"><input class="wow animate__fadeInUp"
                                    data-wow-delay="0.4s" type="tel" placeholder="Number" name="pn" required></div>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-12"><textarea class="wow animate__fadeInUp"
                                    data-wow-delay="0.4s" placeholder="Message" name="msg" required></textarea></div>
                            <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                                <div class="contact-inner-btn">
                                    <button type="submit" name="submit" value="Submit">SEND
                                        MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Inner Page Section -------------->

<?php include 'footer.php' ?>
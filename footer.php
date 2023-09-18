<!-- Footer Section Start  ---------------->

<section class="footer-section">
    <div class="container">
        <div class="footer-row">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-content wow animate__fadeInUp">
                        <a href="https://teknocide.com/"><img class="img-fluid" src="images/footer-logo.png"
                                alt="Tecknocide"></a>
                        <p> Custom design solutions that help business outperform competition in the digital space.
                        </p>
                        <div class="footer-icons">
                            <a href="https://www.facebook.com/profile.php?id=100089721612084" target="_blank"><img
                                    src="images/facebook.png" alt="Tecknocide Facebook"></a>
                            <a href="https://www.instagram.com/teknocide/" target="_blank"><img
                                    src="images/instagram.png" alt="Tecknocide Instagram"></a>
                            <a class="twiter-logo-footer" href="https://twitter.com/InfoTeknocide" target="_blank"><img
                                    src="images/twitter.png" alt="Tecknocide Twitter"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-link wow animate__fadeInUp" data-wow-delay="0.5s">
                        <h4> Who We Are </h4>
                        <ul>
                            <li><a href="https://teknocide.com/">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="choose-us.php">Why Choose Us</a></li>
                            <li><a href="process.php">Our Process</a></li>
                            <li><a href="our-guarantee.php">Our Guarantees</a></li>
                            <li><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-link wow animate__fadeInUp" data-wow-delay="0.6s">
                        <h4> What We Do </h4>
                        <ul>
                            <li><a href="logo-design.html">Logo Design</a></li>
                            <li><a href="Web-design.html">Website Design</a></li>
                            <li><a href="corporate-branding.html">Corporate Branding</a></li>
                            <li><a href="video-animation.html">Video Animation</a></li>
                            <li><a href="our-guarantee-2.html">Mobile Apps</a></li>
                            <li><a href="digital-marketing.html">Digital Marketing</a></li>
                            <li><a href="animated-logo.html">Animated Logo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-link wow animate__fadeInUp" data-wow-delay="0.7s">
                        <h4> Quick Links </h4>
                        <ul>
                            <li><a href="packages.php">Packages</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="testimonial.php">Reviews</a></li>
                            <!-- <li><a href="portfolio.php">Portfolio</a></li> -->
                            <!-- <li><a href="blog">Blog</a></li> -->
                            <li><a href="faqs.php">FAQs</a></li>
                            <li><a href="overview.php">Overview</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-link contact wow animate__fadeInUp" data-wow-delay="0.8s">
                        <h4> Contact Us </h4>
                        <ul>
                            <li><a href="mailto:info@tecknocide.com"><img src="images/email.png" alt="Email"
                                        class="mail">
                                    info@teknocide.com</a></li>
                            <li><a href="tel:3479667884"><img src="images/call.png" alt="Call" class="phone"> (347)
                                    966-7884</a>
                            </li>
                            <li><a class="livechat-hover" href="#!"><img class="img-fluid" src="images/map.png"
                                        alt="Address"></a></li>
                            <li><a class="livechat-hover" href="javascript:void(Tawk_API.toggle())"><img
                                        class="img-fluid" src="images/live-chat.png" alt="Live Chat"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-line">
            <hr>
            <div class="copyright-content">
                <p> © 2023 Teknocide | All Rights Reserved </p>
            </div>
            <div class="terms-content">
                <ul>
                    <li><a href="terms-and-conditions.html"> Terms & Conditions </a></li>
                    <p> - </p>
                    <li><a href="privacy-policy.html"> Privacy Policy </a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Footer Section Start  ---------------->

<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>

    // Start of Tawk.to Script

    // var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    // (function () {
    //     var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    //     s1.async = true;
    //     s1.src = 'https://embed.tawk.to/63dd9b784742512879116494/1gocqek4h';
    //     s1.charset = 'UTF-8';
    //     s1.setAttribute('crossorigin', '*');
    //     s0.parentNode.insertBefore(s1, s0);
    // })();

    // End of Tawk.to Script


    new WOW(
        // { once: false }
        { once: false, boxClass: 'wow', animateClass: 'animated', offset: 0, mobile: true, live: true, scrollContainer: '.container', resetAnimation: true }).init();


    // dont know kis liye hy ------------
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }


    // function to change the content according to tabs --------- STARTS
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // function to change the content according to tabs --------- ENDS


    // JQUERY for slick ------------ START
    jQuery(document).ready(function () {
        'use strict';
        $('.work-card-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.testimonial-content').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.pricing-content').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    });
    /*ready*/
</script>

</body>


<!-- Mirrored from teknocide.com/beta/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 19:53:22 GMT -->

</html>
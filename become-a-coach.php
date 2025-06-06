<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Coach || Empower 1XL</title>
    <?php
    require "includes/head.php";
    ?>

</head>

<body>
    <?php
    require "includes/header.php";
    ?>

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Become <span class="text-lowercase">a</span> Coach</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="style-2">
                        Become <span class="text-lowercase">a</span> Coach
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contact Section Section Start -->
    <section class="contact-section section-padding">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <div class="section-title">
                                <span class="sub-content wow fadeInUp">
                                    <img src="assets/img/bale.png" alt="img">
                                    Become <span class="text-lowercase">a</span> Coach
                                </span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Don’t Hessite to Contact <br>
                                    Our Team Member
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium <br>
                                doloremque laudantium, totam rem aperiam
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right wow fadeInUp" data-wow-delay=".4s">
                            <h3>Send Us Message</h3>
                            <form action="#" id="contact-form" method="POST" class="contact-form-items">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="phone" id="phone" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email2" placeholder="Email ID">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="text" name="subject" id="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="theme-btn">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section Start -->
    <div class="map-section">
        <div class="map-items">
            <div class="googpemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <?php
    require "includes/newsletter-form.php";
    require "includes/footer.php";
    require "includes/newsletter-script.php";
    ?>

</body>

</html>
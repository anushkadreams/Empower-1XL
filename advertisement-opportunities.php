<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Opportunities || Empower 1XL</title>
    <?php
    require "includes/head.php";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <style>
        .iti {
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    require "includes/header.php";
    ?>

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Advertisement Opportunities</h1>
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
                        Advertisement Opportunities
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
                                    Advertisement Opportunities
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
                            <form method="POST" name="contactForm" id="contactForm" class="contact-form-items contact-form">
                                <div class="row g-4">
                                    <!-- name -->
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" required class="form-control name" name="name" id="name" placeholder="Full Name">
                                            <span class="alert-error" id="name-error"></span>
                                        </div>
                                    </div>

                                    <!-- contact number -->
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input value="+91" type="hidden" name="ccode" id="ccode">
                                            <input style="padding-left: 50px;" type="tel" required class="form-control mobile" name="mobile" id="mobile" placeholder="Contact Number">
                                            <span class="alert-error" id="mobile-error"></span>
                                        </div>
                                    </div>

                                    <!-- email -->
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="email" required name="email" id="email" class="form-control email" placeholder="Email ID">
                                            <span class="alert-error" id="email-error"></span>
                                        </div>
                                    </div>

                                    <!-- subject -->
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="text" required name="subject" id="subject" class="form-control" placeholder="Subject">
                                            <span class="alert-error" id="subject-error"></span>
                                        </div>
                                    </div>

                                    <!-- message -->
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <textarea name="adverstisementMessage" rows="6" id="adverstisementMessage" class="form-control message" placeholder="Message"></textarea>
                                            <span class="alert-error" id="message-error"></span>
                                        </div>
                                    </div>

                                    <!-- submit btn -->
                                    <div class="col-lg-6">
                                        <button type="submit" class="theme-btn">
                                            Submit
                                        </button>
                                    </div>


                                </div>
                                <!-- Form Message Display -->
                                <div class="col-lg-12 contact-form-msg">
                                    <span id="formMessages"></span>
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
    require "includes/footer.php";
    ?>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactForm");
            const formMessages = document.getElementById("formMessages");

            // Initialize intl-tel-input for the mobile field
            const phoneField = document.getElementById("mobile");
            const ccodeField = document.getElementById("ccode");
            const iti = window.intlTelInput(phoneField, {
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    fetch("https://api.ipdata.co?api-key=a04bad617b9d34e04e4c18cff91f85f37bdba35902a930ee1a4c4774&fields=country_code")
                        .then((response) => response.json())
                        .then((data) => callback(data.country_code.toLowerCase()))
                        .catch(() => callback("us"));
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            function setError(inputElement, errorElement, message) {
                if (message) {
                    errorElement.textContent = message;
                    errorElement.style.color = "red";
                    inputElement.classList.add("error-border");
                } else {
                    errorElement.textContent = "";
                    inputElement.classList.remove("error-border");
                }
            }

            function validateField(inputElement, errorElement, validation, errorMessage) {
                inputElement.addEventListener("blur", function() {
                    const value = inputElement.value.trim();
                    if (value.length > 0 && !validation(value)) {
                        setError(inputElement, errorElement, errorMessage);
                    } else {
                        setError(inputElement, errorElement, "");
                    }
                });
            }

            // Name validation
            const nameField = document.getElementById("name");
            const nameError = document.getElementById("name-error");
            validateField(nameField, nameError, (value) => /^[a-zA-Z\s]{2,50}$/.test(value), "Please enter a valid name.");

            // Email validation
            const emailField = document.getElementById("email");
            const emailError = document.getElementById("email-error");
            validateField(emailField, emailError, (value) => /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.(com|org|net|edu|in)$/.test(value), "Please enter a valid Email ID.");

            // Phone validation (special case)
            phoneField.addEventListener("blur", function() {
                const phoneError = document.getElementById("mobile-error");
                const dialCode = iti.getSelectedCountryData().dialCode;
                let rawNumber = phoneField.value.trim().replace(/[^\d]/g, "");

                if (rawNumber.startsWith(dialCode)) {
                    rawNumber = rawNumber.replace(new RegExp("^" + dialCode), "");
                }

                ccodeField.value = dialCode;
                phoneField.value = rawNumber;

                if (rawNumber.length > 0 && !iti.isValidNumber()) {
                    setError(phoneField, phoneError, "Please enter a valid Contact Number.");
                } else {
                    setError(phoneField, phoneError, "");
                }

                console.log("Formatted Mobile Number:", rawNumber);
                console.log("Country Code:", dialCode);
            });




            // Subject validation
            const subjectField = document.getElementById("subject");
            const subjectError = document.getElementById("subject-error");
            validateField(subjectField, subjectError, (value) => value.length > 0, "Subject cannot be empty.");

            // Message validation
            const messageField = document.getElementById("adverstisementMessage");
            const messageError = document.getElementById("message-error");
            validateField(messageField, messageError, (value) => value.length >= 10 && value.length <= 500, "Message must be between 10 and 500 characters.");

            // Form submission validation
            form.addEventListener("submit", function(event) {
                event.preventDefault();

                let isValid = true;

                const fields = [{
                        element: nameField,
                        errorElement: nameError,
                        validation: (value) => /^[a-zA-Z\s]{2,50}$/.test(value),
                        errorMessage: "Please enter a valid name (2-50 characters, no special symbols)."
                    },
                    {
                        element: emailField,
                        errorElement: emailError,
                        validation: (value) => /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.(com|org|net|edu|in)$/.test(value),
                        errorMessage: "Please enter a valid Email ID."
                    },
                    {
                        element: phoneField,
                        errorElement: document.getElementById("mobile-error"),
                        validation: () => iti.isValidNumber(),
                        errorMessage: "Please enter a valid Contact Number for the selected country."
                    },
                    {
                        element: subjectField,
                        errorElement: subjectError,
                        validation: (value) => value.length > 0,
                        errorMessage: "Please enter a subject."
                    },
                    {
                        element: messageField,
                        errorElement: messageError,
                        validation: (value) => value.length >= 10 && value.length <= 500,
                        errorMessage: "Message must be between 10 and 500 characters."
                    },
                ];

                fields.forEach(({
                    element,
                    errorElement,
                    validation,
                    errorMessage
                }) => {
                    const value = element.value.trim();
                    if (!validation(value)) {
                        setError(element, errorElement, errorMessage);
                        isValid = false;
                    } else {
                        setError(element, errorElement, "");
                    }
                });

                if (!iti.isValidNumber()) {
                    formMessages.textContent = "Please enter a valid Contact Number.";
                    formMessages.style.color = "red";
                    return;
                }

                if (!isValid) {
                    formMessages.textContent = "Please fix the errors above.";
                    formMessages.style.color = "red";
                    return;
                }


                // Submit the form via API if valid
                const data = Object.fromEntries(new FormData(form).entries());
                fetch("https://marscms-api.mini91.com/api/advertisement", {
                        method: "POST",
                        body: JSON.stringify({
                            ...data,
                            site: "67f0cdcb129fda7a090f8a4c"
                        }),
                        headers: {
                            "Content-Type": "application/json"
                        },
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        formMessages.textContent = data.message + "!" || "Form submitted successfully!";
                        formMessages.style.color = "green";
                        form.reset();
                        setTimeout(() => {
                            formMessages.textContent = "";
                        }, 5000);
                    })
                    .catch((error) => {
                        console.error(error);
                        formMessages.textContent = "There was an issue with your submission. Please try again.";
                        formMessages.style.color = "red";
                        setTimeout(() => {
                            formMessages.textContent = "";
                        }, 5000);
                    });
            });
        });
    </script>

</body>

</html>
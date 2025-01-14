<?php
// Page title
$title = "Contact  - Socially Elite";
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/meta-tags.php'); ?>
</head>
<body>

<div class="js-gsap-scrolltrigger-wrapper">
    <!--HEADER-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>

    <section class="hero js-gsap-scrolltrigger-up">
        <div class="hero__heading">
            <h1>Let's <span class="heading--primary heading--primary-lg">Get In Touch</span></h1>

            <p class="hero__heading__shadow hero__heading__shadow--md"><span>Get In Touch</span></p>
        </div>
    </section>

    <section class="container--md">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-7 mb--md-30 js-gsap-scrolltrigger-up">
                <div class="box box-form box--white-gradient">
                    <div class="box-form__content">
                        <h5 class="pre-heading box-form__pre-heading">Let’S Talk</h5>

                        <h2 class="box-form__heading">Contact Us Today</h2>
                        
                        <form id="contact-form" method="post" class="form-contact form-state" autocomplete="off" novalidate="true" data-parsley-validate novalidate>
                            <div class="input-field">
                                <input type="text" id="name" name="full_name" placeholder="Your name *"  autocomplete="off" data-parsley-error-message="Please enter a valid name!" required>

                                <div class="input-field__icon parsley-error-icon">
                                    <img data-src="/assets/images/icons/person.svg" alt="Person." width="18" height="21" class="lazy">
                                </div>
                            </div>

                            <div class="input-field">
                                <input type="email" id="email" name="email" placeholder="E-mail address *"  autocomplete="off" data-parsley-error-message="Please enter a valid email address!" class="input--mail" required>

                                <div class="input-field__icon">
                                    <img data-src="/assets/images/icons/mail.svg" alt="Mail." width="21" height="15" class="lazy">
                                </div>
                            </div>

                            <div class="input-field">
                                <input type="tel" id="phone" name="phone" placeholder="Phone number *"  autocomplete="off" data-parsley-error-message="Please enter a phone number!" required>

                                <div class="input-field__icon">
                                    <img data-src="/assets/images/icons/phone.svg" alt="Phone." width="20" height="21" class="lazy">
                                </div>
                            </div>

                            <div class="input-field">
                                <input type="text" id="company" name="company" placeholder="Company name *"  autocomplete="off" data-parsley-error-message="Please enter a company name!" required>

                                <div class="input-field__icon">
                                    <img data-src="/assets/images/icons/company.svg" alt="Company." width="27" height="21" class="lazy">
                                </div>
                            </div>

                            <div class="input-field">
                                <textarea id="message" name="message" rows="1" cols="45" placeholder="Type your message... *"  autocomplete="off" data-parsley-error-message="Please enter a message!" required></textarea>

                                <div class="input-field__icon input-field__icon-textarea">
                                    <img data-src="/assets/images/icons/message.svg" alt="Message." width="26" height="21" class="lazy">
                                </div>
                            </div>

                            <button type="submit" id="submit" name="submit" class="btn btn--secondary"><span>Submit</span></button>
                        </form>
                    </div>
                    
                    <div class="box-form__success">
                        <img src="/assets/images/icons/success-checkmark.svg" alt="Checkmark." width="161" height="161" class="box-form__success__icon">

                        <h5 class="pre-heading">Someone Will Contact <span class="d-inline-block">You Soon</span></h5>

                        <h2>Thank You!</h2>

                        <p>Your message has been <span class="d-inline-block">successfully sent.</span></p>
                    </div>

                    <div class="box-form__error">
                        <h5 class="pre-heading">oooooh no</h5>

                        <h2>Something <span class="d-inline-block">Went Wrong</span></h2>

                        <p>Your message was not sent. Please try again later.</p>

                        <a href="#" class="btn btn--primary">Try Again</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 txt--md-center js-gsap-scrolltrigger-up">
                <h3 class="txt--left heading-separator-bottom d-none d-lg-block">Contact Info</h3>

                <h5 class="txt--md-center txt--left mb--xs-5 mb--sm-10 mb--15">Address</h5>
                <p class="txt--lg mb--25 heading-separator-bottom--lg">1317 Edgewater Dr. STE 1394 Orlando FL, 32804</p>

                <h5 class="txt--md-center txt--left mb--xs-5 mb--sm-10 mb--15">E-Mail</h5>
                <p class="txt--lg mb--0"><a href="support@sociallyelite.com" class="link-properties txt--grey">support@sociallyelite.com</a></p>
            </div>
        </div>
    </section>
</div>

<!--LOGOS-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/logos.php'); ?>

<!--FOOTER-->
<div class="js-gsap-scrolltrigger-wrapper">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</div>

<!--SCRIPTS-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/scripts.php'); ?>
<script src="/assets/js/form-contact.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/parsley.min.js"></script>

</body>
</html>
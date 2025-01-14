<?php
// Page title
$title = "About Us - Socially Elite";
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
            <h1>Learn More <span class="heading--primary">About Us</span></h1>

            <p class="hero__heading__shadow hero__heading__shadow--xxl">About Us</p>
        </div>
    </section>

    <section class="container--sm js-gsap-scrolltrigger-up">
        <div class="video js-video">
            <iframe class="main-video" width="100%" height="100%" allow="autoplay" src="https://player.vimeo.com/video/848860103?h=e20fd4d659&amp;background=1&amp;autoplay=1" frameborder="0" allowfullscreen="" wmode="opaque" data-ready="true"></iframe>

            <div class="iframe-blocker js-iframe-blocker">
                <button class="btn-play js-play-sound"></button>
            </div>
        </div>
    </section>

    <section class="container">
        <h5 class="pre-heading js-gsap-scrolltrigger-up">Growth And Expertise</h5>

        <h2 class="js-gsap-scrolltrigger-up">How We Think</h2>

        <div class="row">
            <div class="col-12 col-md-6 mb--sm-30 js-gsap-scrolltrigger-up">
                <div class="box box-expertise">
                    <div class="box-expertise__img box-expertise__img--md">
                        <img data-src="/assets/images/icons/mission.svg" alt="Mission." width="119" height="119" class="lazy">
                    </div>

                    <h4 class="box-expertise__heading">Mission</h4>

                    <p>Our mission is to empower business owners to leverage the power of YouTube by providing them with the knowledge, tools, and support they need to create impactful videos, build their brand and drive business growth.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 js-gsap-scrolltrigger-up">
                <div class="box box-expertise">
                    <div class="box-expertise__img box-expertise__img--lg">
                        <img data-src="/assets/images/icons/vision.svg" alt="Vision." width="221" height="121" class="lazy">
                    </div>

                    <h4 class="box-expertise__heading">Vision</h4>

                    <p>We envision a world where every business owner has the ability to harness the potential of YouTube to connect with their target audience, share their expertise, and achieve their business objectives. We strive to be the trusted partner that equips and guides them on their YouTube journey, enabling their success in the digital landscape.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="container">
    <div class="js-gsap-scrolltrigger-wrapper">
        <h5 class="pre-heading js-gsap-scrolltrigger-up">Let’s Work Together!</h5>

        <h2 class="mb--xs-10 js-gsap-scrolltrigger-up">What We Do</h2>
    </div>
    
    <div class="js-gsap-scrolltrigger-wrapper">
        <div class="row gutters-lg boxes-info js-gsap-scrolltrigger-up">
            <div class="col-sm-6 col-md-3 mb--xs-0 mb--sm-15 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/channel-management.svg" alt="Channel Management." width="51" height="50" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Channel Management</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 mb--xs-0 mb--sm-15 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/youtube-production.svg" alt="Youtube Production." width="42" height="50" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Youtube Production</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 mb--xs-0 mb--sm-15 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/influencer-marketing.svg" alt="Influencer Marketing." width="53" height="74" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Influencer Marketing</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 mb--xs-0 mb--sm-15 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/youtube-consulting.svg" alt="Youtube Consulting." width="51" height="52" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Youtube Consulting</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="js-gsap-scrolltrigger-wrapper">
        <div class="row gutters-lg boxes-info boxes-info--reverse mb--xs-20 mb--sm-30 mb--lg-60 mb--90 js-gsap-scrolltrigger-up">
            <div class="col-sm-6 col-md-3 mb--xs-0 mb--sm-15 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/online-marketing.svg" alt="Online Marketing." width="51" height="40" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Online Marketing</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 mb--xs-0 mb--sm-15 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/youtube-algorithms.svg" alt="Youtube Algorithms." width="51" height="44" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Youtube Algorithms</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/design-services.svg" alt="Design Services." width="78" height="56" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Design Services</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/direct-response-marketing.svg" alt="Direct Response Marketing." width="51" height="60" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Direct Response Marketing</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="js-gsap-scrolltrigger-wrapper">
        <a href="/contact/" class="btn btn--primary btn--md mx--auto js-gsap-scrolltrigger-up">Get In Touch With Us <span class="d-xxs-none">Today</span></a>
    </div>
</section>

<section class="container js-gsap-scrolltrigger-wrapper">
    <h5 class="pre-heading js-gsap-scrolltrigger-up">Let’s Hang Out!</h5>

    <h2 class="js-gsap-scrolltrigger-up">Our Influencers</h2>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 mb--sm-20 mb--md-30 js-gsap-scrolltrigger-up">
            <img data-src="/assets/images/influencers-1.jpg" alt="Influencers." width="513" height="289" class="lazy img--style">
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb--sm-20 mb--md-30 js-gsap-scrolltrigger-up">
            <img data-src="/assets/images/influencers-2.jpg" alt="Influencers." width="513" height="289" class="lazy img--style">
        </div>

        <div class="col-12 col-md-6 col-lg-4 js-gsap-scrolltrigger-up">
            <img data-src="/assets/images/influencers-3.jpg" alt="Influencers." width="513" height="289" class="lazy img--style">
        </div>
    </div>
</section>

<!--FOOTER-->
<div class="js-gsap-scrolltrigger-wrapper">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</div>

<!--SCRIPTS-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/scripts-video.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/scripts.php'); ?>

</body>
</html>
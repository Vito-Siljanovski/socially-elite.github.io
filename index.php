<?php
// Page title
$title = "Introduction Page - Socially Elite";
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/meta-tags.php'); ?>
    <link rel="stylesheet" href="/assets/css/fancybox.min.css">
</head>
<body>

<div class="js-gsap-scrolltrigger-wrapper">
    <!--HEADER-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>

    <section class="hero">
        <div class="hero__heading js-gsap-scrolltrigger-up">
            <h1>How Can <span class="heading--primary">We Help?</span></h1>

            <p class="hero__heading__shadow">How Can We Help?</p>
        </div>
    </section>

    <!--INTRODUCTION-->
    <section class="container">
        <div class="boxes-introduction-wrapper">
            <div class="box accordion accordion-list box-introduction box--bg-gradient-secondary js-gsap-scrolltrigger-up">
                <div class="box-introduction__video box-introduction__video--secondary">
                    <iframe class="main-video" width="100%" height="100%" allow="autoplay" src="https://player.vimeo.com/video/848860103?h=e20fd4d659&amp;background=1&amp;autoplay=1" frameborder="0" allowfullscreen="" wmode="opaque" data-ready="true"></iframe>
                </div>

                <div class="box-introduction__header">
                    <h3 class="box-introduction__header__heading">Youtube Channel Management</h3>

                    <a href="/youtube-channel-management/" class="btn btn-discover d-block d-lg-none"></a>
                </div>

                <div class="box-introduction__content accordion__content">
                    <ul class="list list-circle">
                        <li>Channel Creation & Management</li>
                        <li>Brand Deal Management</li>
                        <li>PR Placements</li>
                        <li>4k Filming, Video Editing, and Content Creation</li>
                        <li>24/7 Communication</li>
                    </ul>

                    <div class="box-introduction__content__text">
                        <p>We’re your strategic ally for harnessing YouTube’s power for business growth.</p>
                        <p>As a specialized management agency, we amplify your brand’s online presence by creating captivating content and optimizing for maximum reach. Our goal is to attract leads, engage your audience, and drive significant business growth.</p>
                        <p>With our tailored approach, we transform YouTube channels into dynamic platforms that showcase your offerings and convert viewers into customers.</p>
                        <p>Your success is our priority, making sure your YouTube journey drives your business’s prosperity.</p>
                    </div>
                </div>

                <div class="box-introduction__btn">
                    <a href="/youtube-channel-management/" class="btn btn-discover"><span>Discover More</span></a>
                    <a href="#" class="btn btn-view js-accordion"></a>
                </div>
            </div>

            <div class="box accordion accordion-list box-introduction box--bg-gradient-primary js-gsap-scrolltrigger-up">
                <div class="box-introduction__video box-introduction__video--primary">
                    <iframe class="main-video" width="100%" height="100%" allow="autoplay" src="https://player.vimeo.com/video/848860103?h=e20fd4d659&amp;background=1&amp;autoplay=1" frameborder="0" allowfullscreen="" wmode="opaque" data-ready="true"></iframe>
                </div>

                <div class="box-introduction__header">
                    <h3 class="box-introduction__header__heading">Commercial Production</h3>

                    <a href="/commercial-production/" class="btn btn-discover d-block d-lg-none"></a>
                </div>

                <div class="box-introduction__content accordion__content">
                    <ul class="list list-circle">
                        <li>Cinematic Visuals</li>
                        <li>Professional Filming & Editing</li>
                        <li>Crystal Clear Audio</li>
                        <li>Dynamic Video Production</li>
                        <li>Advanced Equipment</li>
                        <li>Anywhere in the US</li>
                    </ul>

                    <div class="box-introduction__content__text">
                        <p>Our production blends creativity and expertise, enhancing your brand’s visual presence. We craft content meticulously, ensuring effective communication and aesthetic appeal.</p>
                        <p>Through strategic storytelling and seamless branding, we use cutting-edge equipment and editing for your vision. Efficiency ensures timely delivery, while captivating effects add a touch of magic.</p>
                        <p>From concept to execution, we amplify your brand’s impact, captivating your audience.</p>
                    </div>
                </div>

                <div class="box-introduction__btn">
                    <a href="/commercial-production/" class="btn btn-discover"><span>Discover More</span></a>
                    <a href="#" class="btn btn-view js-accordion"></a>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</div>

<!--POPUP-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/exit-popup.php'); ?>

<!--SCRIPTS-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/scripts.php'); ?>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/parsley.min.js"></script>
<script src="/assets/js/bounceback.min.js"></script>
<script src="/assets/js/fancybox.min.js"></script>
<script src="/assets/js/exit-popup.min.js"></script>

</body>
</html>
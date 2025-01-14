<?php
// Page title
$title = "Youtube Channel Management - Socially Elite";
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/meta-tags.php'); ?>

    <link rel="stylesheet" href="/assets/css/fancybox.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">

</head>
<body>

<div class="js-gsap-scrolltrigger-wrapper">
    <!--HEADER-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>

    <section class="hero">
        <div class="hero__heading js-gsap-scrolltrigger-up">
            <h1>We Create <span class="heading--primary">Youtubers!</span></h1>

            <p class="hero__heading__shadow hero__heading__shadow--xl">Youtubers</p>
        </div>
    </section>

    <section class="container--lg">
        <div class="wrapper--md mb--xs-10 js-gsap-scrolltrigger-up">
            <div class="video js-video">
                <iframe class="main-video" width="100%" height="100%" allow="autoplay" src="https://player.vimeo.com/video/848860103?h=e20fd4d659&amp;background=1&amp;autoplay=1" frameborder="0" allowfullscreen="" wmode="opaque" data-ready="true"></iframe>

                <div class="iframe-blocker js-iframe-blocker">
                    <button class="btn-play js-play-sound"></button>
                </div>
            </div>
        </div>


        <div class="row boxes-info mb--xs-10 mb--lg-20">
            <div class="col-sm-6 col-md-3 mb--xs-0 mb--sm-15 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/channel-management.svg" alt="Channel Management." width="51" height="50" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Channel <br class="d-none d-md-block d-xl-none">Management</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 mb--xs-0 mb--sm-15 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/youtube-production.svg" alt="Youtube Production." width="42" height="50" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Youtube <br class="d-none d-md-block d-xl-none">Production</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/influencer-marketing.svg" alt="Influencer Marketing." width="53" height="74" class="lazy box-info__img">
                    </div>

                    <h6 class="box-info__heading">Influencer <br class="d-none d-md-block d-xl-none">Marketing</h6>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 js-gsap-scrolltrigger-up">
                <div class="box box-info">
                    <div class="box-info__img">
                        <img data-src="/assets/images/icons/youtube-consulting.svg" alt="Youtube Consulting." width="51" height="52" class="lazy">
                    </div>

                    <h6 class="box-info__heading">Youtube <br class="d-none d-md-block d-xl-none">Consulting</h6>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center">
            <a href="#cta" class="btn btn--xs btn--secondary mb--xs-20 mr--xs-0 mr--35 js-gsap-scrolltrigger-up">Get Started</a>

            <a href="/about-us/" class="btn btn--xs btn--primary js-gsap-scrolltrigger-up">About Us</a>
        </div>
    </section>
</div>

<section class="container">
    <div class="js-gsap-scrolltrigger-wrapper">
        <h5 class="pre-heading js-gsap-scrolltrigger-up">Let’s Work Together!</h5>

        <h2 class="js-gsap-scrolltrigger-up">Who We <span class="d-inline-block">Work With</span></h2>

        <div class="row justify-content-center mb--xs-30 mb--40">
            <div class="col-12 col-sm-6 col-md-4 mb--sm-30 js-gsap-scrolltrigger-up">
                <div class="box box-work">
                    <div class="box-work__img">
                        <img data-src="/assets/images/icons/businesses.svg" alt="Businesses." width="172" height="160" class="lazy">
                    </div>

                    <h5 class="box-work__heading">Businesses</h5>

                    <p>Businesses who are ready to extend their brand likeness to YouTube.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb--sm-30 js-gsap-scrolltrigger-up">
                <div class="box box-work">
                    <div class="box-work__img">
                        <img data-src="/assets/images/icons/full-time-creators.svg" alt="Full-Time Creators." width="160" height="160" class="lazy">
                    </div>

                    <h5 class="box-work__heading">Full-Time Creators</h5>

                    <p>Serious full-time creators who are  are ready for a team that can handle it all from A-Z.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 js-gsap-scrolltrigger-up">
                <div class="box box-work">
                    <div class="box-work__img">
                        <img data-src="/assets/images/icons/brands.svg" alt="Brands." width="161" height="160" class="lazy">
                    </div>

                    <h5 class="box-work__heading">Brands</h5>

                    <p>Brands That are in need of high-end commercial productions, design and editing.</p>
                </div>
            </div>
        </div>

        <a href="/contact/" class="btn btn--primary btn--lg mx--auto js-gsap-scrolltrigger-up">Schedule A Call <span class="d-xxs-none d-inline">& Learn More</span></a>
    </div>
</section>

<!--LOGOS-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/logos.php'); ?>

<section class="container">
    <div class="js-gsap-scrolltrigger-wrapper">
        <h5 class="pre-heading js-gsap-scrolltrigger-up">Knowledge & Experience</h5>

        <h2 class="js-gsap-scrolltrigger-up">Our Services</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-xl-4 mb--xs-15 mb--lg-30 js-gsap-scrolltrigger-up">
                <div class="box box-services" style="background-image: url('/assets/images/youtube-coaching-consulting.jpg')">
                    <div class="box-services__txt">
                        <h5 class="box-services__heading">YouTube Coaching & Consulting</h5>

                        <p>New to YouTube or already established and need a new spin? This plan is for you! Learn YouTube Studio Analytics, Advanced YouTube SEO, how to improve watch time and more!</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 mb--xs-15 mb--lg-30 js-gsap-scrolltrigger-up">
                <div class="box box-services" style="background-image: url('/assets/images/the-youtuber.jpg')">
                    <div class="box-services__txt">
                        <h5 class="box-services__heading">The YouTuber</h5>

                        <p>This is for YouTubers or Brands looking to get on YouTube. The entire service is White Glove from A-Z. From Content Planning to Video Editing, Thumbnails, Negotiations, and more!</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 js-gsap-scrolltrigger-up">
                <div class="box box-services" style="background-image: url('/assets/images/youtuber-pro.jpg')">
                    <div class="box-services__txt">
                        <h5 class="box-services__heading">YouTuber Pro</h5>

                        <p>This is for the team that wants to go pro on YouTube. Our team will fly to you to batch record all of your monthly videos in 4k. This is the ultimate package for serious businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="js-gsap-scrolltrigger-wrapper">
        <h5 class="pre-heading js-gsap-scrolltrigger-up">Let’s Work Together!</h5>
        
        <h2 class="js-gsap-scrolltrigger-up">What We Do</h2>

        <div class="row">
            <div class="col-12 col-md-6 mb--xs-20 mb--sm-30 mb--45 js-gsap-scrolltrigger-up">
                <div class="box box-video box-video--client">
                    <div class="box-video__video">
                        <div class="video js-video">
                            <iframe class="main-video" width="100%" height="100%" allow="autoplay" src="https://player.vimeo.com/video/848860103?h=e20fd4d659&amp;background=1&amp;autoplay=1" frameborder="0" allowfullscreen="" wmode="opaque" data-ready="true"></iframe>

                            <div class="iframe-blocker js-iframe-blocker">
                                <button class="btn-play js-play-sound"></button>
                            </div>
                        </div>

                        <div class="box-video__description">
                            <h5 class="box-video--client__heading">Mia Cavic</h5>

                            <p class="box-video__description__txt">Human Resources Manager</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb--xs-20 mb--sm-30 mb--45 js-gsap-scrolltrigger-up">
                <div class="box box-video box-video--client">
                    <div class="box-video__video">
                        <div class="video js-video">
                            <iframe class="main-video" width="100%" height="100%" allow="autoplay" src="https://player.vimeo.com/video/848860103?h=e20fd4d659&amp;background=1&amp;autoplay=1" frameborder="0" allowfullscreen="" wmode="opaque" data-ready="true"></iframe>

                            <div class="iframe-blocker js-iframe-blocker">
                                <button class="btn-play js-play-sound"></button>
                            </div>
                        </div>

                        <div class="box-video__description">
                            <h5 class="box-video--client__heading">Jerry Pratt</h5>

                            <p class="box-video__description__txt">E-Commerce Store Owner</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb--xs-20 mb--sm-30 js-gsap-scrolltrigger-up">
                <div class="box box-video box-video--client">
                    <div class="box-video__video">
                        <div class="video js-video">
                            <iframe class="main-video" width="100%" height="100%" allow="autoplay" src="https://player.vimeo.com/video/848860103?h=e20fd4d659&amp;background=1&amp;autoplay=1" frameborder="0" allowfullscreen="" wmode="opaque" data-ready="true"></iframe>

                            <div class="iframe-blocker js-iframe-blocker">
                                <button class="btn-play js-play-sound"></button>
                            </div>
                        </div>

                        <div class="box-video__description">
                            <h5 class="box-video--client__heading">Jason Hanson</h5>

                            <p class="box-video__description__txt">Full-Time Content Creator</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 js-gsap-scrolltrigger-up">
                <div class="box box-video box-video--client">
                    <div class="box-video__video">
                        <div class="video js-video">
                            <iframe class="main-video" width="100%" height="100%" allow="autoplay" src="https://player.vimeo.com/video/848860103?h=e20fd4d659&amp;background=1&amp;autoplay=1" frameborder="0" allowfullscreen="" wmode="opaque" data-ready="true"></iframe>

                            <div class="iframe-blocker js-iframe-blocker">
                                <button class="btn-play js-play-sound"></button>
                            </div>
                        </div>

                        <div class="box-video__description">
                            <h5 class="box-video--client__heading">Allyson Taylor</h5>

                            <p class="box-video__description__txt">Real estate investor & Entrepreneur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="js-gsap-scrolltrigger-wrapper">
        <h5 class="pre-heading js-gsap-scrolltrigger-up">Great Talents, <span class="d-inline-block">Maximum Potential</span></h5>
        
        <h2 class="js-gsap-scrolltrigger-up">Meet The Creators</h2>

        <div class="row justify-content-center mb--xs-30 mb--sm-40 mb--50">
            <div class="col-12 col-md-6 col-xl-4 mb--lg-30 js-gsap-scrolltrigger-up">
                <div class="box box-creator">
                    <div class="box-creator__img">
                        <img data-src="/assets/images/creators/jason-hanson.jpg" alt="Jason Hanson." width="513" height="342" class="lazy js-creator-img">
                    </div>

                    <div class="box-creator__content">
                        <h5 class="box-creator__fn js-creator-fn">Jason Hanson</h5>
                        
                        <div class="box-creator__content__txt js-creator-txt">
                            <p>Jason Hanson is a former CIA officer turned renowned security expert, author, and YouTube personality. With a background in intelligence operations, he brings a unique perspective to the realm of personal safety and self-defense. Jason's extensive knowledge in espionage and covert operations has been instrumental in providing practical advice to individuals seeking to protect themselves and their loved ones.</p>
                            <p>As the founder of Spy Escape & Evasion, Jason has dedicated his career to educating the public on essential skills for staying safe in an unpredictable world. He is a best-selling author, having penned books on various aspects of personal security. Through his engaging online content and dynamic presentations, Jason empowers people with the tools and knowledge they need to navigate the challenges of the modern world.</p>
                            <p>With a growing community of followers, Jason continues to be a trusted source for practical, actionable advice on self-defense, survival, and protection. His unique blend of expertise, experience, and relatability has solidified his position as a leading figure in the field of personal security.</p>
                        </div>
                    </div>

                    <div class="box-creator__footer">
                        <div class="box-creator__statistics js-creator-statistics">
                            <p><strong class="numbers fw--extrabold">390K+</strong> Subscribers</p>
                            <p><strong class="numbers fw--extrabold">22.5M+</strong> Views</p>
                        </div>

                        <a href="#" class="btn btn-plus js-trigger-creator-popup js-creator-btn"><span>@JasonHansonSpyBriefing</span></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb--lg-30 js-gsap-scrolltrigger-up">
                <div class="box box-creator">
                    <div class="box-creator__img">
                        <img data-src="/assets/images/creators/chris-sajnog.jpg" alt="Chris Sajnog." width="513" height="342" class="lazy js-creator-img">
                    </div>

                    <div class="box-creator__content">
                        <h5 class="box-creator__fn js-creator-fn">Chris Sajnog</h5>
                                
                        <div class="box-creator__content__txt js-creator-txt">
                            <p>Chris Sajnog dedicated his life to training the world's most elite warriors, serving with honor as a US Navy SEAL. Following a demanding deployment, he returned home to a profound realization - his two boys needed him more than the SEAL Teams. With two decades of devoted service to his country, Chris made the transition into a new chapter of life, embracing the responsibilities of fatherhood.</p>
                            <p>Drawing from his extensive experience as a Master Training Specialist and his significant contribution to writing the US Navy SEAL Sniper Manual, Chris authored two acclaimed books, 'How to Shoot Like a Navy SEAL' and 'Navy SEAL Shooting', which are founded on the cutting-edge New Rules of Marksmanship.</p>
                            <p>He generously shares valuable firearms training-related content, including informative videos and recommended products, all aimed at assisting you in mastering the art of shooting with speed and ease, and ultimately, living with the spirit of a warrior.</p>
                        </div>
                    </div>

                    <div class="box-creator__footer">
                        <div class="box-creator__statistics js-creator-statistics">
                            <p><strong class="numbers fw--extrabold">233K+</strong> Subscribers</p>
                            <p><strong class="numbers fw--extrabold">8M+</strong> Views</p>
                        </div>

                        <a href="#" class="btn btn-plus js-trigger-creator-popup js-creator-btn"><span>@ChrisSajnogs</span></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 js-gsap-scrolltrigger-up">
                <div class="box box-creator">
                    <div class="box-creator__img">
                        <img data-src="/assets/images/creators/matt-numrich.jpg" alt="Matt Numrich." width="513" height="342" class="lazy js-creator-img">
                    </div>

                    <div class="box-creator__content">
                        <h5 class="box-creator__fn js-creator-fn">Matt Numrich</h5>

                        <div class="box-creator__content__txt js-creator-txt">
                            <p>Matt Numrich, a martial arts luminary with over 30 years of dedicated practice, brings a wealth of experience to the world of self-defense. His journey in martial arts has been marked by rigorous training and extensive real-world application, solidifying his expertise in combat techniques.</p>
                            <p>Through his dynamic YouTube channel, Matt extends his knowledge to a global audience. His tutorials cover an array of self-defense techniques, sparring strategies, and practical combat skills. What sets Matt apart is his ability to convey complex concepts in an accessible manner, making it possible for practitioners of all levels to benefit from his teachings.</p>
                            <p>Beyond the screen, Matt engages with the community through workshops and seminars, offering hands-on training and an opportunity for practitioners to interact directly with him. His approach places a strong emphasis on creating a supportive learning environment, fostering growth, respect, and empowerment among his students. Matt Numrich's impact in the realm of self-defense is a testament to his unwavering commitment to equipping individuals with the tools they need to navigate the world safely and confidently.</p>
                        </div>
                    </div>

                    <div class="box-creator__footer">
                        <div class="box-creator__statistics js-creator-statistics">
                            <div class="box-creator__statistics__talent">
                                <img data-src="/assets/images/icons/star-green.svg" alt="Star." width="20" height="20" class="lazy">
                                
                                <p>Rising Talent</p>
                            </div>
                        </div>

                        <a href="#" class="btn btn-plus js-trigger-creator-popup js-creator-btn"><span>@SifuMattNumrich</span></a>
                    </div>
                </div>
            </div>
        </div>

        <a href="/creators/" class="btn btn--primary btn--sm mx--auto js-gsap-scrolltrigger-up">View All Creators</a>
    </div>
</section>

<section class="js-gsap-scrolltrigger-wrapper">
    <div class="scroller__wrapper">
        <div class="scroller js-gsap-scrolltrigger-up" data-direction="right" data-speed="slow">
            <div class="scroller__inner js-gsap-scrolltrigger-up">
                <div class="scroller__txt">
                    YouTube Channel Management
                </div>

                <div class="scroller__txt">
                    YouTube Production
                </div>

                <div class="scroller__txt">
                    YouTube Consulting
                </div>

                <div class="scroller__txt">
                    Youtube Algorithm Knowledge
                </div>
            </div>
        </div>

        <div class="scroller js-gsap-scrolltrigger-up" data-direction="left" data-speed="slow">
            <div class="scroller__inner js-gsap-scrolltrigger-up">
                <div class="scroller__txt">
                    Online Marketing
                </div>

                <div class="scroller__txt">
                    Direct Response Marketing
                </div>

                <div class="scroller__txt">
                    Influencer Marketing
                </div>

                <div class="scroller__txt">
                    Design Services
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cta" class="container">
    <div class="js-gsap-scrolltrigger-wrapper">
        <h5 class="pre-heading js-gsap-scrolltrigger-up">Simple Pricing Plans!</h5>
        
        <h2 class="js-gsap-scrolltrigger-up">Pricing For <span class="d-inline-block">Every Creator</span></h2>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-xl-4 mb--xs-20 mb--lg-30 js-gsap-scrolltrigger-up">
                <div class="box box-plan box--purple-gradient">
                    <div class="box-plan__header">
                        <div class="box-plan__header__txt">
                            <h5 class="box-plan__header__heading">Youtube Coaching And Consulting</h5>

                            <p class="box-plan__header__sub-heading">New to YouTube or need a <span class="d-inline-block">new spin.</span></p>
                        </div>

                        <p class="box-plan__header__price"><span class="txt--purple">$1800</span> <span class="box-plan__header__price--sm">/monthly</span></p>
                    </div>

                    <div class="box-plan__content">
                        <h6 class="box-plan__content__heading">What’s Included:</h6>

                        <ul class="list list-circle-dashed">
                            <li>2 - 60 Minute Coachings/ mo</li>
                            <li>YouTube Studio Analytics</li>
                            <li>Keep up with the Trends</li>
                            <li>Learn Advanced YouTube SEO</li>
                            <li>Learn to improve Watch Time</li>
                            <li>Thumbnail Coaching</li>
                            <li>No Contract</li>
                        </ul>

                        <a href="#" class="btn btn--primary btn--xl">Purchase Plan</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-4 mb--xs-20 mb--lg-30 js-gsap-scrolltrigger-up">
                <div class="box box-plan box--green-gradient">
                    <div class="box-plan__header">
                        <div class="box-plan__header__txt">
                            <h5 class="box-plan__header__heading">The Youtuber</h5>

                            <p class="box-plan__header__sub-heading">Full service YouTube management for serious creators <span class="d-inline-block">and brands.</span></p>
                        </div>

                        <p class="box-plan__header__price"><span class="txt--green">$3800</span> <span class="box-plan__header__price--sm">/monthly</span></p>
                    </div>

                    <div class="box-plan__content">
                        <h6 class="box-plan__content__heading">What’s Included:</h6>

                        <ul class="list list-circle-dashed">
                            <li>12 Videos, Thumbnails & Shorts/mo</li>
                            <li>Brand Deal Negotiations </li>
                            <li>Automated Video Posting</li>
                            <li>Comment Moderation</li>
                            <li>Channel Setup & Design</li>
                            <li>Private Dashboard Access</li>
                            <li>No Contract</li>
                        </ul>

                        <a href="#" class="btn btn--primary btn--xl">Purchase Plan</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-4 js-gsap-scrolltrigger-up">
                <div class="box box-plan box--white-gradient">
                    <div class="box-plan__header">
                        <div class="box-plan__header__txt">
                            <h5 class="box-plan__header__heading">The Youtuber Pro</h5>

                            <p class="box-plan__header__sub-heading">Skip the learning process and come out of the gates looking like <span class="d-inline-block">a pro.</span></p>
                        </div>

                        <p class="box-plan__header__price"><span class="txt--white">$5800</span> <span class="box-plan__header__price--sm">/monthly</span></p>
                    </div>

                    <div class="box-plan__content">
                        <h6 class="box-plan__content__heading">What’s Included:</h6>

                        <ul class="list list-circle-dashed">
                            <li>Everything in “THE YOUTUBER” plan</li>
                            <li>Cinematic 4k B-Roll Filming</li>
                            <li>Look Like a Top YouTuber</li>
                            <li>Studio Design and Setup</li>
                            <li>Unlimited Backup Storage</li>
                            <li>PR Placements and Collaborations</li>
                            <li>24/7 Channel Manager Access</li>
                        </ul>

                        <a href="#" class="btn btn--primary btn--xl">Purchase Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--FAQS-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/faq.php'); ?>

<!--FOOTER-->
<div class="js-gsap-scrolltrigger-wrapper">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</div>

<!--POPUP CREATOR-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/partials/popup-creator.php'); ?>

<!--SCRIPTS-->
<script src="/assets/js/fancybox.min.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/scripts.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/scripts-video.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/scripts-popup-creator.php'); ?>

</body>
</html>
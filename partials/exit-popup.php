<div id="exit-popup" class="popup box-form">
    <div class="popup__wrapper">
        <div class="popup__txt">
            <h3 class="popup__title">Want To <span class="txt--green">Monetize</span> <br class="d-block d-lg-none">Your Channel <span class="txt--green">FAST</span>?</h3>

            <img src="/assets/images/playbook.png" alt="Play Book." width="332" height="358" class="popup__playbook d-block d-sm-none">
            
            <ul class="list list-checkmark">
                <li>Proven monetization strategies.</li>
                <li>How much money you can really earn.</li>
                <li>The fastest ways to get monetized.</li>
                <li>And much more!</li>
            </ul>
        </div>
        
        <img src="/assets/images/playbook.png" alt="Play Book." width="332" height="358" class="popup__playbook d-none d-sm-block">
    </div>
    
    <h5 class="mb--10">Get Your <br class="d-block d-sm-none"><span class="txt--green">Free Copy</span> Today!</h5>

    <form id="copy-form" method="post" class="form-contact form-state" autocomplete="off" novalidate="true" data-parsley-validate novalidate>
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

        <button type="submit" id="submit" name="submit" class="btn btn--secondary"><span>Submit</span></button>
    </form>

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
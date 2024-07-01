<?php include_once ("include/header.php") ?>
<style>
    .banner__area-two
    {
        padding: 0px;
    padding-top: 50px;
    min-height: 0px;
    padding-bottom: 25px;
    text-align: center;
    background: #868e9f47;
    }
    .banner__content-two p {
    margin-bottom: 30px;
    width: 100%;
    font-size: 25px;
    font-weight: 600;
}
</style>
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/contactus-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- breadcrumb-area-end -->
         <!-- banner-area -->
        <section class="banner__area-two banner__bg-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner__content-two">
                            <h2 class="title">Compare Mortgage Offers</h2>
                            <p>Start the process by filling out one of our forms to find out what you may qualify for!</p>
                            <a class='btn border-btn' href='#'>I Want My Mortgage Rate Quote!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->
        <!-- contact-area -->
        <section class="contact__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact__content">
                            <div class="section-title mb-35">
                                <h2 class="title">How can we help you?</h2>
                            </div>
                            <div class="contact__info">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-pin"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Address</h4>
                                            <p>12150 SW 128th Ct, <br>Miami, Florida 33186</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Phone</h4>
                                            <a href="tel:(888) 241-3106">(888) 241-3106</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-mail"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">E-mail</h4>
                                            <a href="mailto:info@ollender.com">info@ollender.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <div class="contact__form-wrap">
                            <h2 class="title">Give Us a Message</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="contact-form" action="#" method="POST">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="last_name" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="form-grp checkbox-grp">
                                    <input type="checkbox" name="checkbox" id="checkbox">
                                    <label for="checkbox">By providing your information, you agree to our <a href="terms-of-use.php" target="_blank">Terms Of Use</a>.</label>
                                </div>
                                <button type="submit" class="btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

<?php include_once ("include/footer.php") ?>
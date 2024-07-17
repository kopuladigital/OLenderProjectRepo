<?php include_once ("include/header.php") ?>
<style>
    input[type="text"] {
     width: 100%;
    border: 1px solid #38383842;
    border-radius: 4px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
    transition: 0.3s;
    height: 43px;
}

input[type="text"]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input[type="text"] {
  padding-left: 50px;
}

.inputWithIcon {
    position: relative;
    max-width: 300px;
    text-align: center;
     margin: auto;
    margin-bottom: 10px;

}

.inputWithIcon i {
        position: absolute;
    left: 0;
    top: 9px;
    padding: 8px 10px;
    color: #ffffff;
    transition: 0.3s;
    font-size: 25px;
    background: #00143d;
    border-radius: 5px 0px 0px 5px;
}

.inputWithIcon input[type="text"]:focus + i {
  color: dodgerBlue;
}

.inputWithIcon.inputIconBg i {
  background-color: #aaa;
  color: #fff;
  padding: 9px 4px;
  border-radius: 4px 0 0 4px;
}

.inputWithIcon.inputIconBg input[type="text"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
.checker-block {
width: 100%;
    margin: 0;
    clear: both;
    border: none;
    outline: none;
    text-decoration: none;
    background: rgb(0 20 61 / 7%);
    padding: 15px;
    border-radius: 4px;
    padding-bottom: 5px;
}
.checker-block .titel-text {
width: 100%;
padding: 0 0 8px 0;
margin: 0;
font-size: 12px;
font-weight: 600;
clear: both;
line-height: 12px;
color: #000;
}
.checker-inner-box {
width: 100%;
display: flex;
justify-content: flex-start;
align-items: center;
padding: 0;
margin: 0;
border: none;
outline: none;
text-decoration: none;
}
.checker-inner-box .sine {
padding: 5px 8px;
font-weight: bold;
font-size: 20px;
border: none;
outline: none;
}
.checker-inner-box .checker-box {
width: 60px;
height: auto;
padding: 0;
margin: 0;
border: none;
outline: none;
text-decoration: none;
max-width: 60px;
text-align: center;
}

.checker-inner-box .form-control, .checker-inner-box .checker-box input {
display: block;
width: 100%;
padding: .375rem .75rem;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #212529;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ced4da;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
border-radius: .25rem;
transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
background-color: #ffffff !important;
text-align: center;
box-shadow: none;
}

.checker-inner-box .resualt-box {
width: 100%;
max-width: 100px;
padding: 0;
margin: 0;
border: none;
outline: none;
}
.services__item-four_1 {
    background: #ebebeb9c;

    padding: 40px;
    border-radius: 15px;
}
.quote-form h2
{
    margin-bottom: 25px;
    border-bottom: 1px solid #00000024;
    border-bottom-style: dashed;
    padding-bottom: 10px;
}
.form-group input
{
        width: 100%;
    border: 1px solid #38383842;
    border-radius: 4px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
    transition: 0.3s;
    height: 43px;
    margin-top: 0px;
    margin-bottom: 15px;
}
.ckeck_by
{
    display: flex;
    align-items: baseline;
}
.ckeck_by input
{
    margin-right: 8px;
}
.call_bnt a
{
  text-decoration: none;
}
.call_bnt span
{
      background: #00143d;
    color: #fff;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 25px;
}
.call_bnt p
{
   max-width: 580px;
    margin: auto;
    margin-top: 30px;
    color: #000;
    border: 1px solid #0000001c;
    padding: 10px 30px;
    border-radius: 10px;
    border-style: dashed;
}
.call_bnt h3
{
   font-size: 23px;
    margin-bottom: 25px;
}
.hide{
    display:none;
}
.error{
    color:red;
}
.services__item-four {
    padding: 40px 88px;
}
.box_style_ces
{
    border: 1px solid #0000006b;
    padding: 30px;
    border-style: dashed;
    border-radius: 10px;
    text-align: center;
    background: #858d9f24;
}
.mb-10 {
    margin-bottom: 10px;
}
.about__content-three_2 > p {
    margin-bottom: 10px;
    width: 100%;
    color: #000;
    text-align: left;
}
</style>
    <!-- main-area -->
    <main class="fix">

        <!-- banner-area -->
        <section class="banner__area-two banner__bg-two" data-background="assets/img/banner_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner__content-two">
                            <h2 class="title" data-aos="fade-up" data-aos-delay="100">Get a Great Mortgage Rate</h2>
                            <p data-aos="fade-up" data-aos-delay="300">Use one of our quick & easy tools to find out what you qualify for, FREE!</p>
                            <a class='btn border-btn' data-aos-delay='600' data-aos='fade-up' href='home-purchase-qualifier-quote.php'>Home Purchase Qualifier</a> <a class='btn border-btn' data-aos-delay='600' data-aos='fade-up' href='refinance.php'>Refinance Rate Checker</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-social banner-social-two">
                <h5 class="title">Follow us</h5>
                <ul class="list-wrap">
                    <li><a href="https://www.facebook.com/people/OLLender/61561407964481/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://x.com/ollender1" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/ollender1/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.pinterest.com/ollender1/" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/ollender" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href=" https://www.tiktok.com/@ollender1" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
            <div class="banner__shape-two">
                <img src="assets/img/banner/h3_banner_shape01.png" alt="" class="heartbeat">
            </div>
        </section>
        <!-- banner-area-end -->


        <!-- about-area -->
        <section class="about__area-three about__bg-two" data-background="assets/img/bg/h3_about_bg.jpg" style="    padding-bottom: 0px;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="about__content-three" style="width: 100%;">
                            <a href="tel:(888) 241-3106"><img src="assets/img/banner_img_ollender.jpg" alt="image" style="border-radius: 20px;width: 100%;"></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
        <!-- <section class="about__area-three about__bg-two" data-background="assets/img/bg/h3_about_bg.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-center box_style_ces">
                    <div class="col-lg-12">
                        <div class="about__content-three">
                            <div class="section-title mb-10 tg-heading-subheading animation-style3">
                                <h2 class="title tg-element-title">WE SHOP 200+</h2>
                            </div>
                            <p><strong>DIFFERENT LENDERS TO FIND FASTER, EASIER AND CHEAPER <br>MORTGAGE FOR CONSUMER'S HOME PURCHASE OR REFINANCE.</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about__content-three_2 ">
                            <p><strong>CONFORMING (FIXED AND VARIABLE RATES)</strong></p>
                            <p><strong>FHA (DOWN TO 500 FICO)</strong></p>
                            <p><strong>USDA</strong></p>
                            <p><strong>NO FICO SCORE (FHA & VA)</strong></p>
                            <p><strong>DPA (Down Payment Assistance)</strong></p>
                            <p><strong>203K</strong></p>
                            <p><strong>JUMBO & JUMBO VA</strong></p>
                            <p><strong>(89.99 LTV with no MI up to $3 million) </strong></p>
                            <p><strong>HIGH BALANCE</strong></p>
                            <p><strong>SECOND</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about__content-three_2">
                            <p><strong>HELOC</strong></p>
                            <p><strong>PIGGY BACK</strong></p>
                            <p><strong>40 YEAR TERMS</strong></p>
                            <p><strong>1/0 (INTEREST ONLY)</strong></p>
                            <p><strong>ALL IN ONE</strong></p>
                            <p><strong>BK & FC</strong></p>
                            <p><strong>MANUFACTURED</strong></p>
                            <p><strong>FIRST TIME HOME BUYERS</strong></p>
                            <p><strong>INVESTOR</strong></p>
                            <p><strong>NON-WARRANTABLE CONDO</strong></p>
                            <p><strong>FOREIGN NATIONAL</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about__content-three_2">
                            <p><strong>ITIN</strong></p>
                            <p><strong>DACA</strong></p>
                            <p><strong>1-TIME CLOSE CONSTRUCTION</strong></p>
                            <p><strong>RENOVATION</strong></p>
                            <p><strong>REVERSE</strong></p>
                            <p><strong>HARD MONEY</strong></p>
                            <p><strong>FIX N FLIP</strong></p>
                            <p><strong>DSCR (Debt Service Coverage Ratio)</strong></p>
                            <p><strong>COMMERCIAL</strong></p>
                            <p><strong>CHURCH'S</strong></p>
                            <p><strong>BANK STATEMENT</strong></p>
                            <p><strong>BRIDGE LOAN</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about__content-three_2">
                            <p><strong>LAND/LOT LOAN</strong></p>
                            <p><strong>FARM/RANCH</strong></p>
                            <p><strong>MOBILE HOMES</strong></p>
                            <p><strong>NO INCOME VERIFICATION</strong></p>
                            <p><strong>INVESTMENT PROPERTIES</strong></p>
                        </div>
                        <div class="about-bottom about-bottom-two">

                                <div class="about__phone">
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <span>Toll Free Call</span>
                                        <a href="tel:(888) 241-3106">(888) 241-3106</a>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </section> -->

        <section class="about__area-three about__bg-two" data-background="assets/img/bg/h3_about_bg.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about__img-wrap-three">
                            <img src="assets/img/images/h3_about_img01.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section-title mb-25 tg-heading-subheading animation-style3">
                                <span class="sub-title">About Our Company</span>
                                <h2 class="title tg-element-title">Be confident in your mortgage search</h2>
                            </div>
                            <p>Having a local expert by your side for one of life’s biggest financial decisions is important. That’s why OLLender helps you partner with a local mortgage broker. An independent, licensed professional in your area who can shop on your behalf and give you access to more home loan options — like 0% Down Purchase*, VA loans, jumbo and more — than a bank or an online lender. In fact, working with a mortgage broker has saved homebuyers, like you, $9,407 on average.</p>
                            <div class="about__content-inner about__content-inner-two">
                                <div class="about__list-box about__list-box-two">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-arrow-button"></i>Residential Mortgage</li>
                                        <li><i class="flaticon-arrow-button"></i>Commercial Mortgage</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services__area-three services__bg-three bag_color">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title white-title text-center mb-50 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title" style="color: #fff;">What We Do</h2>
                            <p style="color: #fff;">We’re making getting a mortgage easier than ever before. Edge Home Finance Corporation has an experienced team of brokers on staff.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-investment-1"></i>
                                </div>
                                <div class="services__item-top-title">
                                    <h2 class="title">Home Purchase Loans</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Secure a home purchase loan that utilizes today’s great mortgage rates to make your dream home affordable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-finance"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Refinance Rates</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Lock in great terms with current interest rates to ensure your home remains affordable—or build more equity with an update!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Rate Comparisons</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Don’t just take the first offer. Shop around. Use our rate comparisons to find the best possible plan for your home ownership strategy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-financial-profit"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Fast Funding</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Seize opportunity as soon as you can with our fast funding options, giving you the freedom to cure that house fever.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-insurance-agent"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Evaluate Your Property</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Know where you stand. With a property evaluation in hand, you’ll have better access to your options so you can see the next move.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-three">
                            <div class="services__item-top">
                                <div class="services__icon-three">
                                    <i class="flaticon-light-bulb"></i>
                                </div>
                                <div class="services__top-title">
                                    <h2 class="title">Cash-Out Refinance</h2>
                                </div>
                            </div>
                            <div class="services__content-three">
                                <p>Take advantage of your home’s equity with a cash-out refinance. It’s your cash — spend it how you see fit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="services__item-three">
                            <div class="services__content-three">
                                <a class='btn btn-two' href='personalized-rate-quote.php'>Get a FREE Personalized Rate Quote Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- services-area -->
        <section class="services__area-six services__bg-six">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title white-title mb-40 tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title">Get Your Residential and Commercial Mortgage Quote</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="services__tab-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link active" id="health-tab" data-bs-toggle="tab" data-bs-target="#health-tab-pane" type="button" role="tab" aria-controls="health-tab-pane" aria-selected="true"><i class="flaticon-investment-1"></i>
                                        <div>
                                            <h4>Residential Mortgage</h4>
                                        <p> Browse rate comparisons to see which individual mortgage terms make the most sense for&nbsp;you.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link" id="travel-tab" data-bs-toggle="tab" data-bs-target="#travel-tab-pane" type="button" role="tab" aria-controls="travel-tab-pane" aria-selected="false"><i class="flaticon-finance"></i>
                                    <div>
                                            <h4>Commercial Mortgage</h4>
                                        <p> Browse rate comparisons to see which individual mortgage terms make the most sense for&nbsp;you.</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="health-tab-pane" role="tabpanel" aria-labelledby="health-tab" tabindex="0">
                                    <!-- ==============Step-1================= -->
                                    <div class="services__item-four shine-animate-item" id="residential_mortgage_1">
                                        <div class="services__content-four">
                                            <h2 class="title">Today's Residential Mortgage Rates</h2>
                                            <p>Mortgage rates change daily and vary depending on your unique situation. Get your FREE customized quote here!</p>
                                            <div class="inputWithIcon">
                                                <input type="text" placeholder="Zip Code"  id="residential_zip_code" maxlength="5" class="numbers">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <p id="zip-error" class="error"></p>

                                            <button class="btn btn-primary" id="btn_zip" style="margin-top: 0px;">Get quote</button>
                                        </div>
                                    </div>
                                    <!-- ==============Step-1================= -->

                                    <!-- ==============Step-2================= -->
                                        <div class="services__item-four_1 shine-animate-item hide" id="residential_mortgage_2">
                                        <div class="services__content-four">

                                            <h2 class="title">Residential Mortgage Quote</h2>
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="quform-element form-group mb_15">
                                                        <label for="first_name">First Name <span>*</span></label>
                                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" >
                                                        <p class="error" id="error-first-name"></p>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="quform-element form-group mb_15">
                                                        <label for="last_name">Last Name <span>*</span></label>
                                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" >
                                                        <p class="error" id="error-last-name"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="quform-element form-group mb_15">
                                                        <label for="phone_number">Phone Number <span>*</span></label>
                                                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" >
                                                        <p class="error" id="error-phone-number"></p>
                                                    </div>
                                                </div>
                                               <div class="col-md-6">
                                                    <div class="quform-element form-group mb_15">
                                                        <label for="email">Email </label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="@email">
                                                        <p class="error" id="error-email"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="checker-block">
                                                <p class="titel-text">Prove Your Humanity:</p>
                                                <div class="checker-inner-box">
                                                    <div class="checker-box">
                                                         <input type="text" class="form-control" id="num1" name="num1" value="<?php echo(rand(1,9)); ?>" readonly="">
                                                    </div>
                                                    <span class="sine">+</span>
                                                    <div class="checker-box">
                                                        <input type="text" class="form-control" id="num2" name="num2" value="<?php echo(rand(1,9)); ?>" readonly="">
                                                    </div>
                                                    <span class="sine">=</span>
                                                    <div class="resualt-box">
                                                        <input type="text" class="form-control" id="result" name="result" placeholder="value">

                                                    </div>
                                                </div>
                                                <span class="error" id="error-result"></span>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="check-box check_box_b" style="margin-top: 15px;">
                                                        <div class="ckeck_by">
                                                        <input id="agree" type="checkbox" name="agree" value="Yes" >
                                                        <label for="chkDisclaimer">
                                                            By providing your information, you agree to our <a href="" data-toggle="modal" data-target="#basicModal">Terms Of Use</a>.
                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div><span class="error" id="error-agree"></span></div>

                                                </div>
                                            </div>

                                            <div class="row row_clr" style="padding-top: 15px;  text-align: center;">

                                                <div class="col-md-12">
                                                <div class="quform-submit-inner">
                                                    <input type="hidden" id="form_submit_ip" name="form_submit_ip" value="103.165.115.152">

                                                    <button class="btn btn-primary " id="residential-submit">SUBMIT</button>

                                                </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                        </div>
                                        <!-- ==============Step-2================= -->


                                        <!-- ==============Step-3================= -->
                                        <div class="services__item-four_1 shine-animate-item hide" id="res-success">
                                            <div class="col-md-12 text-center">
                                              <div class="thank-you-message card call_bnt" style="padding: 20px;">
                                                  <h3 style="">Thank you for showing your interest. By submitting the information you allow us to contact you back. Our team of experts will contact you shortly</h3>
                                                  <a href="tel:(888) 241-3106"><span>Call Us: (888) 241-3106</span></a>
                                                  <p>By clicking & submitting this form you authorise us to call you back even if your number is in National or Federal Do Not Call List</p>
                                              </div>
                                          </div>
                                        </div>
                                        <!-- ==============Step-3================= -->
                                </div>
                                <div class="tab-pane fade show active" id="travel-tab-pane" role="tabpanel" aria-labelledby="health-tab" tabindex="0">
                                    <!-- ==============Step-1================= -->
                                    <div class="services__item-four shine-animate-item hide" id="commercial_mortgage_1">
                                        <div class="services__content-four">
                                            <h2 class="title">Today's Commercial Mortgage Rates</h2>
                                            <p>Mortgage rates change daily and vary depending on your unique situation. Get your FREE customized quote here!</p>
                                            <div class="inputWithIcon">
                                                <input type="text" placeholder="Zip Code"  id="commercial_zip_code" maxlength="5" class="numbers">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <p id="commercial_zip_error" class="error"></p>

                                            <button class="btn btn-primary" id="commercial_btn_zip" style="margin-top: 0px;">Get quote</button>
                                        </div>
                                    </div>
                                    <!-- ==============Step-1================= -->

                                    <!-- ==============Step-2================= -->
                                        <div class="services__item-four_1 shine-animate-item hide" id="commercial_mortgage_2">
                                        <div class="services__content-four">

                                            <h2 class="title">Commercial Mortgage Quote</h2>
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="quform-element form-group mb_15">
                                                        <label for="first_name">First Name <span>*</span></label>
                                                        <input type="text" name="first_name" id="commercial_first_name" class="form-control" placeholder="First Name" >
                                                        <p class="error" id="commercial_error-first-name"></p>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="quform-element form-group mb_15">
                                                        <label for="last_name">Last Name <span>*</span></label>
                                                        <input type="text" name="last_name" id="commercial_last_name" class="form-control" placeholder="Last Name" >
                                                        <p class="error" id="commercial_error-last-name"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="quform-element form-group mb_15">
                                                        <label for="phone_number">Phone Number <span>*</span></label>
                                                        <input type="text" name="commercial_phone_number" id="commercial_phone_number" class="form-control" placeholder="Phone Number" >
                                                        <p class="error" id="commercial_error-phone-number"></p>
                                                    </div>
                                                </div>
                                               <div class="col-md-6">
                                                    <div class="quform-element form-group mb_15">
                                                        <label for="email">Email </label>
                                                        <input type="email" name="email" id="commercial_email" class="form-control" placeholder="@email">
                                                        <p class="error" id="commercial_error-email"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="checker-block">
                                                <p class="titel-text">Prove Your Humanity:</p>
                                                <div class="checker-inner-box">
                                                    <div class="checker-box">
                                                         <input type="text" class="form-control" id="commercial_num1" name="commercial_num1" value="<?php echo(rand(1,9)); ?>" readonly="">
                                                    </div>
                                                    <span class="sine">+</span>
                                                    <div class="checker-box">
                                                        <input type="text" class="form-control" id="commercial_num2" name="commercial_num2" value="<?php echo(rand(1,9)); ?>" readonly="">
                                                    </div>
                                                    <span class="sine">=</span>
                                                    <div class="resualt-box">
                                                        <input type="text" class="form-control" id="commercial_result" name="result" placeholder="value">

                                                    </div>
                                                </div>
                                                <span class="error" id="commercial_error-result"></span>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="check-box check_box_b" style="margin-top: 15px;">
                                                        <div class="ckeck_by">
                                                        <input id="commercial_agree" type="checkbox" name="commercial_agree" value="Yes" >
                                                        <label for="chkDisclaimer">
                                                            By providing your information, you agree to our <a href="" data-toggle="modal" data-target="#basicModal">Terms Of Use</a>.
                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div><span class="error" id="commercial_error-agree"></span></div>

                                                </div>
                                            </div>

                                            <div class="row row_clr" style="padding-top: 15px;  text-align: center;">

                                                <div class="col-md-12">
                                                <div class="quform-submit-inner">
                                                    <input type="hidden" id="form_submit_ip" name="form_submit_ip" value="103.165.115.152">

                                                    <button class="btn btn-primary " id="commercial_submit">SUBMIT</button>

                                                </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                        </div>
                                        <!-- ==============Step-2================= -->


                                        <!-- ==============Step-3================= -->
                                        <div class="services__item-four_1 shine-animate-item hide" id="com-success">
                                            <div class="col-md-12 text-center">
                                              <div class="thank-you-message card call_bnt" style="padding: 20px;">
                                                  <h3 style="">Thank you for showing your interest. By submitting the information you allow us to contact you back. Our team of experts will contact you shortly</h3>
                                                  <a href="tel:(888) 241-3106"><span>Call Us: (888) 241-3106</span></a>
                                                  <p>By clicking & submitting this form you authorise us to call you back even if your number is in National or Federal Do Not Call List</p>
                                              </div>
                                          </div>
                                        </div>
                                        <!-- ==============Step-3================= -->
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- request-area -->
        <section class="request__area-two">
            <div class="request__bg-two" data-background="assets/img/bg/request_bg.jpg"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="request__content-two">
                            <h2 class="title">Offering The Best <span>Experience Of</span> Mortgage Rates</h2>
                            <div class="request__phone">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    <span>Toll Free Call</span>
                                    <a href="tel:(888) 241-3106">(888) 241-3106</a>
                                </div>
                            </div>
                            <a href="tel:(888) 241-3106" class="btn">Request a Free Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- request-area-end -->


        <!-- blog-post-area -->
        <section class="blog__post-area-two blog__post-area-three blog__post-bg-two" data-background="assets/img/bg/blog_post_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">OUR BLOG UPDATE</span>
                            <h2 class="title tg-element-title">Featured News And Insights</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two">
                            <div class="blog__post-thumb-two">
                                <a href='what-are-the-3-types-of-reverse-mortgages.php'><img src="assets/img/h5_blog_post01.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <h2 class="title"><a href='what-are-the-3-types-of-reverse-mortgages.php'>What Are the 3 Types of Reverse Mortgages?</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-content">
                                        <p><a href='what-are-the-3-types-of-reverse-mortgages.php'>Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two">
                            <div class="blog__post-thumb-two">
                                <a href='is-property-tax-included-in-mortgage.php'><img src="assets/img/h2_blog_post02.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <h2 class="title"><a href='is-property-tax-included-in-mortgage.php'>Is Property Tax Included in Mortgage?</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-content">
                                        <p><a href='is-property-tax-included-in-mortgage.php'>Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two">
                            <div class="blog__post-thumb-two">
                                <a href='how-does-a-reverse-mortgage-work.php'><img src="assets/img/h2_blog_post06.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <h2 class="title"><a href='how-does-a-reverse-mortgage-work.php'>How Does a Reverse Mortgage Work?</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-content">
                                        <p><a href='how-does-a-reverse-mortgage-work.php'>Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-shape-wrap">
                <img src="assets/img/images/h3_blog_shape01.png" alt="" data-aos="fade-right" data-aos-delay="400">
                <img src="assets/img/images/h3_blog_shape02.png" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- blog-post-area-end -->

    </main>
    <!-- main-area-end -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
    <script>
    $(document).ready(function(){
        $("#travel-tab").click(function(){

                $("#commercial_mortgage_1").show();
                tabname = "com-tab";

        });
        $('.numbers').keypress(function (e) {
         if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        });
        document.getElementById('phone_number').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ')'+'-'+ x[2] + (x[3] ? '-' + x[3] : '');
        });
        document.getElementById('commercial_phone_number').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ')'+'-'+ x[2] + (x[3] ? '-' + x[3] : '');
        });
        $("#btn_zip").click(function(){

            residential_zip_code = $("#residential_zip_code").val();
            residential_zip_code_length = $("#residential_zip_code").val().length;
                if(!residential_zip_code){

                $('#zip-error').html('This field required');

                }
                else if(residential_zip_code_length != 5)
                {
                $('#zip-error').html('plese enter 5 digit zip code');
                }
                else{  $('#residential_mortgage_1').hide();
                $('#residential_mortgage_2').show(); }

         });
         $("#residential-submit").click(function(){
            first_name = $('#first_name').val().trim();
            last_name = $('#last_name').val();
            phone_number = $('#phone_number').val();
            address = $('#email').val();
            result = $('#result').val();
            phone_length = $('#phone_number').val().length;
            var quote_for = "Residential Mortgage";
            var num1 = parseInt($('#num1').val());
            var num2 = parseInt($('#num2').val());
            var num3 = num1 + num2;

            agree = $('#agree').is(':checked');
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var regex = /^[A-Za-z\s]+$/;
            // var phoneregex = /^(\+1|1)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
            // var phone_contact =$('#phone').val().length;
            var isValid = true;
            if(!first_name){
                isValid = false;
                $('#error-first-name').html('this field required');
            }else if(/^\s*$/.test(first_name)){
                isValid = false;
                $('#error-first-name').html('this field required');
            }
            else if(!regex.test(first_name))
            {
                isValid = false;
                $('#error-first-name').html('Name must not contain numbers or special characters');
            }else if(!last_name){
                isValid = false;
                $('#error-last-name').html('this field required');
            }else if(/^\s*$/.test(last_name)){
                isValid = false;
                $('#error-last-name').html('this field required');
            }
            else if(!regex.test(last_name))
            {
                isValid = false;
                $('#error-last-name').html('Name must not contain numbers or special characters');
            }else if(!phone_number){
                isValid = false;
                $('#error-phone-number').html('this field required');
            }else if(phone_length != 14){
                isValid = false;
                $('#error-phone-number').html('Please Enter  Valid Phone Number');
            }
            else if(!address){
                isValid = false;
                $('#error-email').html('this field required');
            }else if(!emailRegex.test(address)){
                isValid = false;
                $('#error-email').html('Please enter a valid email address');
            }else if(!result){
                // alert(result);
                isValid = false;
                $('#error-result').html('this field required');
            }else if(result != num3){
                isValid = false;
                $('#error-result').html('plese check result');
            }
            else if(!agree){
                isValid = false;
                $('#error-agree').html('this field required');
            }
            else{
                // alert("all done");

                $.ajax({
                        url: "save_residential_mortgage.php",
                        type: "POST",
                        data: {
                            zip_code: residential_zip_code,
                            quote_for : quote_for,
                            first_name: first_name,
                            last_name: last_name,
                            address: address,
                            phone_number : phone_number,
                            result : result,
                            agree : agree

                        },
                        cache: false,
                        success: function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){


                                $("#residential_mortgage_1").hide();
                                $("#residential_mortgage_2").hide();
                                $("#res-success").show();
                                //  $('#success').html('Recored Saved successfully !');

                            }
                            else if(dataResult.statusCode==201){
                                $("#progress_from").hide();
                                // this is error message
                                $("#error-insert").show();


                            }

                        }
                    });
             }
        });
        $("#commercial_btn_zip").click(function(){

                  commercial_zip_code = $("#commercial_zip_code").val();
                  var commercial_zip_code_length = $("#commercial_zip_code").val().length;
                      if(!commercial_zip_code){

                      $('#commercial_zip_error').html('This field required');

                      }
                      else if(commercial_zip_code_length != 5)
                      {
                      $('#commercial_zip_error').html('plese enter 5 digit zip code');
                      }
                      else{  $('#commercial_mortgage_1').hide();
                      $('#commercial_mortgage_2').show(); }

               });
               $("#commercial_submit").click(function(){
                commercial_first_name = $('#commercial_first_name').val();
                commercial_last_name = $('#commercial_last_name').val();
                commercial_phone_number = $('#commercial_phone_number').val();
                commercial_address = $('#commercial_email').val();
                var num1 = parseInt($('#commercial_num1').val());
                var num2 = parseInt($('#commercial_num2').val());
                var num3 = num1 + num2;
                commercial_result = $('#commercial_result').val();
                 commercial_phone_length = $('#commercial_phone_number').val().length;
                // alert(commercial_phone_length);
                  var c_quote_for = "commercial Mortgage";


                  commercial_agree = $('#commercial_agree').is(':checked');
                  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                  var regex = /^[A-Za-z\s]+$/;
                  // var phoneregex = /^(\+1|1)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
                  // var phone_contact =$('#phone').val().length;
                  var isValid = true;
                  if(!commercial_first_name){
                      isValid = false;
                      $('#commercial_error-first-name').html('this field required');
                  }else if(/^\s*$/.test(commercial_first_name)){
                      isValid = false;
                      $('#commercial_error-first-name').html('this field required');
                  }
                  else if(!regex.test(commercial_first_name))
                  {
                      isValid = false;
                      $('#commercial_error-first-name').html('Name must not contain numbers or special characters');
                  }else if(!commercial_last_name){
                      isValid = false;
                      $('#commercial_error-last-name').html('this field required');
                  }if(/^\s*$/.test(commercial_last_name)){
                      isValid = false;
                      $('#commercial_error-last-name').html('this field required');
                  }
                  else if(!regex.test(commercial_last_name))
                  {
                      isValid = false;
                      $('#commercial_error-last-name').html('Name must not contain numbers or special characters');
                  }else if(!commercial_phone_number){
                      isValid = false;
                      $('#commercial_error-phone-number').html('this field required');
                  }
                   else if(commercial_phone_length != 14){
                       isValid = false;
                       $('#commercial_error-phone-number').html('Please Enter  Valid Phone Number');
                  }
                  else if(!commercial_address){

                      isValid = false;
                      $('#commercial_error-email').html('this field required');
                  }else if(!emailRegex.test(commercial_address)){
                    // alert("valid");
                      isValid = false;
                      $('#commercial_error-email').html('Please enter a valid email address');
                  }
                else if(!commercial_result){
                    //   alert(commercial_result);
                      isValid = false;
                      $('#commercial_error-result').html('this field required');
                  }else if(commercial_result != num3){
                      isValid = false;
                      $('#commercial_error-result').html('plese check result');
                  }
                  else if(!commercial_agree){
                      isValid = false;
                      $('#commercial_error-agree').html('this field required');
                  }
                  else{
                    //   alert("all done");

                      $.ajax({
                              url: "save_residential_mortgage.php",
                              type: "POST",
                              data: {
                                  zip_code: commercial_zip_code,
                                  quote_for : c_quote_for,
                                  first_name: commercial_first_name,
                                  last_name: commercial_last_name,
                                  address: commercial_address,
                                  result : commercial_result,
                                  phone_number : commercial_phone_number,
                                  agree : commercial_agree

                              },
                              cache: false,
                              success: function(dataResult){
                                  var dataResult = JSON.parse(dataResult);
                                  if(dataResult.statusCode==200){


                                      $("#commercial_mortgage_1").hide();
                                      $("#commercial_mortgage_2").hide();
                                      $("#com-success").show();
                                      //  $('#success').html('Recored Saved successfully !');

                                  }
                                  else if(dataResult.statusCode==201){
                                      $("#progress_from").hide();
                                      // this is error message
                                      $("#error-insert").show();


                                  }

                              }
                          });
                   }
              });


    });

jQuery("#residential_zip_code").on("input", function() {
  if (/^0/.test(this.value)) {
    this.value = this.value.replace(/^0/, "")
  }
})

jQuery("#commercial_zip_code").on("input", function() {
  if (/^0/.test(this.value)) {
    this.value = this.value.replace(/^0/, "")
  }
})
</script>
<?php include_once ("include/footer.php") ?>
